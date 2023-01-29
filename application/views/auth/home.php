<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <div class="container" data-layout="container">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <div class="content">
            <script>
                var navbarPosition = localStorage.getItem('navbarPosition');
                var navbarVertical = document.querySelector('.navbar-vertical');
                var navbarTopVertical = document.querySelector('.content .navbar-top');
                var navbarTop = document.querySelector('[data-layout] .navbar-top');
                var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
                if (navbarPosition === 'top') {
                    navbarTop.removeAttribute('style');
                    navbarTopVertical.remove(navbarTopVertical);
                    navbarVertical.remove(navbarVertical);
                    navbarTopCombo.remove(navbarTopCombo);
                } else if (navbarPosition === 'combo') {
                    navbarVertical.removeAttribute('style');
                    navbarTopCombo.removeAttribute('style');
                    navbarTop.remove(navbarTop);
                    navbarTopVertical.remove(navbarTopVertical);
                } else {
                    navbarVertical.removeAttribute('style');
                    navbarTopVertical.removeAttribute('style');
                    navbarTop.remove(navbarTop);
                    navbarTopCombo.remove(navbarTopCombo);
                }
            </script>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mb-4">
                            <div class="fs-1">Ten_Dollar Tutors & Essay Writers</div>
                            <h3 class="fs-2 fs-md-3">Users and the capabilities bestowed on them. <br class="d-none d-md-block" />Admin, Subscribed and guest users.</h3>
                        </div>
                        <div class="col-12 col-lg-9 col-xl-10 col-xxl-8">
                            <div class="row">
                                <div class="col-md">
                                    <div class="border rounded-3 overflow-hidden mb-3 mb-md-0">
                                        <div class="d-flex flex-between-center p-4">
                                            <div>
                                                <h3 class="fw-light fs-5 mb-0 text-primary">Free</h3>
                                            </div>
                                            <div class="pe-3"><img src="../../assets/img/icons/free.svg" width="70" alt="" /></div>
                                        </div>
                                        <div class="p-4 bg-light">
                                            <ul class="list-unstyled">
                                                <li class="border-bottom py-2">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> View Questions
                                                </li>
                                                <li class="border-bottom py-2">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> List of Questions Sequences
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> Account
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> Notification Tools
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> Payment
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> Instant Chat
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> Mails
                                                </li>
                                            </ul>
                                            <button class="btn btn-outline-primary d-block w-100" type="button">
                                                <a href="<?php echo  base_url('admin/home')?>"> Proceed as User</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="border rounded-3 overflow-hidden">
                                        <div class="d-flex flex-between-center p-4">
                                            <div>
                                                <h3 class="fw-light text-primary fs-5 mb-0">Admin/Pro</h3>
                                            </div>
                                            <div class="pe-3"><img src="../../assets/img/icons/pro.svg" width="70" alt="" /></div>
                                        </div>
                                        <div class="p-4 bg-light">
                                            <ul class="list-unstyled">
                                                <li class="border-bottom py-2">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Add and Edit Questions
                                                </li>
                                                <li class="border-bottom py-2">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> View Question Interactions
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"></span> Advanced marketing
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Analytics
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Payments
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> User Rewarding
                                                </li>
                                                <li class="py-2 border-bottom">
                                                    <span class="fas fa-check text-primary" data-fa-transform="shrink-2"> </span> Messaging and Mails
                                                </li>

                                            </ul>
                                            <button class="btn btn-outline-primary d-block w-100" type="button">
                                                <a href="<?php echo  base_url('client/home')?>"> Proceed as Admin</a>
                                            </button>
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
    </div>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->
       