<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminorders extends CI_Controller {

	public function index($page = 'orders'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'order';
		$uuid = $this->session->userdata('log_id');

		$data['client_orders'] = $this->mod_orders->get_orders($this->session->userdata('log_id'));

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/orders/'.$page, $data);
		$this->load->view('admin/template/tail');
	}

	public function orders_view($order_id) {
		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'order';

		$uuid = $this->mod_crypt->Dec_String(urldecode($order_id));

		$data['orders_info'] = $this->mod_orders->orders_by_id($uuid);

		if (empty($data['orders_info'])) {
			redirect('admin/orders');
		}

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/orders/view', $data);
		$this->load->view('admin/template/tail');
	}

}
