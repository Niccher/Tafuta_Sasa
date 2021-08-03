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
                        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3>Privacy policy</h3>
                                    <p class="mb-0">A privacy policy is a statement or legal document that discloses some or all of the ways a party gathers, uses, discloses, and manages a customer or client's data.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-8 pe-lg-2">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0" id="account">Account</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-primary">Eligibility </h6>
                                    <p class="fs-0 mb-0 fw-semi-bold">In order to use the Service, you must:</p>
                                    <ol type="1">
                                        <li>be a business or a consumer able to enter into valid contracts;</li>
                                        <li>complete the signup process;</li>
                                        <li>agree to the Terms; and</li>
                                        <li>provide true, complete, and up to date contact information.</li>
                                    </ol>
                                    <hr class="my-4" />
                                    <h6 class="text-primary">Accepting these Terms</h6>
                                    <p class="mb-0 ps-3">These Terms apply from when you sign up for the Service. Clicking the ‘Get started’ or ‘Sign up with Google’ button on the Sign up page means that you’ve officially “signed” the Terms and a binding contract will come into existence on the basis of the Terms (“Agreement”). If you sign up for the Service on behalf of a company or other entity, you represent and warrant that you have the authority to accept these Terms on their behalf.</p>
                                    <hr class="my-4" />
                                    <h6 class="text-primary">Closing your account</h6>
                                    <p class="mb-0 ps-3">You or we may terminate this Agreement at any time and for any reason by giving notice in writing (including email) to the other party. You need to clear the unpaid invoices (if any exists) before terminating this Agreement. Once terminated, we may permanently delete your account and all the data associated with it, including your Content from our Website.</p>
                                    <hr class="my-4" />
                                    <h6 class="text-primary">Changes</h6>
                                    <p class="mb-0 ps-3">We may change any of the Terms by posting revised Terms of Use on our Website and sending an email to the last email address you gave us or a message to your account area of the Service (“Dashboard”). Unless you terminate your account within seven (7) days of that email, the new Terms will be effective immediately and apply to any continued or new use of the Service. We may change the Website, the Service, or any features of the Service at any time.</p>
                                    <hr class="my-4" />
                                    <h6 class="text-primary">Account and password</h6>
                                    <p class="mb-0 ps-3">You’re responsible for keeping your account name and password confidential. You’re also responsible for any use of your account, whether or not you authorized the use. You must immediately notify us of any unauthorized use of your accounts. We’re not responsible for any losses due to stolen or hacked passwords. We don’t have access to your current password, and for security reasons, we may only reset your password.</p>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0" id="subscriptions">Subscriptions and payment </h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-primary">Free service</h6>
                                    <p class="mb-0 ps-3">We may make certain Services available to you free of charge, up to certain limits as described on the Website (“Free Services”). Usage of the Services in excess of those limits requires a payment. We may terminate your access to the Free Services at any time without prior notice and will have no liability in respect of such termination. Without limiting the scope of clause 15, Free Services are provided without any warranty.</p>
                                    <hr class="my-4" />
                                    <h6 class="text-primary">Paid service</h6>
                                    <ol type="1">
                                        <li>If you use our Services and cross the limits of the Free Services we provide, the ‘Paid service’ section applies for you</li>
                                        <li>The “Invoice Payment” are the fees payable for your invoice, as specified to you when you use our Service beyond the free usage limit. You shall pay for the Invoice Payment to us for the term of your paid usage.</li>
                                        <li>You won’t be charged for using our services until your usage crosses the free usage limit. At the end of each month (considering you have used beyond our free usage limit), we will generate an invoice containing your usage information, and the due amount for that month.</li>
                                        <li>Invoice Fees are payable in the currency specified when you sign up for the Service and are exclusive of value added tax (or other applicable sales tax), which shall be added at the appropriate rate.</li>
                                    </ol>
                                    <hr class="my-4" />
                                    <h6 class="text-primary">Credit cards</h6>
                                    <p class="mb-0 ps-3">As long as you’re a paid user or have an outstanding balance with us, you will provide us with valid credit card information and authorize us to deduct the monthly invoice charges against that credit card (considering you have used beyond our free usage limit). We do not save card information that you provided, rather we use Stripe. You must replace the information for any credit card that expires with information for a different valid credit card. You can add multiple credit cards in our service, but only the card that you mark as Primary will be used to charge you for using paid services. </p>
                                    <hr class="my-4" />
                                    <h6 class="text-primary">Refunds</h6>
                                    <p class="mb-0 ps-3">You won’t be entitled to a refund from us. As a postpaid service, it’s invalid. But if your invoice has inappropriate information due to any software bug or any other reason, we will refund the extra amount we charged within 14 working days after the discovery. You need to let us know about the extra amount charged from you.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 ps-lg-2">
                            <div class="sticky-sidebar">
                                <div class="card sticky-top">
                                    <div class="card-header border-bottom">
                                        <h6 class="mb-0 fs-0">On this page</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="terms-sidebar nav flex-column fs--1" id="terms-sidebar">
                                            <div class="nav-item"><a class="nav-link px-0 py-1" href="<?php echo base_url('auth/privacy');?>#account">Account</a></div>
                                            <div class="nav-item"><a class="nav-link px-0 py-1" href="<?php echo base_url('auth/privacy');?>#subscriptions">Subscriptions</a></div>
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
       