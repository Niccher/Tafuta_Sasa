<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($page = 'home'){
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function test($page = 'home'){
		echo 'retreger';
	}
}
