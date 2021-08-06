
        <main class="main" id="top">
            <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark" data-navbar-darken-on-scroll="data-navbar-darken-on-scroll">
                <div class="container">
                    <a class="navbar-brand" href="../index.html">
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
                                <a class="nav-link dropdown-toggle" id="navbarDropdownLogin" href="landing.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card" aria-labelledby="navbarDropdownLogin">
                                    <div class="card shadow-none navbar-card-login">
                                        <div class="card-body fs--1 p-4 fw-normal">
                                            <div class="row text-start justify-content-between align-items-center mb-2">
                                                <div class="col-auto">
                                                    <h5 class="mb-0">Log in</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <p class="fs--1 text-600 mb-0">or <a href="authentication/simple/register.html">Create an account</a></p>
                                                </div>
                                            </div>
                                            <form>
                                                <div class="mb-3"><input class="form-control" type="email" placeholder="Email address" /></div>
                                                <div class="mb-3"><input class="form-control" type="password" placeholder="Password" /></div>
                                                <div class="row flex-between-center">
                                                    <div class="col-auto">
                                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="modal-checkbox" /><label class="form-check-label" for="modal-checkbox">Remember me</label></div>
                                                    </div>
                                                    <div class="col-auto"><a class="fs--1" href="authentication/simple/forgot-password.html">Forgot Password?</a></div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button></div>
                                            </form>
                                            <div class="position-relative mt-4">
                                                <hr class="bg-300" />
                                                <div class="divider-content-center">or log in with</div>
                                            </div>
                                            <div class="row g-2 mt-2">
                                                <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="landing.html#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                                                <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="landing.html#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="landing.html#!" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</a></li>
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
                                        <a href="authentication/simple/login.html">Login</a>
                                    </p>
                                </div>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <input class="form-control" type="text" autocomplete="on" placeholder="Name" />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="email" autocomplete="on" placeholder="Email address" /></div>
                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <input class="form-control" type="password" autocomplete="on" placeholder="Password" />
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <input class="form-control" type="password" autocomplete="on" placeholder="Confirm Password" />
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="modal-register-checkbox" />
                                    <label class="form-label" for="modal-register-checkbox">I accept the 
                                        <a href="landing.html#!">terms </a>and 
                                        <a href="landing.html#!">privacy policy</a>
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
                                <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="landing.html#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                                <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="landing.html#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
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
                                                <input class="form-control form-control-md form-control-borderless" type="search" placeholder="Search topics or keywords">
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
				        	<a href="pricing-default.html#!">How does Falcon's pricing work?
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
						                    <li class="nav-item">
						                    	<a class="nav-link fw-semi-bold" href="<?php echo base_url('search/question/search'); ?>#bootstrap-wizard-tab2" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
						                    		<span class="nav-item-circle-parent">
						                    			<span class="nav-item-circle">
						                    				<span class="fas fa-user"></span>
						                    			</span>
						                    		</span>
						                    		<span class="d-none d-md-block mt-1 fs--1">Account</span>
						                    	</a>
						                    </li>
						                    <li class="nav-item">
						                    	<a class="nav-link fw-semi-bold" href="<?php echo base_url('search/question/search'); ?>#bootstrap-wizard-tab3" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
						                    		<span class="nav-item-circle-parent">
						                    			<span class="nav-item-circle">
						                    				<span class="fas fa-dollar-sign"></span>
						                    			</span>
						                    		</span>
						                    		<span class="d-none d-md-block mt-1 fs--1">Billing</span>
						                    	</a>
						                    </li>
						                    <li class="nav-item">
						                    	<a class="nav-link fw-semi-bold" href="<?php echo base_url('search/question/search'); ?>#bootstrap-wizard-tab4" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
						                    		<span class="nav-item-circle-parent">
						                    			<span class="nav-item-circle">
						                    				<span class="fas fa-thumbs-up"></span>
						                    			</span>
						                    		</span>
						                    		<span class="d-none d-md-block mt-1 fs--1">Done</span>
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
						                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab2" id="bootstrap-wizard-tab2">
						                        <form novalidate="novalidate">
						                            <div class="mb-3">
						                            	<label class="form-label" for="bootstrap-wizard-wizard-name">Name</label>
						                            	<input class="form-control" type="text" name="name" placeholder="John Smith" id="bootstrap-wizard-wizard-name" />
						                            </div>
						                            <div class="mb-3">
						                                <label class="form-label" for="bootstrap-wizard-wizard-email">Email*</label>
						                                <input class="form-control" type="email" name="email" placeholder="Email address" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="bootstrap-wizard-wizard-email" data-wizard-validate-email="true" />
						                                <div class="invalid-feedback">You must add email</div>
						                            </div>
						                            <div class="row g-2">
						                                <div class="col-6">
						                                    <div class="mb-3">
						                                        <label class="form-label" for="bootstrap-wizard-wizard-password">Password*</label>
						                                        <input class="form-control" type="password" name="password" placeholder="Password" required="required" id="bootstrap-wizard-wizard-password" data-wizard-validate-password="true" />
						                                        <div class="invalid-feedback">Please enter password</div>
						                                    </div>
						                                </div>
						                                <div class="col-6">
						                                    <div class="mb-3">
						                                        <label class="form-label" for="bootstrap-wizard-wizard-confirm-password">Confirm Password*</label>
						                                        <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password" required="required" id="bootstrap-wizard-wizard-confirm-password" data-wizard-validate-confirm-password="true" />
						                                        <div class="invalid-feedback">Passwords need to match</div>
						                                    </div>
						                                </div>
						                            </div>
						                        </form>
						                    </div>
						                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab3" id="bootstrap-wizard-tab3">
						                        <form class="form-validation">
						                            <div class="row g-2">
						                                <div class="col">
						                                    <div class="mb-3">
						                                    	<label class="form-label" for="bootstrap-wizard-card-number">Card Number</label>
						                                    	<input class="form-control" placeholder="XXXX XXXX XXXX XXXX" type="text" id="bootstrap-wizard-card-number" />
						                                    </div>
						                                </div>
						                                <div class="col">
						                                    <div class="mb-3">
						                                    	<label class="form-label" for="bootstrap-wizard-card-name">Name on Card</label>
						                                    	<input class="form-control" placeholder="John Doe" name="cardName" type="text" id="bootstrap-wizard-card-name" />
						                                    </div>
						                                </div>
						                            </div>
						                            <div class="row g-2">
						                                <div class="col-6">
						                                    <div class="mb-3">
						                                        <label class="form-label" for="bootstrap-wizard-card-holder-country">Country</label>
						                                        <select class="form-select" name="customSelectCountry" id="bootstrap-wizard-card-holder-country">
						                                            <option value="">Select your country ...</option>
						                                            <option value="Afghanistan">Afghanistan</option>
						                                            <option value="Albania">Albania</option>
						                                            <option value="Algeria">Algeria</option>
						                                            <option value="American Samoa">American Samoa</option>
						                                            <option value="Andorra">Andorra</option>
						                                            <option value="Angola">Angola</option>
						                                            <option value="Anguilla">Anguilla</option>
						                                            <option value="Antarctica">Antarctica</option>
						                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
						                                            <option value="Argentina">Argentina</option>
						                                            <option value="Armenia">Armenia</option>
						                                            <option value="Aruba">Aruba</option>
						                                            <option value="Australia">Australia</option>
						                                            <option value="Austria">Austria</option>
						                                            <option value="Azerbaijan">Azerbaijan</option>
						                                            <option value="Bahamas">Bahamas</option>
						                                            <option value="Bahrain">Bahrain</option>
						                                            <option value="Bangladesh">Bangladesh</option>
						                                            <option value="Barbados">Barbados</option>
						                                            <option value="Belarus">Belarus</option>
						                                            <option value="Belgium">Belgium</option>
						                                            <option value="Belize">Belize</option>
						                                            <option value="Benin">Benin</option>
						                                            <option value="Bermuda">Bermuda</option>
						                                            <option value="Bhutan">Bhutan</option>
						                                            <option value="Bolivia">Bolivia</option>
						                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
						                                            <option value="Botswana">Botswana</option>
						                                            <option value="Bouvet Island">Bouvet Island</option>
						                                            <option value="Brazil">Brazil</option>
						                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
						                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
						                                            <option value="Bulgaria">Bulgaria</option>
						                                            <option value="Burkina Faso">Burkina Faso</option>
						                                            <option value="Burundi">Burundi</option>
						                                            <option value="Cambodia">Cambodia</option>
						                                            <option value="Cameroon">Cameroon</option>
						                                            <option value="Canada">Canada</option>
						                                            <option value="Cape Verde">Cape Verde</option>
						                                            <option value="Cayman Islands">Cayman Islands</option>
						                                            <option value="Central African Republic">Central African Republic</option>
						                                            <option value="Chad">Chad</option>
						                                            <option value="Chile">Chile</option>
						                                            <option value="China">China</option>
						                                            <option value="Christmas Island">Christmas Island</option>
						                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						                                            <option value="Colombia">Colombia</option>
						                                            <option value="Comoros">Comoros</option>
						                                            <option value="Congo">Congo</option>
						                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
						                                            <option value="Cook Islands">Cook Islands</option>
						                                            <option value="Costa Rica">Costa Rica</option>
						                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
						                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
						                                            <option value="Cuba">Cuba</option>
						                                            <option value="Cyprus">Cyprus</option>
						                                            <option value="Czech Republic">Czech Republic</option>
						                                            <option value="Denmark">Denmark</option>
						                                            <option value="Djibouti">Djibouti</option>
						                                            <option value="Dominica">Dominica</option>
						                                            <option value="Dominican Republic">Dominican Republic</option>
						                                            <option value="East Timor">East Timor</option>
						                                            <option value="Ecuador">Ecuador</option>
						                                            <option value="Egypt">Egypt</option>
						                                            <option value="El Salvador">El Salvador</option>
						                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
						                                            <option value="Eritrea">Eritrea</option>
						                                            <option value="Estonia">Estonia</option>
						                                            <option value="Ethiopia">Ethiopia</option>
						                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
						                                            <option value="Faroe Islands">Faroe Islands</option>
						                                            <option value="Fiji">Fiji</option>
						                                            <option value="Finland">Finland</option>
						                                            <option value="France">France</option>
						                                            <option value="France Metropolitan">France Metropolitan</option>
						                                            <option value="French Guiana">French Guiana</option>
						                                            <option value="French Polynesia">French Polynesia</option>
						                                            <option value="French Southern Territories">French Southern Territories</option>
						                                            <option value="Gabon">Gabon</option>
						                                            <option value="Gambia">Gambia</option>
						                                            <option value="Georgia">Georgia</option>
						                                            <option value="Germany">Germany</option>
						                                            <option value="Ghana">Ghana</option>
						                                            <option value="Gibraltar">Gibraltar</option>
						                                            <option value="Greece">Greece</option>
						                                            <option value="Greenland">Greenland</option>
						                                            <option value="Grenada">Grenada</option>
						                                            <option value="Guadeloupe">Guadeloupe</option>
						                                            <option value="Guam">Guam</option>
						                                            <option value="Guatemala">Guatemala</option>
						                                            <option value="Guinea">Guinea</option>
						                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
						                                            <option value="Guyana">Guyana</option>
						                                            <option value="Haiti">Haiti</option>
						                                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
						                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
						                                            <option value="Honduras">Honduras</option>
						                                            <option value="Hong Kong">Hong Kong</option>
						                                            <option value="Hungary">Hungary</option>
						                                            <option value="Iceland">Iceland</option>
						                                            <option value="India">India</option>
						                                            <option value="Indonesia">Indonesia</option>
						                                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
						                                            <option value="Iraq">Iraq</option>
						                                            <option value="Ireland">Ireland</option>
						                                            <option value="Israel">Israel</option>
						                                            <option value="Italy">Italy</option>
						                                            <option value="Jamaica">Jamaica</option>
						                                            <option value="Japan">Japan</option>
						                                            <option value="Jordan">Jordan</option>
						                                            <option value="Kazakhstan">Kazakhstan</option>
						                                            <option value="Kenya">Kenya</option>
						                                            <option value="Kiribati">Kiribati</option>
						                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
						                                            <option value="Korea, Republic of">Korea, Republic of</option>
						                                            <option value="Kuwait">Kuwait</option>
						                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
						                                            <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
						                                            <option value="Latvia">Latvia</option>
						                                            <option value="Lebanon">Lebanon</option>
						                                            <option value="Lesotho">Lesotho</option>
						                                            <option value="Liberia">Liberia</option>
						                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
						                                            <option value="Liechtenstein">Liechtenstein</option>
						                                            <option value="Lithuania">Lithuania</option>
						                                            <option value="Luxembourg">Luxembourg</option>
						                                            <option value="Macau">Macau</option>
						                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
						                                            <option value="Madagascar">Madagascar</option>
						                                            <option value="Malawi">Malawi</option>
						                                            <option value="Malaysia">Malaysia</option>
						                                            <option value="Maldives">Maldives</option>
						                                            <option value="Mali">Mali</option>
						                                            <option value="Malta">Malta</option>
						                                            <option value="Marshall Islands">Marshall Islands</option>
						                                            <option value="Martinique">Martinique</option>
						                                            <option value="Mauritania">Mauritania</option>
						                                            <option value="Mauritius">Mauritius</option>
						                                            <option value="Mayotte">Mayotte</option>
						                                            <option value="Mexico">Mexico</option>
						                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
						                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
						                                            <option value="Monaco">Monaco</option>
						                                            <option value="Mongolia">Mongolia</option>
						                                            <option value="Montserrat">Montserrat</option>
						                                            <option value="Morocco">Morocco</option>
						                                            <option value="Mozambique">Mozambique</option>
						                                            <option value="Myanmar">Myanmar</option>
						                                            <option value="Namibia">Namibia</option>
						                                            <option value="Nauru">Nauru</option>
						                                            <option value="Nepal">Nepal</option>
						                                            <option value="Netherlands">Netherlands</option>
						                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
						                                            <option value="New Caledonia">New Caledonia</option>
						                                            <option value="New Zealand">New Zealand</option>
						                                            <option value="Nicaragua">Nicaragua</option>
						                                            <option value="Niger">Niger</option>
						                                            <option value="Nigeria">Nigeria</option>
						                                            <option value="Niue">Niue</option>
						                                            <option value="Norfolk Island">Norfolk Island</option>
						                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
						                                            <option value="Norway">Norway</option>
						                                            <option value="Oman">Oman</option>
						                                            <option value="Pakistan">Pakistan</option>
						                                            <option value="Palau">Palau</option>
						                                            <option value="Panama">Panama</option>
						                                            <option value="Papua New Guinea">Papua New Guinea</option>
						                                            <option value="Paraguay">Paraguay</option>
						                                            <option value="Peru">Peru</option>
						                                            <option value="Philippines">Philippines</option>
						                                            <option value="Pitcairn">Pitcairn</option>
						                                            <option value="Poland">Poland</option>
						                                            <option value="Portugal">Portugal</option>
						                                            <option value="Puerto Rico">Puerto Rico</option>
						                                            <option value="Qatar">Qatar</option>
						                                            <option value="Reunion">Reunion</option>
						                                            <option value="Romania">Romania</option>
						                                            <option value="Russian Federation">Russian Federation</option>
						                                            <option value="Rwanda">Rwanda</option>
						                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
						                                            <option value="Saint Lucia">Saint Lucia</option>
						                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
						                                            <option value="Samoa">Samoa</option>
						                                            <option value="San Marino">San Marino</option>
						                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
						                                            <option value="Saudi Arabia">Saudi Arabia</option>
						                                            <option value="Senegal">Senegal</option>
						                                            <option value="Seychelles">Seychelles</option>
						                                            <option value="Sierra Leone">Sierra Leone</option>
						                                            <option value="Singapore">Singapore</option>
						                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
						                                            <option value="Slovenia">Slovenia</option>
						                                            <option value="Solomon Islands">Solomon Islands</option>
						                                            <option value="Somalia">Somalia</option>
						                                            <option value="South Africa">South Africa</option>
						                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
						                                            <option value="Spain">Spain</option>
						                                            <option value="Sri Lanka">Sri Lanka</option>
						                                            <option value="St. Helena">St. Helena</option>
						                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
						                                            <option value="Sudan">Sudan</option>
						                                            <option value="Suriname">Suriname</option>
						                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
						                                            <option value="Swaziland">Swaziland</option>
						                                            <option value="Sweden">Sweden</option>
						                                            <option value="Switzerland">Switzerland</option>
						                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
						                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
						                                            <option value="Tajikistan">Tajikistan</option>
						                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
						                                            <option value="Thailand">Thailand</option>
						                                            <option value="Togo">Togo</option>
						                                            <option value="Tokelau">Tokelau</option>
						                                            <option value="Tonga">Tonga</option>
						                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
						                                            <option value="Tunisia">Tunisia</option>
						                                            <option value="Turkey">Turkey</option>
						                                            <option value="Turkmenistan">Turkmenistan</option>
						                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
						                                            <option value="Tuvalu">Tuvalu</option>
						                                            <option value="Uganda">Uganda</option>
						                                            <option value="Ukraine">Ukraine</option>
						                                            <option value="United Arab Emirates">United Arab Emirates</option>
						                                            <option value="United Kingdom">United Kingdom</option>
						                                            <option value="United States">United States</option>
						                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
						                                            <option value="Uruguay">Uruguay</option>
						                                            <option value="Uzbekistan">Uzbekistan</option>
						                                            <option value="Vanuatu">Vanuatu</option>
						                                            <option value="Venezuela">Venezuela</option>
						                                            <option value="Vietnam">Vietnam</option>
						                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
						                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
						                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
						                                            <option value="Western Sahara">Western Sahara</option>
						                                            <option value="Yemen">Yemen</option>
						                                            <option value="Yugoslavia">Yugoslavia</option>
						                                            <option value="Zambia">Zambia</option>
						                                            <option value="Zimbabwe">Zimbabwe</option>
						                                        </select>
						                                    </div>
						                                </div>
						                                <div class="col-6">
						                                    <div class="mb-3">
						                                    	<label class="form-label" for="bootstrap-wizard-card-holder-zip-code">Zip Code</label>
						                                    	<input class="form-control" placeholder="1234" name="zipCode" type="text" id="bootstrap-wizard-card-holder-zip-code" />
						                                    </div>
						                                </div>
						                                <div class="col-6">
						                                    <div class="form-group mb-0">
						                                    	<label class="form-label" for="bootstrap-wizard-card-exp-date">Exp Date</label>
						                                    	<input class="form-control" placeholder="15/2024" name="expDate" type="text" id="bootstrap-wizard-card-exp-date" />
						                                    </div>
						                                </div>
						                                <div class="col-6">
						                                    <div class="form-group mb-0">
						                                    	<label class="form-label" for="bootstrap-wizard-card-cvv">CVV</label>
						                                    	<span class="ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Card verification value">
						                                    		<span class="fa fa-question-circle"></span>
						                                    	</span>
						                                    	<input class="form-control" placeholder="123" name="cvv" maxlength="3" pattern="[0-9]{3}" type="text" id="bootstrap-wizard-card-cvv" />
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
