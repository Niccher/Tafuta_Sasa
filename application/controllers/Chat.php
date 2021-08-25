<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function client_init($page = 'chats'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'chat';
		$convos = $this->mod_chats->client_convos($this->session->userdata('log_id'));
        $chats = "";

        foreach ($convos as $messages) {
        	if ($messages['Chat_Sender'] == $this->session->userdata('log_id') ) {
        		$chats.= '
        				<div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">'.$this->mod_crypt->Dec_String($messages['Chat_Message']).'</div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">
                                        <span>'.date("M d H:i:s",$messages['Chat_Sent']).'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        		';
        	}
        	if ($messages['Chat_Sender'] != $this->session->userdata('log_id') ) {
        		$chats.= '
        				<div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="'.base_url('assets/img/team/11.jpg').'" alt="Admin" />
                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">'.$this->mod_crypt->Dec_String($messages['Chat_Message']).'</div>
                                    </div>
                                    <div class="text-400 fs--2">
                                        <span>'.date("M d H:i:s",$messages['Chat_Sent']).'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        		';
        	}
        }

        $data['sent_msg'] = $chats;

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/msgs/'.$page, $data);
		$this->load->view('client/template/tail_chat');
	}

	public function client_send(){

        $sender = $this->session->userdata('log_id');
        if ($sender == "" || $sender == NULL) {
        	$sender = "Unknown";
        }
        //$user_info = $this->mod_users->get_vars($sender);
        $msg_body = $this->mod_crypt->Enc_String($_POST['convo_body']);
        $this->mod_chats->client_send($msg_body, "Admin", $sender );

	}

	public function client_convo_with($person_id){
		//$uuid = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$uuid = $this->mod_crypt->Dec_String(urldecode($person_id));
        $convos = $this->mod_chats->client_convos($uuid);
        $chats = "";
        foreach ($convos as $messages) {
        	if ($messages['Chat_Sender'] == $this->session->userdata('log_id') ) {
        		$chats.= '
        				<div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">'.$this->mod_crypt->Dec_String($messages['Chat_Message']).'</div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">
                                        <span>'.date("M d H:i:s",$messages['Chat_Sent']).'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        		';
        	}
        	if ($messages['Chat_Sender'] != $this->session->userdata('log_id') ) {
        		$chats.= '
        				<div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="'.base_url('assets/img/team/11.jpg').'" alt="Admin" />
                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">'.$this->mod_crypt->Dec_String($messages['Chat_Message']).'</div>
                                    </div>
                                    <div class="text-400 fs--2">
                                        <span>'.date("M d H:i:s",$messages['Chat_Sent']).'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        		';
        	}
        }

        echo $chats;
	}

	public function questions_view($page = 'view'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'questions';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/questions/'.$page);
		$this->load->view('client/template/tail');
	}

}
