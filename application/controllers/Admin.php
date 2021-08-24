<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($page = 'home'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'home';

		$data['list_users'] = $this->mod_users->get_users_10();
		$data['list_searches'] = $this->mod_searches->get_searches_10();

		$data['list_users_all'] = $this->mod_users->get_users();
		$data['list_searches_all'] = $this->mod_searches->get_searches();

		$data['list_answers_all'] = $this->mod_questions->get_questions();

		$data['list_answers_viewed'] = $this->mod_searches->get_question_10();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/'.$page, $data);
		$this->load->view('admin/template/tail');
	}

	public function calendar($page = 'calendar'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Admin") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'calendar';

		$data['list_questions'] = $this->mod_questions->get_questions();
		$data['list_users'] = $this->mod_users->get_users();

		$order_listing = "";

		foreach ( $data['list_questions'] as $one_qn) {
			$eachyear = date('Y', $one_qn['Qn_Created']);
			$eachmonth = date('m', $one_qn['Qn_Created'])-1;
			$eachday = date('d', $one_qn['Qn_Created']);

			$order_listing.='
			{
                title: "'.character_limiter($this->mod_crypt->Dec_String($one_qn['Qn_Name']), 20).'",
                start: new Date("'.$eachyear.'", "'.$eachmonth.'", "'.$eachday.'" ),
                className: "event-bg-soft-success"
            },
			';
		}

		foreach ( $data['list_users'] as $one_user) {
			$eachyear = date('Y', $one_user['Timestamp']);
			$eachmonth = date('m', $one_user['Timestamp'])-1;
			$eachday = date('d', $one_user['Timestamp']);

			$order_listing.='
			{
                title: "'.character_limiter($this->mod_crypt->Dec_String($one_user['Name']), 20).'",
                start: new Date("'.$eachyear.'", "'.$eachmonth.'", "'.$eachday.'" ),
                className: "event-bg-soft-warning"
            },
			';
		}

		$data['cal'] = $order_listing;

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/'.$page, $data);
		$this->load->view('admin/template/tail_calendar');
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

}
