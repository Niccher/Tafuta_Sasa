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
		$this->load->view('admin/template/tail_orders');
	}

	public function orders_view($order_id) {
		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'order';

		$uuid = $this->mod_crypt->Dec_String(urldecode($order_id));

		$data['orders_info'] = $this->mod_orders->orders_by_id($uuid);
		$data['writers'] = $this->Mod_alternate_db->get_writers();

		if (empty($data['orders_info'])) {
			redirect('admin/orders');
		}

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/orders/view', $data);
		$this->load->view('admin/template/tail_orders');
	}

	public function order_assign($order_id) {
		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$uuid = $this->mod_crypt->Dec_String(urldecode($order_id));

        $orders_info = $this->mod_orders->orders_by_id($uuid);

        $mk_level = $this->mod_crypt->Dec_String($orders_info['Ord_Level']);
        $mk_cite = $this->mod_crypt->Dec_String($orders_info['Ord_Cite']);

        $mk_Name = $this->mod_crypt->Dec_String($orders_info['Ord_Name']);
        $mk_Description = ' Level '. $mk_level. '. Citiation '. $mk_cite. ' ' . $this->mod_crypt->Dec_String($orders_info['Ord_Body']);
        $mk_Pages = $this->mod_crypt->Dec_String($orders_info['Ord_Pages']);
        $mk_Date_Start = $orders_info['Ord_Created'];
        $mk_Date_Stop = $this->mod_crypt->Dec_String($orders_info['Ord_Deadline']);
        $mk_Pay = $this->mod_crypt->Dec_String($orders_info['Ord_Price']);
        $mk_Pay_Total = $this->mod_crypt->Dec_String($orders_info['Ord_Price']);
        $mk_Attachments = $this->Mod_alternate_db->get_attachments($orders_info['Ord_Attachment']);

		foreach ($_POST['convo_body'] as $one_writer) {
			$user_id = $this->mod_crypt->Dec_String(urldecode($one_writer));
            $user_info = $this->Mod_alternate_db->get_info($user_id);

            $user_name = $user_info->Name;
            $user_name = $user_info->Name;
            $user_email = $this->mod_crypt->Dec_String($user_info->Email);
            $mk_Writer = $user_name;
            
			$this->mod_orders->make_assignment($uuid, $user_id);
			$this->Mod_alternate_db->get_create_order($mk_Name,$mk_Description,$mk_Pages,$mk_Date_Start,$mk_Date_Stop,$mk_Pay,$mk_Pay_Total,$mk_Attachments, $mk_Writer);
        }
        try {
            echo "File copi";
            $this->Mod_alternate_db->get_copy($mk_Attachments);
        }catch (Exception $e){}
	}

}
