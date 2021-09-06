<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function landing($page = 'landing'){

		$this->load->view('template/header');
		$this->load->view('landing/'.$page);
		$this->load->view('template/tail');
	}

	public function search($page = 'answers_listings'){

		$s_query = $this->mod_crypt->Enc_String(trim($_GET['s_query']));
		$s_user_ip = $this->input->ip_address();;
		if (! $this->session->userdata('log_id') ) {
            $s_user = "Unknown";
        }else{
        	$s_user = $this->session->userdata('log_id');
        }

        $this->mod_searches->make_search($s_user, $s_query, $s_user_ip);
        $keywords =explode(" ", trim($_GET['s_query']));

        $data['list_answers_all'] = $this->mod_questions->get_questions();

        $good_answers = array(); $good_answers2 = array();

        foreach ($keywords as $keyword) {
        	foreach ($data['list_answers_all'] as $question) {
	        	$database_tags = $this->mod_questions->get_extract_vars(strip_tags($this->mod_crypt->Dec_String($question['Qn_Tags'])));
	        	$database_answer = $this->mod_questions->get_extract_vars(strip_tags($this->mod_crypt->Dec_String($question['Qn_Answer'])));
	        	$keyterm = $this->mod_questions->get_extract_vars(trim($_GET['s_query']));

	        	$tags_tags = explode('|--|',$this->mod_questions->get_levenshtein($keyword, explode(" ", $database_tags)));
	        	$tags_ans = explode('|--|',$this->mod_questions->get_levenshtein($keyword, explode(" ", $database_answer)));

	        	if ($tags_tags[0] == 0 || $tags_tags[0] == 1 || $tags_tags[0] == 2) {
	        		array_push($good_answers, $question['Qn_Id']);
	        	}

	        	if ($tags_ans[0] == 0 || $tags_ans[0] == 1 || $tags_ans[0] == 2) {
	        		array_push($good_answers, $question['Qn_Id']);
	        	}
	        }
        }

        for ($i=0; $i < count($data['list_answers_all']) ; $i++) { 
        	foreach (($good_answers) as $good_answer) {
        		if ($i != $good_answer) {
        			unset($data['list_answers_all'][$i]);
        		}
	        }
        }

        $data['list_answers_all'] = array_values($data['list_answers_all']);

		$this->load->view('template/header');
		$this->load->view('searches/'.$page, $data);
		$this->load->view('template/tail');
	}

	public function view_answer_name($page = 'answers_clean'){

		$q_name = $this->mod_crypt->Enc_String($_GET['q_name']);
		$data['list_answers_details'] = $this->mod_questions->get_question_by_name($q_name);

		$count = ($data['list_answers_details']->Qn_Viewed) + 1;
		$q_id = ($data['list_answers_details']->Qn_Id);
		$this->mod_questions->update_question_view($q_id, $count);

		if (! $this->session->userdata('log_id') ) {
            $s_user = "Unknown";
        }else{
        	$s_user = $this->session->userdata('log_id');
        }
		$this->mod_questions->make_question_view($q_id, $s_user);

		$this->load->view('template/header');
		$this->load->view('searches/'.$page, $data);
		$this->load->view('template/tail');
	}

	public function view_payform($page = 'answers_clean'){ 

		$is_there = $this->mod_users->checkmail_exists($_POST['mail']);

		$head1 ='Hello, '.$_POST['mail'].' Welcome to Tafuta Sasa ';
        
        $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
        $reciva = $_POST['mail'];
        $senda = 'admin@tendollarwriters.com-----';
        $pass_word = random_string('alnum', 8);

		if ($is_there) {
			$more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                    <b style="color: #777777;"></b>Thank you for joining this platform, we are pleased to have you and work with you.<br>You can get started by creating an order with us and you will for sure enjoy our services.
                    Please use <b>'.$_POST['mail'].'</b> as your username<br> and <b>'.$pass_word.'</b> as your password.;
                </div>';
            $this->mod_users->make_user($this->mod_crypt->Enc_String($_POST['mail']) , $this->mod_crypt->Enc_String($_POST['mail']) , $this->mod_crypt->Enc_String($pass_word));	
		}else{
			$more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                    <b style="color: #777777;"></b>Thank you for showing interest in our products.
                </div>';
		}        

        $this->mod_emails->mail_this($senda, $reciva, $more, $head, $head1);  

        $lg_eml = $this->mod_crypt->Enc_String($_POST['mail']);
        $lg_pwd = $this->mod_crypt->Enc_String($pass_word);

        $user_id = $this->mod_users->make_login($lg_eml,$lg_pwd);
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
        }

		$qu_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$qu_info = $this->mod_questions->get_question_by_id($qu_id);

		$payment_box = '
		<form class="form-validation">
		    <div class="row">
		        <div class="col-lg-8 ps-lg-2 mb-3">
		            <div class="card h-100">
		                <div class="card-header">
		                    <h5 class="mb-0">Billing Details</h5>
		                </div>
		                <div class="card-body bg-light">
		                    <div class="form-check mb-0">
		                        <input class="form-check-input" type="radio" value="" id="paypal" name="billing">
		                        <label class="form-check-label mb-0 d-block" for="paypal">
		                            <img src="'.base_url("assets/img/icons/icon-paypal-full.png").'" alt="" height="20">
		                        </label>
		                    </div>
		                    <p class="fs--1 mb-4">Pay with PayPal, Apple Pay, PayPal Credit and much more</p>
		                    <div class="form-check mb-0">
		                        <input class="form-check-input" type="radio" value="" id="credit-card" checked="checked" name="billing">
		                        <label class="form-check-label d-flex align-items-center mb-0" for="credit-card">
		                            <span class="fs-1 text-nowrap">Credit Card</span>
		                            <img class="d-none d-sm-inline-block ms-2 mt-lg-0" src="'.base_url("assets/img/icons/icon-payment-methods.png").'" alt="" height="20">
		                        </label>
		                    </div>
		                    <p class="fs--1 mb-4">Safe money transfer using your bank accounts. Visa, maestro, discover, american express.</p>
		                    <div class="row gx-3 mb-3">
		                        <div class="col">
		                            <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cardNumber">Card Number</label>
		                            <input class="form-control" id="cardNumber" placeholder="XXXX XXXX XXXX XXXX" type="text"></div>
		                        <div class="col">
		                            <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cardName">Name of Card</label>
		                            <input class="form-control" id="cardName" placeholder="John Doe" type="text"></div>
		                    </div>
		                    <div class="row gx-3">
		                        <div class="col-6 col-sm-3">
		                            <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="inputCountry">Country</label>
		                            <input class="form-select mb-3" id="inputCountry" aria-label="customSelectCountry" list="country-list" placeholder="Country">
		                            <datalist class="scrollbar" id="country-list">
		                                <option>Afghanistan</option>
		                                <option>Albania</option>
		                                <option>Algeria</option>
		                                <option>American Samoa</option>
		                                <option>Andorra</option>
		                                <option>Angola</option>
		                                <option>Anguilla</option>
		                                <option>Antarctica</option>
		                                <option>Antigua and Barbuda</option>
		                                <option>Argentina</option>
		                                <option>Armenia</option>
		                                <option>Aruba</option>
		                                <option>Australia</option>
		                                <option>Austria</option>
		                                <option>Azerbaijan</option>
		                                <option>Bahamas</option>
		                                <option>Bahrain</option>
		                                <option>Bangladesh</option>
		                                <option>Barbados</option>
		                                <option>Belarus</option>
		                                <option>Belgium</option>
		                                <option>Belize</option>
		                                <option>Benin</option>
		                                <option>Bermuda</option>
		                                <option>Bhutan</option>
		                                <option>Bolivia</option>
		                                <option>Bosnia and Herzegowina</option>
		                                <option>Botswana</option>
		                                <option>Bouvet Island</option>
		                                <option>Brazil</option>
		                                <option>British Indian Ocean Territory</option>
		                                <option>Brunei Darussalam</option>
		                                <option>Bulgaria</option>
		                                <option>Burkina Faso</option>
		                                <option>Burundi</option>
		                                <option>Cambodia</option>
		                                <option>Cameroon</option>
		                                <option>Canada</option>
		                                <option>Cape Verde</option>
		                                <option>Cayman Islands</option>
		                                <option>Central African Republic</option>
		                                <option>Chad</option>
		                                <option>Chile</option>
		                                <option>China</option>
		                                <option>Christmas Island</option>
		                                <option>Cocos (Keeling) Islands</option>
		                                <option>Colombia</option>
		                                <option>Comoros</option>
		                                <option>Congo</option>
		                                <option>Congo, the Democratic Republic of the</option>
		                                <option>Cook Islands</option>
		                                <option>Costa Rica</option>
		                                <option>Cote dIvoire</option>
		                                <option>Croatia (Hrvatska)</option>
		                                <option>Cuba</option>
		                                <option>Cyprus</option>
		                                <option>Czech Republic</option>
		                                <option>Denmark</option>
		                                <option>Djibouti</option>
		                                <option>Dominica</option>
		                                <option>Dominican Republic</option>
		                                <option>East Timor</option>
		                                <option>Ecuador</option>
		                                <option>Egypt</option>
		                                <option>El Salvador</option>
		                                <option>Equatorial Guinea</option>
		                                <option>Eritrea</option>
		                                <option>Estonia</option>
		                                <option>Ethiopia</option>
		                                <option>Falkland Islands (Malvinas)</option>
		                                <option>Faroe Islands</option>
		                                <option>Fiji</option>
		                                <option>Finland</option>
		                                <option>France</option>
		                                <option>France Metropolitan</option>
		                                <option>French Guiana</option>
		                                <option>French Polynesia</option>
		                                <option>French Southern Territories</option>
		                                <option>Gabon</option>
		                                <option>Gambia</option>
		                                <option>Georgia</option>
		                                <option>Germany</option>
		                                <option>Ghana</option>
		                                <option>Gibraltar</option>
		                                <option>Greece</option>
		                                <option>Greenland</option>
		                                <option>Grenada</option>
		                                <option>Guadeloupe</option>
		                                <option>Guam</option>
		                                <option>Guatemala</option>
		                                <option>Guinea</option>
		                                <option>Guinea-Bissau</option>
		                                <option>Guyana</option>
		                                <option>Haiti</option>
		                                <option>Heard and Mc Donald Islands</option>
		                                <option>Holy See (Vatican City State)</option>
		                                <option>Honduras</option>
		                                <option>Hong Kong</option>
		                                <option>Hungary</option>
		                                <option>Iceland</option>
		                                <option>India</option>
		                                <option>Indonesia</option>
		                                <option>Iran (Islamic Republic of)</option>
		                                <option>Iraq</option>
		                                <option>Ireland</option>
		                                <option>Israel</option>
		                                <option>Italy</option>
		                                <option>Jamaica</option>
		                                <option>Japan</option>
		                                <option>Jordan</option>
		                                <option>Kazakhstan</option>
		                                <option>Kenya</option>
		                                <option>Kiribati</option>
		                                <option>Korea, Democratic People\'s Republic of</option>
		                                <option>Korea, Republic of</option>
		                                <option>Kuwait</option>
		                                <option>Kyrgyzstan</option>
		                                <option>Lao, People\'s Democratic Republic</option>
		                                <option>Latvia</option>
		                                <option>Lebanon</option>
		                                <option>Lesotho</option>
		                                <option>Liberia</option>
		                                <option>Libyan Arab Jamahiriya</option>
		                                <option>Liechtenstein</option>
		                                <option>Lithuania</option>
		                                <option>Luxembourg</option>
		                                <option>Macau</option>
		                                <option>Macedonia, The Former Yugoslav Republic of</option>
		                                <option>Madagascar</option>
		                                <option>Malawi</option>
		                                <option>Malaysia</option>
		                                <option>Maldives</option>
		                                <option>Mali</option>
		                                <option>Malta</option>
		                                <option>Marshall Islands</option>
		                                <option>Martinique</option>
		                                <option>Mauritania</option>
		                                <option>Mauritius</option>
		                                <option>Mayotte</option>
		                                <option>Mexico</option>
		                                <option>Micronesia, Federated States of</option>
		                                <option>Moldova, Republic of</option>
		                                <option>Monaco</option>
		                                <option>Mongolia</option>
		                                <option>Montserrat</option>
		                                <option>Morocco</option>
		                                <option>Mozambique</option>
		                                <option>Myanmar</option>
		                                <option>Namibia</option>
		                                <option>Nauru</option>
		                                <option>Nepal</option>
		                                <option>Netherlands</option>
		                                <option>Netherlands Antilles</option>
		                                <option>New Caledonia</option>
		                                <option>New Zealand</option>
		                                <option>Nicaragua</option>
		                                <option>Niger</option>
		                                <option>Nigeria</option>
		                                <option>Niue</option>
		                                <option>Norfolk Island</option>
		                                <option>Northern Mariana Islands</option>
		                                <option>Norway</option>
		                                <option>Oman</option>
		                                <option>Pakistan</option>
		                                <option>Palau</option>
		                                <option>Panama</option>
		                                <option>Papua New Guinea</option>
		                                <option>Paraguay</option>
		                                <option>Peru</option>
		                                <option>Philippines</option>
		                                <option>Pitcairn</option>
		                                <option>Poland</option>
		                                <option>Portugal</option>
		                                <option>Puerto Rico</option>
		                                <option>Qatar</option>
		                                <option>Reunion</option>
		                                <option>Romania</option>
		                                <option>Russian Federation</option>
		                                <option>Rwanda</option>
		                                <option>Saint Kitts and Nevis</option>
		                                <option>Saint Lucia</option>
		                                <option>Saint Vincent and the Grenadines</option>
		                                <option>Samoa</option>
		                                <option>San Marino</option>
		                                <option>Sao Tome and Principe</option>
		                                <option>Saudi Arabia</option>
		                                <option>Senegal</option>
		                                <option>Seychelles</option>
		                                <option>Sierra Leone</option>
		                                <option>Singapore</option>
		                                <option>Slovakia (Slovak Republic)</option>
		                                <option>Slovenia</option>
		                                <option>Solomon Islands</option>
		                                <option>Somalia</option>
		                                <option>South Africa</option>
		                                <option>South Georgia and the South Sandwich Islands</option>
		                                <option>Spain</option>
		                                <option>Sri Lanka</option>
		                                <option>St. Helena</option>
		                                <option>St. Pierre and Miquelon</option>
		                                <option>Sudan</option>
		                                <option>Suriname</option>
		                                <option>Svalbard and Jan Mayen Islands</option>
		                                <option>Swaziland</option>
		                                <option>Sweden</option>
		                                <option>Switzerland</option>
		                                <option>Syrian Arab Republic</option>
		                                <option>Taiwan, Province of China</option>
		                                <option>Tajikistan</option>
		                                <option>Tanzania, United Republic of</option>
		                                <option>Thailand</option>
		                                <option>Togo</option>
		                                <option>Tokelau</option>
		                                <option>Tonga</option>
		                                <option>Trinidad and Tobago</option>
		                                <option>Tunisia</option>
		                                <option>Turkey</option>
		                                <option>Turkmenistan</option>
		                                <option>Turks and Caicos Islands</option>
		                                <option>Tuvalu</option>
		                                <option>Uganda</option>
		                                <option>Ukraine</option>
		                                <option>United Arab Emirates</option>
		                                <option>United Kingdom</option>
		                                <option>United States</option>
		                                <option>United States Minor Outlying Islands</option>
		                                <option>Uruguay</option>
		                                <option>Uzbekistan</option>
		                                <option>Vanuatu</option>
		                                <option>Venezuela</option>
		                                <option>Vietnam</option>
		                                <option>Virgin Islands (British)</option>
		                                <option>Virgin Islands (U.S.)</option>
		                                <option>Wallis and Futuna Islands</option>
		                                <option>Western Sahara</option>
		                                <option>Yemen</option>
		                                <option>Yugoslavia</option>
		                                <option>Zambia</option>
		                                <option>Zimbabwe</option>
		                            </datalist>
		                        </div>
		                        <div class="col-6 col-sm-3">
		                            <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="zipCode">Zip Code</label>
		                            <input class="form-control" id="zipCode" placeholder="1234" type="text">
		                        </div>
		                        <div class="col-6 col-sm-3">
		                            <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="expDate">Exp Date</label>
		                            <input class="form-control" id="expDate" placeholder="15/2024" type="text">
		                        </div>
		                        <div class="col-6 col-sm-3">
		                            <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cvv">
		                                CVV
		                                <span class="ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Card verification value" aria-label="Card verification value">
		                                    <span class="fa fa-question-circle"></span>
		                                </span>
		                            </label>
		                            <input class="form-control" id="cvv" placeholder="123" maxlength="3" pattern="[0-9]{3}" type="text">
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>

		        <div class="col-lg-4 ps-lg-2 mb-3">
		            <div class="card h-100">
		                <div class="card-header">
		                    <h5 class="mb-0">Element</h5>
		                </div>
		                <div class="card-body bg-light">
		                    <div class="d-flex justify-content-between fs--1 mb-1">
		                        <p class="mb-0">Answer #CODE</p>
		                        <span>KES '.number_format($this->mod_crypt->Dec_String($qu_info->Qn_Price), 2).'</span>
		                    </div>
		                    <div class="d-flex justify-content-between fs--1 mb-1 text-success">
		                        <p class="mb-0">Other purchases</p>
		                        <span>$0.00</span>
		                    </div>
		                    <hr>
		                    <h5 class="d-flex justify-content-between">
		                        <span>Total</span><span>KES '.number_format($this->mod_crypt->Dec_String($qu_info->Qn_Price), 2).'</span>
		                    </h5>
		                    <p class="fs--1 text-600">Once purchased, the answer will be available to use at any given time.</p>
		                    <button class="btn btn-primary d-block w-100" type="submit">
		                        <span class="fa fa-lock me-2"></span>Pay
		                    </button>
		                    <div class="text-center mt-2">
		                        <small class="d-inline-block">By continuing, you are agreeing to our subscriber <a href="'.base_url('auth/terms').'">terms</a> </small>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</form>
		';

		//echo $payment_box;
	}

	public function view_answer($page = 'answers_details'){

		$this->load->view('template/header');
		$this->load->view('searches/'.$page);
		//$this->load->view('searches/dope');
		$this->load->view('template/tail');
	}

	public function view_answer_clean($page = 'answers_clean'){

		$this->load->view('template/header');
		$this->load->view('searches/'.$page);
		$this->load->view('template/tail');
	}
}
