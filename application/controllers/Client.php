<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index($page = 'home'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

		$title['pg_name'] = 'home';
		$uuid = $this->session->userdata('log_id');
		$data['question_viewed'] = $this->mod_questions->get_questions_viewed_by($uuid);

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/'.$page, $data);
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
		$this->load->view('client/template/tail_chat');
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
		$this->load->view('client/template/tail_chat');
	}

	public function profileadd($page = 'profile'){

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "Client") {
            redirect('auth/login');
        }

        $uuid = $this->session->userdata('log_id');

		$title['pg_name'] = 'profile';
		$data['user_info'] = $this->mod_users->get_vars($uuid);

		$prof_new_name  = trim($this->input->post('prof_nw_name'));
		$prof_new_mail  = trim($this->input->post('prof_nw_mail'));
		$prof_new_pwd1  = trim($this->input->post('prof_nw_pwd1'));
		$prof_new_pwd0  = trim($this->input->post('prof_nw_pwd0'));
		$prof_new_info  = trim($this->input->post('prof_nw_info'));
		$prof_new_phone  = trim($this->input->post('prof_nw_phone'));


		if ($prof_new_name != NULL && $prof_new_name != "") {
			$this->mod_users->update_profile_name($uuid, $this->mod_crypt->Enc_String($prof_new_name));
		}

		if ($prof_new_phone != NULL && $prof_new_phone != "") {
			$this->mod_users->update_profile_phone($uuid, $this->mod_crypt->Enc_String($prof_new_phone));
		}

		if ($prof_new_mail != NULL && $prof_new_mail != "") {
			$this->mod_users->update_profile_mail($uuid, $this->mod_crypt->Enc_String($prof_new_mail));
		}

		if ($prof_new_info != NULL && $prof_new_info != "") {
			$this->mod_users->update_profile_bio($uuid, $this->mod_crypt->Enc_String($prof_new_info));
		}

		//print_r($_POST);

		$this->load->view('client/template/header');
		$this->load->view('client/template/sidebar', $title);
		$this->load->view('client/users/'.$page, $data);
		$this->load->view('client/template/tail_chat');
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
