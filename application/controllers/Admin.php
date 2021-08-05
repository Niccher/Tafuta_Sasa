<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($page = 'home'){

		$title['pg_name'] = 'home';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function calendar($page = 'calendar'){

		$title['pg_name'] = 'calendar';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function chat($page = 'chats'){

		$title['pg_name'] = 'chat';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/msgs/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function mails($page = 'mailbox'){

		$title['pg_name'] = 'mails';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/msgs/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function sales($page = 'sales'){

		$title['pg_name'] = 'sales';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/sales/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function mail_read($page = 'mailread'){

		$title['pg_name'] = 'mails';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/msgs/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function mail_compose($page = 'mailcompose'){

		$title['pg_name'] = 'mails';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/msgs/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function users($page = 'view'){

		$title['pg_name'] = 'users';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/users/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function users_view($page = 'details'){

		$title['pg_name'] = 'users';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/users/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function users_invite($page = 'invite'){

		$title['pg_name'] = 'invite';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/users/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function questions($page = 'listing'){

		$title['pg_name'] = 'questions';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/questions/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function questions_view($page = 'view'){

		$title['pg_name'] = 'questions';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/questions/'.$page);
		$this->load->view('admin/template/tail');
	}

	public function questions_add($page = 'add'){

		$title['pg_name'] = 'questions_add';

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $title);
		$this->load->view('admin/questions/'.$page);
		$this->load->view('admin/template/tail');
	}
}
