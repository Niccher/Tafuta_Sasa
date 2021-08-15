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

        $data['list_answers_all'] = $this->mod_questions->get_questions();

		$this->load->view('template/header');
		$this->load->view('searches/'.$page, $data);
		$this->load->view('template/tail');
	}

	public function view_answer_name($page = 'answers_clean'){

		$q_name = $this->mod_crypt->Enc_String($_GET['q_name']);
		$data['list_answers_details'] = $this->mod_questions->get_question_by_name($q_name);

		$count = ($data['list_answers_details']->Qn_Viewed) + 1;
		$q_id = ($data['list_answers_details']->Qn_Id);
		$this->mod_questions->update_question_view($q_id, $count);

		if (! $this->session->userdata('log_id') ) {
            $s_user = "Unknown";
        }else{
        	$s_user = $this->session->userdata('log_id');
        }
		$this->mod_questions->make_question_view($q_id, $s_user);

		$this->load->view('template/header');
		$this->load->view('searches/'.$page, $data);
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
