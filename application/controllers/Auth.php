<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login($page = 'login'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function register($page = 'register'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function forgot($page = 'forgot'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function activate($page = 'activate'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function reset($page = 'reset'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function terms($page = 'conditions'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function privacy($page = 'privacy'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function home($page = 'home'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

}