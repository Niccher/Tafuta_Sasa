<br>

<main class="main" id="top">
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-8 col-xxl-5 py-3 position-relative">
                <img class="bg-auth-circle-shape" src="<?php echo base_url('assets/img/icons/spot-illustrations/bg-shape.png'); ?>" alt="" width="250"><img class="bg-auth-circle-shape-2" src="<?php echo base_url('assets/img/icons/spot-illustrations/shape-1.png'); ?>" alt="" width="150">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(<?php echo base_url('assets/img/icons/spot-illustrations/half-circle.png'); ?>);"></div>
                                    <!--/.bg-holder-->
                                    <div class="z-index-1 position-relative">
                                        <a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="#">Ten_Dollar Tutors & Essay Writers</a>
                                        <p class="opacity-75 text-white">You've forgotten your password? Don't worry, we can help you reset it. Just enter your email address below and we'll send you a link to reset your password. Once you've reset your password, you'll be able to log in and access your account. Thanks for being a valued customer!</p>
                                    </div>
                                </div>
                                <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                    <p class="text-white">Don't have an account?<br>
                                        <a class="text-decoration-underline link-light" href="<?php echo base_url('auth/register');?>"> Get started!</a>
                                    </p>
                                    <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our
                                        <a class="text-decoration-underline text-white" href="<?php echo base_url('auth/terms');?>">terms</a> and <a class="text-decoration-underline text-white" href="<?php echo base_url('auth/conditions');?> ">conditions </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <div class="text-center text-md-start">
                                        <h4 class="mb-0"> Forgot your password?</h4>
                                        <p class="mb-4">Enter your email and we'll send you a reset link.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12 col-md">
                                            <?php
                                            echo $auth_error;
                                            echo validation_errors();
                                            echo form_open('auth/forgot');
                                            ?>
                                            <br>
                                            <input class="form-control" type="email" placeholder="Email address" name="forgot_mail" />
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

<br>
