<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index($page = 'home'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'home';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/'.$page);
		$this->load->view('client/template/tail');
	}


	public function chat($page = 'chats'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'chat';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/msgs/'.$page);
		$this->load->view('client/template/tail');
	}

	public function subscribe($page = 'subscribe'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'subscribe';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/sales/'.$page);
		$this->load->view('client/template/tail');
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

	public function invoice($page = 'invoice'){

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

	public function profile($page = 'profile'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'profile';

		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/users/'.$page, $data);
		$this->load->view('client/template/tail');
	}

	public function users_invite($page = 'invite'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'invite';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/users/'.$page);
		$this->load->view('client/template/tail');
	}

	public function questions($page = 'listing'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'questions';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/questions/'.$page);
		$this->load->view('client/template/tail');
	}

	public function questions_view($page = 'view'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'questions';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/questions/'.$page);
		$this->load->view('client/template/tail');
	}

}
