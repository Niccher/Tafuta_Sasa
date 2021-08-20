<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login($page = 'login'){
		
		$this->form_validation->set_rules('lg_email','Email','required|trim');
        $this->form_validation->set_rules('lg_password','Password', 'required|trim');

        $data['auth_error'] = '';

        if($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
			$this->load->view('auth/'.$page, $data);
			$this->load->view('template/tail');
        }else{

            $lg_eml = $this->mod_crypt->Enc_String($this->input->post('lg_email'));
            $lg_pwd = $this->mod_crypt->Enc_String($this->input->post('lg_password'));

            echo $user_id = $this->mod_users->make_login($lg_eml,$lg_pwd);
            $lg_vars = $this->mod_users->get_vars($user_id);
            
            if ($user_id) {
            	$lg_name = $lg_vars->Name;
	            $lg_eml = $lg_vars->Email;
	            $user_phone = $lg_vars->Phone;
	            $user_type = $lg_vars->Privilege;
                $user_logged = array(
                    'log_mail' => $lg_eml,
                    'log_name' => $lg_name,
                    'log_phone' => $user_phone,
                    'log_id' => $user_id,
                    'log_type' => $user_type
                );
                $this->session->set_userdata($user_logged);

                if($user_type == 'Admin'){
                	redirect('admin/home');
                }
                if($user_type == 'Client'){
                	redirect('client/home');
                }
            }else{
            	$data['auth_error'] = 
            		'
            		<div class="card h-lg-100">
					    <div class="bg-holder bg-card" style="background-image:url('.base_url('assets/img/icons/spot-illustrations/corner-1.png').');"></div>
					    <div class="card-body position-relative">
					        <h5 class="text-warning">Wrong credentials!</h5>
					        <p class="fs--1 mb-0 text-warning" ><span class="fas fa-chevron-right ms-1"></span> Credentials provided are wrong, please try again.</p>
					    </div>
					</div>
            		';

                $this->session->set_flashdata("lg_fail", "Login was unsuccesful");
                $this->load->view('template/header');
				$this->load->view('auth/'.$page, $data);
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

	        	$head1 ='Hello, <b>'.$this->mod_crypt->Dec_String($rg_name).'</b> Welcome to Kazi Mingi ';
	            
	            $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
	            $reciva = $this->mod_crypt->Dec_String($rg_eml);
	            $senda = 'admin@tendollarwriters.com-----';

	            $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
	                        <b style="color: #777777;"></b>Thank you for joining this platform, we are pleased to have you and work with you.<br>You can get started by creating an order with us and you will for sure enjoy our services.
	                    </div>';

	            $this->mod_emails->mail_this($senda, $reciva, $more, $head, $head1);             
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

	public function logout(){
		$this->session->unset_userdata('log_mail');
        $this->session->unset_userdata('log_name');
        $this->session->unset_userdata('log_phone');
        $this->session->unset_userdata('log_id');
        $this->session->unset_userdata('log_type');

        redirect('auth/login');
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