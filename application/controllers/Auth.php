<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login($page = 'login'){
		
		$this->form_validation->set_rules('lg_email','Email','required|trim');
        $this->form_validation->set_rules('lg_password','Password', 'required|trim');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
			$this->load->view('auth/'.$page);
			$this->load->view('template/tail');
        }else{

            $lg_eml = $this->mod_crypt->Enc_String($this->input->post('lg_email'));
            $lg_pwd = $this->mod_crypt->Enc_String($this->input->post('lg_password'));

            echo $user_id = $this->mod_users->make_login($lg_eml,$lg_pwd);
            $lg_vars = $this->mod_users->get_vars($user_id);

            $lg_name = $lg_vars->Name;
            $lg_eml = $lg_vars->Email;
            $user_phone = $lg_vars->Phone;
            $user_type = $lg_vars->Privilege;
            
            if ($user_id) {
                $user_logged = array(
                    'log_mail' => $lg_eml,
                    'log_name' => $lg_name,
                    'log_phone' => $user_phone,
                    'log_id' => $user_id,
                    'log_type' => $user_type
                );
                $this->session->set_userdata($user_logged);
                redirect('client/home');

            }else{
                $this->session->set_flashdata("lg_fail", "Login was unsuccesful");
                $this->load->view('template/header');
				$this->load->view('auth/'.$page);
				$this->load->view('template/tail');
            }
            
        }
	}

	public function register($page = 'register'){

		$this->form_validation->set_rules('rg_name','Name','required|trim');
        $this->form_validation->set_rules('rg_email','Email', 'required|trim');
        $this->form_validation->set_rules('rg_password','Password','required|trim');
        $this->form_validation->set_rules('rg_password1','Confirm Password', 'required|trim');

        $data['errorcode'] = '';


        if($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
			$this->load->view('auth/'.$page, $data);
			$this->load->view('template/tail');
        }else{

        	$rg_name = $this->mod_crypt->Enc_String($this->input->post('rg_name'));
            $rg_eml = $this->mod_crypt->Enc_String($this->input->post('rg_email'));
            $rg_pwd = $this->mod_crypt->Enc_String($this->input->post('rg_password'));
            $rg_pwd1 = $this->mod_crypt->Enc_String($this->input->post('rg_password1'));

        	if (base64_encode($this->input->post('rg_password')) == base64_encode($this->input->post('rg_password1'))) {
        		$this->mod_users->make_user($rg_name , $rg_eml , $rg_pwd);	             
	            redirect('auth/login');
        	}else{
        		$data['errorcode'] = 'Password Mismatched, please try again';
        		$this->load->view('template/header');
				$this->load->view('auth/'.$page, $data);
				$this->load->view('template/tail');
        	}
            
        }
	}

	public function forgot($page = 'forgot'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function activate($page = 'activate'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function reset($page = 'reset'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function terms($page = 'conditions'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function privacy($page = 'privacy'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

	public function home($page = 'home'){
		$this->load->view('template/header');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail');
	}

}