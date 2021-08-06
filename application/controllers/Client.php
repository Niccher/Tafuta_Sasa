<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index($page = 'home'){

		$title['pg_name'] = 'home';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/'.$page);
		$this->load->view('client/template/tail');
	}

	public function calendar($page = 'calendar'){

		$title['pg_name'] = 'calendar';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/'.$page);
		$this->load->view('client/template/tail');
	}

	public function chat($page = 'chats'){

		$title['pg_name'] = 'chat';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/msgs/'.$page);
		$this->load->view('client/template/tail');
	}

	public function subscribe($page = 'subscribe'){

		$title['pg_name'] = 'subscribe';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/sales/'.$page);
		$this->load->view('client/template/tail');
	}

	public function profile($page = 'profile'){

		$title['pg_name'] = 'profile';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/users/'.$page);
		$this->load->view('client/template/tail');
	}

	public function users_invite($page = 'invite'){

		$title['pg_name'] = 'invite';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/users/'.$page);
		$this->load->view('client/template/tail');
	}

	public function questions($page = 'listing'){

		$title['pg_name'] = 'questions';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/questions/'.$page);
		$this->load->view('client/template/tail');
	}

	public function questions_view($page = 'view'){

		$title['pg_name'] = 'questions';

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/questions/'.$page);
		$this->load->view('client/template/tail');
	}

}
