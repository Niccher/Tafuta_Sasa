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

    public function admin_send(){

        $uuid =  $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));
        $msg =  $this->mod_crypt->Enc_String($_POST['convo_body']);
        $uuid1 =  $this->mod_crypt->Dec_String(urldecode($_POST['convo_person']));

        if ($uuid1 == $uuid) {
            $this->mod_chats->client_send($msg, $uuid1, "Admin" );
            echo "Message Sent";
        }else{
            echo "Message Not Sent";
        }

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

    public function admin_convo_with($person_id){
        //$uuid = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));
        $uuid = $this->mod_crypt->Dec_String(urldecode($person_id));
        $convos = $this->mod_chats->client_convos($uuid);
        $user_info = $this->mod_users->get_vars($uuid);
        $chats = "";
        $user_ids = str_replace("%", "" ,urlencode($this->mod_crypt->Enc_String($uuid)));
        $user_info_name = $this->mod_crypt->Dec_String($user_info->Name);

        $chats.= '
            <div class="tab-pane card-chat-pane"  id="'.$user_ids.'" role="tabpanel" aria-labelledby="'.$user_ids.'">
                <div class="chat-content-header">
                    <div class="row flex-between-center">
                        <div class="col-6 col-sm-8 d-flex align-items-center">
                            <a class="pe-3 text-700 d-md-none contacts-list-show" href="#">
                                <div class="fas fa-chevron-left"></div>
                            </a>
                            <div class="min-w-0">
                                <h5 class="mb-0 text-truncate fs-0">'.$user_info_name.'</h5>
                                <div class="fs--2 text-400">Joined '.date('M Y d, H:i:s A',$user_info->Timestamp).'</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-content-body" style="display: inherit;">
                    <div class="chat-content-scroll-area scrollbar">
                        ';

        foreach ($convos as $messages) {
            if ($messages['Chat_Sender'] == "Admin" ) {
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
            if ($messages['Chat_Sender'] == $uuid ) {
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

                $chats.= '
                        </div>
                    </div>
                </div>';

        echo $chats;
    }

	public function admin_init($page = 'chats'){

        $typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

        $title['pg_name'] = 'chat';
        $convos = $this->mod_chats->client_convos("Admin");
        $init_users = "";
        $chats = "";   
        $all_users = array(); $uniq_users = array();

        foreach ($convos as $messages) {
            array_push($all_users, $messages['Chat_Sender']);
            array_push($all_users, $messages['Chat_Receiver']);
        }

        $uniq_users = array_reverse(array_unique($all_users));

        foreach ($uniq_users as $uniq_user) {
            if ($uniq_user != "Admin" ) {
                $user_ids = str_replace("%", "" ,urlencode($this->mod_crypt->Enc_String($uniq_user)));
                $user_ids = str_replace("%", "" ,urlencode($this->mod_crypt->Enc_String($uniq_user)));
                $user_info = $this->mod_users->get_vars($uniq_user);
                $user_info_name = $this->mod_crypt->Dec_String($user_info->Name);
                $last_msg = $this->mod_chats->last_msg_by($uniq_user);
                $init_users .= '
                    <div class="hover-actions-trigger chat-contact nav-item pull_user_chats" role="tab" data-bs-toggle="tab" data-bs-target="#'.$user_ids.'" id="'.$user_ids.'" aria-controls="'.$user_ids.'" aria-selected="false">
                        <div class="d-flex p-3">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="'.base_url('uploads/profile/'.$user_info->Avatar).'" alt="" />
                            </div>
                            <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 chat-contact-title">'.$user_info_name.'</h6>
                                    <span class="message-time fs--2">'.date('D H:i:s',$last_msg->Chat_Sent).'</span>
                                </div>
                                <div class="min-w-0">
                                    <div class="chat-contact-content pe-3">'.word_limiter($this->mod_crypt->Dec_String($last_msg->Chat_Message),10).'</div>
                                    <div class="position-absolute bottom-0 end-0 hover-hide"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        } 

        $data['sent_users'] = $init_users;
        $data['sent_chats'] = $chats;

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar', $title);
        $this->load->view('admin/msgs/'.$page,$data);
        $this->load->view('admin/template/tail_chat');
    }

}
