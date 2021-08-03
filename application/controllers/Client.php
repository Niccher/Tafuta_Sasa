<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index($page = 'home'){
		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar');
		$this->load->view('client/'.$page);
		$this->load->view('client/template/tail');
	}

	public function test($page = 'home'){
		echo 'retreger';
	}
}
