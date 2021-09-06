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

}
