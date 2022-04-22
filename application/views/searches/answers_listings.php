
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

                        <div class="col-md-12 text-center text-xl-start" style="margin-bottom: 35px; margin-top: -20px;">
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

                <table class="" id="answer_listing" name="answer_listing">
                    <th>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center mb-0">Answers to <?php echo $this->security->xss_clean($_GET['s_query']);;?></h4>
                            </div>
                        </div>
                    </th>
        <?php
            foreach ($list_answers_all as $searches) {
                $qn = urlencode($this->mod_crypt->Dec_String($searches["Qn_Name"]));
                echo '
                <tr>
                    <td>
                        <div class="container">
                            <div class="card">
                                <div class="card-body bg-light">
                                    <h5>
                                        <b>
                                        <a href="'.base_url("search/answer/id?q_name=".$qn).'">'.ucfirst(strip_tags($this->mod_crypt->Dec_String($searches["Qn_Name"]))).'</a>
                                        </b>
                                    </h5>
                                    <p class="fs--1 mb-0">'.word_limiter(strip_tags($this->mod_crypt->Dec_String($searches["Qn_Answer"]), 50)).'</p>
                                    <div class="row">
                                        <div class="col-8"></div>
                                        <div class="col-4">
                                            <div class="float-left">
                                                <span class="me-2 small" data-bs-toggle="tooltip" title="" data-bs-original-title="Youre assigned in this card" aria-label="Answer viewed '.($searches["Qn_Viewed"]).'">
                                                    <span class="fas fa-eye fa-xs"></span>&nbsp;&nbsp; '.($searches["Qn_Viewed"]).'
                                                </span>
                                                <span class="me-2 small" data-bs-toggle="tooltip" title="" data-bs-original-title="Last updated"> 
                                                    <span class="far fa-calendar fa-xs"></span> '.date('F, Y D', ($searches["Qn_Created"])).'
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>';
            }
        ?>

                </table>


		    </div>

        </main>