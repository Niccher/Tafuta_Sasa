<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function landing($page = 'landing'){

		$this->load->view('template/header');
		$this->load->view('landing/'.$page);
		$this->load->view('template/tail');
	}

	public function search($page = 'answers_listings'){

		$s_query = $this->mod_crypt->Enc_String(trim($_GET['s_query']));
		$s_user_ip = $this->input->ip_address();;
		if (! $this->session->userdata('log_id') ) {
            $s_user = "Unknown";
        }else{
        	$s_user = $this->session->userdata('log_id');
        }

        $this->mod_searches->make_search($s_user, $s_query, $s_user_ip);

		$this->load->view('template/header');
		$this->load->view('searches/'.$page);
		$this->load->view('template/tail');
	}

	public function view_answer($page = 'answers_details'){

		$this->load->view('template/header');
		$this->load->view('searches/'.$page);
		//$this->load->view('searches/dope');
		$this->load->view('template/tail');
	}

	public function view_answer_clean($page = 'answers_clean'){

		$this->load->view('template/header');
		$this->load->view('searches/'.$page);
		$this->load->view('template/tail');
	}
}
