<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	function __construct() {
	    parent::__construct();
	    $this->load->library("session");
    }

	public function questions($page = 'listing'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'questions';

		$data['qn_list'] = $this->mod_questions->get_questions();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/questions/'.$page, $data);
		$this->load->view('admin/template/tail');
	}

	public function questions_view($page = 'view'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'questions';

		$qn_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));

		$data['question_info'] = $this->mod_questions->get_question_by_id($qn_id);

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/questions/'.$page, $data);
		$this->load->view('admin/template/tail');
	}

	public function questions_add($page = 'add'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'questions_add';

		$this->form_validation->set_rules('ans_name','Question Name','required|trim');
        $this->form_validation->set_rules('ans_tags','Question Tags', 'required|trim');
        $this->form_validation->set_rules('ans_body','Answer Body','required|trim');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('admin/template/header');
			$this->load->view('admin/template/sidebar', $title);
			$this->load->view('admin/questions/'.$page);
			$this->load->view('admin/template/tail');
        }else{

        	$q_attached = $this->mod_questions->get_attachments();

		    /*$q_attached ="";
		    foreach ($attachments as $files) {
		    	$q_attached.= $files['Filename'].'|||';
		    }*/

        	$q_name = $this->mod_crypt->Enc_String($this->input->post('ans_name'));
        	$q_tags = $this->mod_crypt->Enc_String($this->input->post('ans_tags'));
        	$q_answer = $this->mod_crypt->Enc_String($this->input->post('ans_body'));
        	$q_subj = $this->mod_crypt->Enc_String($this->input->post('ans_subject'));
        	$q_level = $this->mod_crypt->Enc_String($this->input->post('ans_level'));
        	$q_pay = $this->mod_crypt->Enc_String($this->input->post('ans_pay'));
        	$q_cost = $this->mod_crypt->Enc_String($this->input->post('ans_price'));

        	$this->mod_questions->make_question($q_name, $q_tags, $q_answer, $q_subj, $q_level,$q_pay, $q_cost, $q_attached);

        	redirect('admin/questions');

        }
	}

	public function questions_add_attachment(){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

        $data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

		if (!empty($_FILES) ) {
             
            $tempFile = $_FILES['file']['tmp_name'];
            $realFile = $_FILES['file']['name'];

            $ext = strtolower(pathinfo($realFile, PATHINFO_EXTENSION));

            $old_name = $_FILES['file']['name'];
            $new_name = preg_replace('/[^A-Za-z0-9.]/', '_', $old_name);

            $code = substr(time(), -7);
            $newfilename = $code."_".$new_name;
               
            $this->mod_questions->make_temp_upload($person_id, $newfilename);
            move_uploaded_file($tempFile, "uploads/temp_orders/" . $newfilename);
        }

        echo $this->mod_questions->get_attachments();

	}

	public function questions_get_attachment() {
		echo $filename = urldecode($this->uri->segment(3));
		$filepath = 'uploads/orders/'.$filename;
		force_download($filepath, NULL);
	}

	public function questions_deleted($q_uuid) {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$this->mod_questions->get_delete_question($this->mod_crypt->Dec_String(urldecode($q_uuid)));

		redirect('admin/questions');
	}
}
