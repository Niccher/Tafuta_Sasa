<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function landing($page = 'landing'){

		$this->load->view('template/header');
		$this->load->view('landing/'.$page);
		$this->load->view('template/tail');
	}

	public function search($page = 'answers_listings'){

		$this->load->view('template/header');
		$this->load->view('searches/'.$page);
		$this->load->view('template/tail');
	}

	public function view_answer($page = 'answers_details'){

		$this->load->view('template/header');
		$this->load->view('searches/'.$page);
		$this->load->view('template/tail');
	}

	public function view_answer_clean($page = 'answers_clean'){

		$this->load->view('template/header');
		$this->load->view('searches/'.$page);
		$this->load->view('template/tail');
	}
}
