
        <main class="main" id="top">
            <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark" data-navbar-darken-on-scroll="data-navbar-darken-on-scroll">
                <div class="container">
                    <a class="navbar-brand" href="../index.html"><span class="text-white dark__text-white">Tafuta Sasa</span></a><button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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

                        <div class="col-md-12 text-center text-xl-start">
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

                        <div class="col-md-12 text-center" style="margin-top: 20px; margin-bottom: 35px;">
                            <a class="btn btn-outline-danger mb-4 fs--1 border-2 rounded-pill hidden" href="landing.html#!">
                                <span class="me-2" role="img" aria-label="Gift">🎁</span>Become a pro
                            </a>
                            <h1 class="text-white fw-light">Bring 
                                <span class="typed-text fw-bold" data-typed-text='["design","beauty","elegance","perfection"]'></span><br />to your ...
                            </h1>
                            <p class="lead text-white opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ...</p>
                            <a class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="<?php echo base_url('auth/register'); ?>)">Become a seller
                                <span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <section class="bg-light text-center">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="fs-2 fs-sm-4 fs-md-5">Here's what's in it for you</h1>
                            <p class="lead">Things you will get right out of the box with Falcon.</p>
                        </div>
                    </div>
                    <div class="row mt-6">
                        <div class="col-lg-4">
                            <div class="card card-span h-100">
                                <div class="card-span-img"><span class="fab fa-sass fs-4 text-info"></span></div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">Bootstrap 5.x</h5>
                                    <p>Build your webapp with the world's most popular front-end component library along with Falcon's 32 sets of carefully designed elements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-6 mt-lg-0">
                            <div class="card card-span h-100">
                                <div class="card-span-img"><span class="fab fa-node-js fs-5 text-success"></span></div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">SCSS &amp; Javascript files</h5>
                                    <p>With your purchased copy of Falcon, you will get all the uncompressed & documented SCSS and Javascript source code files.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-6 mt-lg-0">
                            <div class="card card-span h-100">
                                <div class="card-span-img"><span class="fab fa-gulp fs-6 text-danger"></span></div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">Gulp based workflow</h5>
                                    <p>All the painful or time-consuming tasks in your development workflow such as compiling the SCSS or transpiring the JS are automated.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-6">
                        <div class="col-lg-4">
                            <div class="card card-span h-100">
                                <div class="card-span-img"><span class="fab fa-sass fs-4 text-info"></span></div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">Bootstrap 5.x</h5>
                                    <p>Build your webapp with the world's most popular front-end component library along with Falcon's 32 sets of carefully designed elements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-6 mt-lg-0">
                            <div class="card card-span h-100">
                                <div class="card-span-img"><span class="fab fa-node-js fs-5 text-success"></span></div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">SCSS &amp; Javascript files</h5>
                                    <p>With your purchased copy of Falcon, you will get all the uncompressed & documented SCSS and Javascript source code files.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-6 mt-lg-0">
                            <div class="card card-span h-100">
                                <div class="card-span-img"><span class="fab fa-gulp fs-6 text-danger"></span></div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">Gulp based workflow</h5>
                                    <p>All the painful or time-consuming tasks in your development workflow such as compiling the SCSS or transpiring the JS are automated.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </section>
        </main>