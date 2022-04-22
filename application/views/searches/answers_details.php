
        <main class="main" id="top">
            <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark" data-navbar-darken-on-scroll="data-navbar-darken-on-scroll">
                <div class="container">
                    <a class="navbar-brand" href="#">
                    	<span class="text-white dark__text-white">Tafuta Sasa</span>
                    </a>
                    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Exams</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Quizzes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Multiple Answers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Become a Seller</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownLogin" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card" aria-labelledby="navbarDropdownLogin">
                                    <div class="card shadow-none navbar-card-login">
                                        <div class="card-body fs--1 p-4 fw-normal">
                                            <div class="row text-start justify-content-between align-items-center mb-2">
                                                <div class="col-auto">
                                                    <h5 class="mb-0">Log in</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <p class="fs--1 text-600 mb-0">or <a href="<?php echo base_url('auth/register'); ?>">Create an account</a></p>
                                                </div>
                                            </div>
                                            <?php echo validation_errors(); ?>
                                            <?php echo form_open('auth/login'); ?>
                                                <div class="mb-3">
                                                    <input class="form-control" type="email" placeholder="Email address" name="lg_email" />
                                                </div>
                                                <div class="mb-3">
                                                    <input class="form-control" type="password" placeholder="Password" name="lg_password" />
                                                </div>
                                                <div class="row flex-between-center">
                                                    <div class="col-auto">
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="checkbox" id="modal-checkbox" />
                                                            <label class="form-check-label" for="modal-checkbox">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a class="fs--1" href="<?php echo base_url('auth/forgot'); ?>">Forgot Password?</a>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button></div>
                                            </form>
                                            <div class="position-relative mt-4">
                                                <hr class="bg-300" />
                                                <div class="divider-content-center">or log in with</div>
                                            </div>
                                            <div class="row g-2 mt-2">
                                                <div class="col-sm-6">
                                                    <a class="btn btn-outline-google-plus btn-sm d-block w-100" href="<?php echo base_url('auth/google'); ?>">
                                                        <span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> Google
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a class="btn btn-outline-facebook btn-sm d-block w-100" href="<?php echo base_url('auth/facebook'); ?>">
                                                        <span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> Facebook
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-4">
                            <div class="row text-start justify-content-between align-items-center mb-2">
                                <div class="col-auto">
                                    <h5 id="modalLabel">Register</h5>
                                </div>
                                <div class="col-auto">
                                    <p class="fs--1 text-600 mb-0">Have an account? 
                                        <a href="<?php echo base_url('auth/login'); ?>">Login</a>
                                    </p>
                                </div>
                            </div>
                            <?php 
                            echo validation_errors();
                            echo form_open('auth/register'); ?>
                                <div class="mb-3">
                                    <input class="form-control" type="text" autocomplete="on" placeholder="Name" name="rg_name" />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="email" autocomplete="on" placeholder="Email address" name="rg_email" /></div>
                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <input class="form-control" type="password" autocomplete="on" placeholder="Password"  name="rg_password"/>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <input class="form-control" type="password" autocomplete="on" placeholder="Confirm Password" name="rg_password1" />
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="modal-register-checkbox" />
                                    <label class="form-label" for="modal-register-checkbox">I accept the 
                                        <a href="<?php echo base_url('auth/terms'); ?>">terms </a>and 
                                        <a href="<?php echo base_url('auth/privacy'); ?>">privacy policy</a>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                                </div>
                            </form>
                            <div class="position-relative mt-4">
                                <hr class="bg-300" />
                                <div class="divider-content-center">or register with</div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col-sm-6">
                                    <a class="btn btn-outline-google-plus btn-sm d-block w-100" href="<?php echo base_url('auth/google'); ?>">
                                        <span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> Google
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="btn btn-outline-facebook btn-sm d-block w-100" href="<?php echo base_url('auth/facebook'); ?>">
                                        <span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> Facebook
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-0 overflow-hidden light" id="banner">
                <div class="bg-holder overlay" style="background-image:url(<?php echo base_url('assets/img/generic/bg-1.jpg'); ?>);background-position: center bottom;"></div>
                <!--/.bg-holder-->
                <div class="container">
                    <div class="row flex-center pt-8 pt-lg-10 pb-lg-9 pb-xl-0">

                        <div class="col-md-12 text-center text-xl-start" style="margin-bottom: 35px;">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-md-8">
                                    <form class="card card-sm" action="<?php echo base_url('search'); ?>" method='GET'>
                                        <div class="card-body row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fas fa-search h4 text-body"></i>
                                            </div>
                                            <!--end of col-->
                                            <div class="col">
                                                <input class="form-control form-control-md form-control-borderless" type="search" placeholder="Search topics or keywords" name="s_query">
                                            </div>
                                            <!--end of col-->
                                            <div class="col-auto">
                                                <button class="btn btn-md btn-success" type="submit">Search</button>
                                            </div>
                                            <!--end of col-->
                                        </div>
                                    </form>
                                </div>
                                <!--end of col-->
                            </div>
                        </div>
                        <br>
                        <br>

                    </div>
                </div>
                <!-- end of .container-->
            </section>

		    <div class="container" style="margin-bottom: 60px;">

		    	<br>
				<div class="card mb-3">
					<div class="card-body">
						<div class="alert alert-warning p-4 mb-0" role="alert">
							<div class="d-flex">
								<span class="fab fa-intentionally-kept fs-3"></span>
								<div class="flex-1 ms-3">
									<h4 class="alert-heading">The answer is not free!</h4>
									<p class="mb-0">Follow the procedure to get your customized answer.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>

				<div class="card">
				    <div class="card-body bg-light">
				        <h6>
				        	<a href="#">How does Falcon's pricing work?
				        	</a>
				        </h6>
				        <div class="row">
				        	<div class="col-8">
				        		<div class="float-left">
						        	<span class="me-2 small" data-bs-toggle="tooltip" title="" data-bs-original-title="You're assigned in this card" aria-label="Payable">
										<span class="fas fa-cart-plus fa-xs"></span>&nbsp;&nbsp;Answer is for pro users
									</span>
								</div>
				        	</div>
				        	<div class="col-4">
				        		<div class="float-left">
						        	<span class="me-2 small" data-bs-toggle="tooltip" title="" data-bs-original-title="You're assigned in this card" aria-label="Answer Viewed 4 Times">
										<span class="fas fa-eye fa-xs"></span>&nbsp;&nbsp;4
									</span>
									<span class="me-2 small" data-bs-toggle="tooltip" title="" data-bs-original-title="Last updated"> 
										<span class="far fa-calendar fa-xs"></span> 12 Nov 2020
									</span>
								</div>
				        	</div>
				        </div>
				        <p class="fs--1 mb-0">
					        Protecting the data you trust to Falcon is our first priority. Falcon uses physical, procedural, and technical safeguards to preserve the integrity and security of your information. We regularly back up your data to prevent data loss and aid in recovery. Additionally, we host data in secure SSAE 16 / SOC1 certified data centers, implement firewalls and access restrictions on our servers to better protect your information, and work with third party security researchers to ensure our practices are secure.
					    </p>

				        <p class="fs--1 mb-0">
				        	Dedicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking.
				        </p>

				        edicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking.

				        <div class="row mt-5">
						    <div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
						        <div class="d-flex mb-4">
						            <span class="fa-stack me-2 ms-n1">
						            	<i class="fas fa-circle fa-stack-2x text-300"></i>
						            	<i class="fa-inverse fa-stack-1x text-primary fas fa-spinner"></i>
						            </span>
						            <div class="col">
						                <h5 class="mb-0 text-primary position-relative">
						                	<span class="bg-200 dark__bg-1100 pe-3">Answer</span>
						                	<span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span>
						                </h5>
						                <p class="mb-0">Unhide the redacted part of the answer.</p>
						            </div>
						        </div>
						        <div class="card theme-wizard mb-5">
						            <div class="card-header bg-light pt-3 pb-2">
						                <ul class="nav justify-content-between nav-wizard">
						                    <li class="nav-item">
						                    	<a class="nav-link active fw-semi-bold" href="<?php echo base_url('search/question/search'); ?>#bootstrap-wizard-tab1" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
						                    		<span class="nav-item-circle-parent">
						                    			<span class="nav-item-circle">
						                    				<span class="fas fa-lock"></span>
						                    			</span>
						                    		</span>
						                    		<span class="d-none d-md-block mt-1 fs--1">Answer</span>
						                    	</a>
						                    </li>
						                </ul>
						            </div>
						            <div class="card-body py-4">
						                <div class="tab-content">
						                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
						                        <form novalidate="novalidate">
						                            <div class="mb-3">
						                            	<div class="row">
						                            		<div class="col-3"></div>
						                            		<div class="col-6">
						                            			<p class="fs--1 text-600">Once you start your trial, you will have 30 days to use Falcon Premium for free. After 30 days you’ll be charged based on your selected plan.</p>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="bootstrap-wizard-wizard-email">Email*</label>
                                                                    <input class="form-control" type="email" name="purchase_email" placeholder="Email address" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="bootstrap-wizard-wizard-email" data-wizard-validate-email="true" />
                                                                    <div class="invalid-feedback">You must add email</div>
                                                                </div>
																<button class="btn btn-primary d-block w-100" type="button">
																    <span class="fa fa-lock me-2"></span> Get My Answer
																</button>
						                            		</div>
						                            		<div class="col-3"></div>
						                            	</div>
						                            	
														<div class="text-center mt-2">
															<small class="d-inline-block">By continuing, you are agreeing to our subscriber <a href="#">terms</a> and will be charged at the end of the trial. 
															</small>
														</div>
						                            </div>
						                            <div class="form-check">
						                            	<input class="form-check-input" type="checkbox" name="terms" required="required" checked="checked" id="bootstrap-wizard-wizard-checkbox" />
						                            	<label class="form-check-label" for="bootstrap-wizard-wizard-checkbox">I accept the 
						                            		<a href="#">terms </a>and <a href="#">privacy policy</a>
						                            	</label>
						                            </div>
						                        </form>
						                    </div>
                                            <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab3" id="bootstrap-wizard-tab3">
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
                                                                            <img src="<?php echo base_url('assets/img/icons/icon-paypal-full.png'); ?>" alt="" height="20">
                                                                        </label>
                                                                    </div>
                                                                    <p class="fs--1 mb-4">Pay with PayPal, Apple Pay, PayPal Credit and much more</p>
                                                                    <div class="form-check mb-0">
                                                                        <input class="form-check-input" type="radio" value="" id="credit-card" checked="checked" name="billing">
                                                                        <label class="form-check-label d-flex align-items-center mb-0" for="credit-card">
                                                                            <span class="fs-1 text-nowrap">Credit Card</span>
                                                                            <img class="d-none d-sm-inline-block ms-2 mt-lg-0" src="<?php echo base_url('assets/img/icons/icon-payment-methods.png'); ?>" alt="" height="20">
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
                                                                                <option>Cote d'Ivoire</option>
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
                                                                                <option>Korea, Democratic People's Republic of</option>
                                                                                <option>Korea, Republic of</option>
                                                                                <option>Kuwait</option>
                                                                                <option>Kyrgyzstan</option>
                                                                                <option>Lao, People's Democratic Republic</option>
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
                                                                    <select class="form-select mb-3" aria-label="Default select example">
                                                                        <option selected="">Single Answer</option>
                                                                        <option value="1">Annual Subscription</option>
                                                                    </select>
                                                                    <div class="d-flex justify-content-between fs--1 mb-1">
                                                                        <p class="mb-0">Answer #CODE</p>
                                                                        <span>$50.00</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between fs--1 mb-1 text-success">
                                                                        <p class="mb-0">Other purchases</p>
                                                                        <span>$0.00</span>
                                                                    </div>
                                                                    <hr>
                                                                    <h5 class="d-flex justify-content-between">
                                                                        <span>Due</span><span>$50.00</span>
                                                                    </h5>
                                                                    <p class="fs--1 text-600">Once purchased, the answer will be available to use at any given time.</p>
                                                                    <button class="btn btn-primary d-block w-100" type="submit">
                                                                        <span class="fa fa-lock me-2"></span>Proceed
                                                                    </button>
                                                                    <div class="text-center mt-2">
                                                                        <small class="d-inline-block">By continuing, you are agreeing to our subscriber <a href="<?php echo base_url('auth/terms');?>">terms</a> </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                                                <div class="wizard-lottie-wrapper">
                                                    <div class="lottie wizard-lottie mx-auto my-3" data-options='{"path":"../../assets/img/animated-icons/celebration.json"}'></div>
                                                </div>
                                                <h4 class="mb-1">Your account is all set!</h4>
                                                <p>Now you can access to your account</p>
                                                <a class="btn btn-primary px-5 my-3" href="<?php echo base_url('search/question/clean'); ?>">Start Over</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-light">
                                        <div class="px-sm-3 px-md-5">
                                            <ul class="pager wizard list-inline mb-0">
                                                <li class="previous">
                                                    <button class="btn btn-link ps-0" type="button">
                                                        <span class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Prev
                                                    </button>
                                                </li>
                                                <li class="next">
                                                    <button class="btn btn-primary px-5 px-sm-6" type="submit">Next
                                                        <span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px">
                                    <div class="modal-content position-relative p-5">
                                        <div class="d-flex align-items-center">
                                            <div class="lottie me-3" data-options='{"path":"../../assets/img/animated-icons/warning-light.json"}'></div>
                                            <div class="flex-1">
                                                <button class="btn btn-link text-danger position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal">
                                                    <span class="fas fa-times"></span>
                                                </button>
                                                <p class="mb-0">You don't have access to the link. Please try again.</p>
                                                <a class="btn btn-primary px-5 my-3" href="<?php echo base_url('search/question'); ?>"><p class="mb-0">You don't have access to the link. Please try again.</p></a>
                                            </div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						edicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking.

				        <p class="fs--1 mb-0">
                            I’ve acquired a wide depth of knowledge and expertise in using my technical skills in programming, computer science, software development, and mobile app development to developing solutions to help organizations increase productivity, and accelerate business performance.
                        </p>

                        <p class="fs--1 mb-0">
                            It’s great that we live in an age where we can share so much with technology but I’m but I’m ready for the next phase of my career, with a healthy balance between the virtual world and a workplace where I help others face-to-face.
                        </p>

                        <p class="fs--1 mb-0">
				        	There’s always something new to learn, especially in IT-related fields. People like working with me because I can explain technology to everyone, from staff to executives who need me to tie together the details and the big picture. I can also implement the technologies that successful projects need.
				        </p>

				    </div>
				</div>
				<br>
				<br>


		    </div>

        </main>







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
                            <img src="<?php echo base_url('assets/img/icons/icon-paypal-full.png'); ?>" alt="" height="20">
                        </label>
                    </div>
                    <p class="fs--1 mb-4">Pay with PayPal, Apple Pay, PayPal Credit and much more</p>
                    <div class="form-check mb-0">
                        <input class="form-check-input" type="radio" value="" id="credit-card" checked="checked" name="billing">
                        <label class="form-check-label d-flex align-items-center mb-0" for="credit-card">
                            <span class="fs-1 text-nowrap">Credit Card</span>
                            <img class="d-none d-sm-inline-block ms-2 mt-lg-0" src="<?php echo base_url('assets/img/icons/icon-payment-methods.png'); ?>" alt="" height="20">
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
                                <option>Cote d'Ivoire</option>
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
                                <option>Korea, Democratic People's Republic of</option>
                                <option>Korea, Republic of</option>
                                <option>Kuwait</option>
                                <option>Kyrgyzstan</option>
                                <option>Lao, People's Democratic Republic</option>
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
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected="">Single Answer</option>
                        <option value="1">Annual Subscription</option>
                    </select>
                    <div class="d-flex justify-content-between fs--1 mb-1">
                        <p class="mb-0">Answer #CODE</p>
                        <span>$50.00</span>
                    </div>
                    <div class="d-flex justify-content-between fs--1 mb-1 text-success">
                        <p class="mb-0">Other purchases</p>
                        <span>$0.00</span>
                    </div>
                    <hr>
                    <h5 class="d-flex justify-content-between">
                        <span>Due</span><span>$50.00</span>
                    </h5>
                    <p class="fs--1 text-600">Once purchased, the answer will be available to use at any given time.</p>
                    <button class="btn btn-primary d-block w-100" type="submit">
                        <span class="fa fa-lock me-2"></span>Proceed
                    </button>
                    <div class="text-center mt-2">
                        <small class="d-inline-block">By continuing, you are agreeing to our subscriber <a href="<?php echo base_url('auth/terms');?>">terms</a> </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

