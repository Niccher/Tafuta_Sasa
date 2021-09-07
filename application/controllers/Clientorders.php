<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientorders extends CI_Controller {

	public function index($page = 'orders'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'order';
		$uuid = $this->session->userdata('log_id');

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/orders/'.$page);
		$this->load->view('client/template/tail_create');
	}

	public function orders_make($page = 'create'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'order_make';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/orders/'.$page);
		$this->load->view('client/template/tail_create');
	}

	public function account($page = 'payments'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'account';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/sales/'.$page);
		$this->load->view('client/template/tail');
	}

	public function orders_add($page = 'add'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'order_make';

		$this->form_validation->set_rules('ord_name','Order Name','required|trim');
        $this->form_validation->set_rules('ord_body','Order Body','required|trim');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('client/template/header');
			$this->load->view('client/template/sidebar', $title);
			$this->load->view('client/orders/'.$page);
			$this->load->view('client/template/tail_create');
        }else{

        	$q_name = $this->mod_crypt->Enc_String($this->input->post('ord_name'));
        	$q_desc = $this->mod_crypt->Enc_String($this->input->post('ord_body'));
        	$q_files = $this->mod_orders->order_get_attachments();
        	$q_level = $this->mod_crypt->Enc_String($this->input->post('ord_level'));
        	$q_cite = $this->mod_crypt->Enc_String($this->input->post('ord_citing'));
        	$q_pgs = $this->mod_crypt->Enc_String($this->input->post('ord_pgs'));
        	$q_date = $this->mod_crypt->Enc_String($this->input->post('ord_date'));

        	$this->mod_orders->make_order($q_name, $q_desc, $q_files, $q_level,$q_cite, $q_pgs, $q_date);
        }
	}

	public function orders_add_attachment(){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

        $data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

		$file_prefix = $person_id.'___';

		if (!empty($_FILES) ) {
             
            $tempFile = $_FILES['file']['tmp_name'];
            $realFile = $_FILES['file']['name'];

            $ext = strtolower(pathinfo($realFile, PATHINFO_EXTENSION));

            $old_name = $_FILES['file']['name'];
            $new_name = preg_replace('/[^A-Za-z0-9.]/', '_', $old_name);

            $code = substr(time(), -7);
            $newfilename = $file_prefix.$code."_".$new_name;
               
            $this->mod_questions->make_temp_upload($person_id, $newfilename);
            move_uploaded_file($tempFile, "uploads/client_temp_orders/" . $newfilename);
        }

	}

	public function orders_make_attachment_ui() {
		$each_file = explode("|__|", $this->mod_orders->order_get_attachments());
        $fina_file_list='';

        $fina_file_list.='
            <div class="mb-3 position-relative">
                <div class="text-start">';

        for ($i=1; $i < count($each_file); $i++) { 
            $fina_file_list.= '
                <p class="text-muted mb-0">
                    <strong>'.$each_file[$i].' </strong>
                    <span class="text-danger far fa-trash-alt delete_attach_file_" id="delete_attach_file_'.$each_file[$i].'"></span>
                </p>';
        }

        $fina_file_list.= '
                </div>
            </div>';

        echo $fina_file_list;

	}

	public function orders_attachment_delete($order_id) {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

        $file = explode("delete_attach_file_", $this->uri->segment(4));
        unlink('uploads/client_temp_orders/'.$file[1]);

	}

	public function orders_get_attachment() {
		echo $filename = urldecode($this->uri->segment(3));
		$filepath = 'uploads/client_orders/'.$filename;
		force_download($filepath, NULL);
	}

}
