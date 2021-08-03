<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index($page = 'home'){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view(''.$page);
		$this->load->view('template/tail');
	}
}
