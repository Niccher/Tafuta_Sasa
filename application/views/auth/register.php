<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-8 col-xxl-5 py-3 position-relative">
                <img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250">
                <img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                                    <!--/.bg-holder-->
                                    <div class="z-index-1 position-relative">
                                        <a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="#">Ten_Dollar Tutors & Essay Writers</a>
                                        <p class="opacity-75 text-white">We are so glad you are here. Creating an account with us is easy and will give you access to all of our amazing features. With your account, you will be able to save your favorite items, track your orders, and receive exclusive offers. Plus, you can join our loyalty program and start earning rewards today. Creating an account is simple. All you need to do is provide us with your name, email address, and a password. Once you have completed the registration process, you will be able to start taking advantage of all the great benefits that come with being a member. Thank you for choosing us. We look forward to having you as part of our community.
                                    </div>
                                </div>
                                <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                    <p class="pt-3 text-white">Have an account?<br><a class="btn btn-outline-light mt-2 px-4" href="<?php echo base_url('auth/login');?>">Log In</a></p>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <h3>Register</h3>
                                    <?php
                                    echo $errorcode;
                                    echo validation_errors();
                                    echo form_open('auth/register'); ?>
                                    <div class="mb-3">
                                        <label class="form-label" for="card-name">Name</label>
                                        <input class="form-control" type="text" autocomplete="on" id="card-name" name="rg_name" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="card-email">Email address</label>
                                        <input class="form-control" type="email" autocomplete="on" id="card-email" name="rg_email" />
                                    </div>
                                    <div class="row gx-2">
                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label" for="card-password">Password</label>
                                            <input class="form-control" type="password" autocomplete="on" id="card-password" name="rg_password" />
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label" for="card-confirm-password">Confirm Password</label>
                                            <input class="form-control" type="password" autocomplete="on" id="card-confirm-password" name="rg_password1" />
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="card-register-checkbox" />
                                        <label class="form-label" for="card-register-checkbox">I accept the <a href="<?php echo base_url('auth/terms');?>">terms </a>and <a href="<?php echo base_url('auth/privacy');?>">privacy policy</a>
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
                                            <a class="btn btn-outline-google-plus btn-sm d-block w-100" href="<?php echo base_url('auth/google');?> ">
                                                <span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> Google
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a class="btn btn-outline-facebook btn-sm d-block w-100" href="<?php echo base_url('auth/facebook');?> ">
                                                <span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> Facebook
                                            </a>
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