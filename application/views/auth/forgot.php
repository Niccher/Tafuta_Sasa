        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="container-fluid">
                <div class="row min-vh-100 flex-center g-0">
                    <div class="col-lg-8 col-xxl-5 py-3 position-relative">
                        <img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
                        <div class="card overflow-hidden z-index-1">
                            <div class="card-body p-0">
                                <div class="row g-0 h-100">
                                    <div class="col-md-5 text-center bg-card-gradient">
                                        <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                            <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                                            <!--/.bg-holder-->
                                            <div class="z-index-1 position-relative">
                                                <a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="#">Tafuta Sasa</a>
                                                <p class="opacity-75 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                            <p class="text-white">Don't have an account?<br><a class="text-decoration-underline link-light" href="<form action="<?php echo base_url('auth/register');?> " method="POST">">Get started!</a></p>
                                            <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our <a class="text-decoration-underline text-white" href="<?php echo base_url('auth/terms');?> ">terms</a> and <a class="text-decoration-underline text-white" href="<?php echo base_url('auth/conditions');?> ">conditions </a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex flex-center">
                                        <div class="p-4 p-md-5 flex-grow-1">
                                            <div class="text-center text-md-start">
                                                <h4 class="mb-0"> Forgot your password?</h4>
                                                <p class="mb-4">Enter your email and we'll send you a reset link.</p>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-8 col-md">
                                                    <form class="mb-3" action="<?php echo base_url('auth/home');?> " method="POST">
                                                        <input class="form-control" type="email" placeholder="Email address" />
                                                        <div class="mb-3">
                                                            <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Send reset link</button>
                                                        </div>
                                                    </form>
                                                    <a class="fs--1 text-600" href="<?php echo base_url('auth/forgot');?>">I can't recover my account using this page<span class="d-inline-block ms-1">&rarr;</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        