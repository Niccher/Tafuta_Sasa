<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index($page = 'view'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'users';

		$data['users_list'] = $this->mod_users->get_users();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/users/'.$page, $data);
		$this->load->view('admin/template/tail');
	}

	public function users_view($page = 'details'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'users';
		$uuid = $this->uri->segment(4);
		$uuid_clean = $this->mod_crypt->Dec_String(urldecode($uuid));

		$data['user_info'] = $this->mod_users->get_vars($uuid_clean);

		$data['question_viewed'] = $this->mod_questions->get_questions_viewed_by($uuid_clean);

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/users/'.$page, $data);
		$this->load->view('admin/template/tail_chat');
	}

	public function users_invite($page = 'invite'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'invite';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/users/'.$page);
		$this->load->view('admin/template/tail');
	}

} 
