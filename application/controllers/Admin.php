<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($page = 'home'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'home';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function calendar($page = 'calendar'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'calendar';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function chat($page = 'chats'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'chat';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/msgs/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function mails($page = 'mailbox'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'mails';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/msgs/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function sales($page = 'sales'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'sales';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/sales/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function mail_read($page = 'mailread'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'mails';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/msgs/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function mail_compose($page = 'mailcompose'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'mails';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/msgs/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function users($page = 'view'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'users';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/users/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function users_view($page = 'details'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'users';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/users/'.$page);
		$this->load->view('admin/template/tail');
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
