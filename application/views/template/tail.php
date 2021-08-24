                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <footer class="footer">
                                    <p class="mb-0 text-600">Tafuta Sasa Inc. <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy;</p>
                                </footer>
                            </div>
                            <div class="col-3"></div>
                        </div>
                        
                    </div>

<div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="instant_chat_pop" tabindex="-1" role="dialog" aria-labelledby="instant_chat_pop-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content border-0 vh-100 scrollbar-overlay">
            <div class="modal-header modal-header-settings bg-shape">
                <div class="z-index-1 py-1 light">
                    <h5 class="text-white" id="instant_chat_pop-label"> <span class="fas fa-palette me-2 fs-0"></span>Instant Chat</h5>
                    <p class="mb-0 fs--1 text-white opacity-75"> Get instant help by any of this platforms</p>
                </div>
                <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-card" id="themeController">
                <hr />
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-envelope me-2"></i>
                        <div class="flex-1">
                            <h5 class="fs-0">Email</h5>
                            <p class="fs--1 mb-0">The inbuilt chat has the email support </p>
                            <a class="fs--1" href="<?php echo base_url('client/chat') ?>">Proceed</a>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-start">
                        <i class="fab fa-whatsapp me-2"></i>
                        <div class="flex-1">
                            <h5 class="fs-0">Whatsapp</h5>
                            <p class="fs--1 mb-0">Mesages sent over WhatsApp </p>
                            <a class="fs--1" href="<?php echo base_url('client/chat') ?>">Proceed</a>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-start">
                        <i class="fab fa-weixin me-2"></i>
                        <div class="flex-1">
                            <h5 class="fs-0">WeChat</h5>
                            <p class="fs--1 mb-0">Messages sent over the WeChat client </p>
                            <a class="fs--1" href="<?php echo base_url('client/chat') ?>">Proceed</a>
                        </div>
                    </div>
                </div>
                <hr />
            </div>
        </div>
    </div>
</div>
<a class="card setting-toggle" href="#instant_chat_pop" data-bs-toggle="modal" >
    <div class="card-body d-flex align-items-center py-md-2 px-2 py-1" style="margin-bottom: 50px;">
        <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover">
                <span class="ripple">
                    <span class="fa-spin position-absolute all-0 d-flex flex-center">
                        <span class="icon-spin position-absolute all-0 d-flex flex-center">
                            <i class="far fa-comments text-success"></i>
                        </span>
                    </span>
                </span>
            </div>
        </div>
        <small class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">&nbsp;</small>
    </div>
</a>

            <!-- ===============================================-->
            <!--    End of Main Content-->
            <!-- ===============================================-->

            <!-- ===============================================-->
            <!--    JavaScripts-->
            <!-- ===============================================-->

            <script src="<?php echo base_url('assets/plugins/popper/popper.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/anchorjs/anchor.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/is/is.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/js/flatpickr.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/dropzone/dropzone.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/lottie/lottie.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/validator/validator.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/prism/prism.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/fontawesome/all.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/lodash/lodash.min.js'); ?>"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
            <script src="<?php echo base_url('assets/plugins/list.js/list.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>

            <script type="text/javascript">
                var wizardInit = function wizardInit() {
                    var wizards = document.querySelectorAll('.theme-wizard');
                    var tabProgressBar = document.querySelector('.theme-wizard .progress');
                    wizards.forEach(function(wizard) {
                        var tabToggleButtonEl = wizard.querySelectorAll('[data-wizard-step]');
                        var inputEmail = wizard.querySelector('[data-wizard-validate-email]');
                        var emailPattern = inputEmail.getAttribute('pattern');
                        var inputPassword = wizard.querySelector('[data-wizard-validate-password]');
                        var inputConfirmPassword = wizard.querySelector('[data-wizard-validate-confirm-password]');

                        var inputcardnumber = wizard.querySelector('#cardNumber');
                        var inputcardnumberpattern = inputcardnumber.getAttribute('pattern');

                        var inputcardname = wizard.querySelector('#cardName');
                        var inputcardnamepattern = inputcardname.getAttribute('pattern');

                        var inputcardcvv = wizard.querySelector('#cardcvv');
                        var inputcardcvvpattern = inputcardcvv.getAttribute('pattern');

                        var inputcardexpdate = wizard.querySelector('#cardexpDate');
                        var inputcardexpdatepattern = inputcardexpdate.getAttribute('pattern');

                        var form = wizard.querySelector('[novalidate]');
                        var nextButton = wizard.querySelector('.next button');
                        var prevButton = wizard.querySelector('.previous button');
                        var cardFooter = wizard.querySelector('.theme-wizard .card-footer');
                        var count = 0;

                        var validatePattern = function validatePattern(pattern, value) {
                            var regexPattern = new RegExp(pattern);
                            return regexPattern.test(String(value).toLowerCase());
                        };

                        prevButton.classList.add('d-none'); // on button click tab change

                        nextButton.addEventListener('click', function() {

                            if ((!(inputEmail.value && validatePattern(emailPattern, inputEmail.value))) && form.className.includes('needs-validation')) {
                                form.classList.add('was-validated');
                            } else {
                                count += 1;
                                var tab = new window.bootstrap.Tab(tabToggleButtonEl[count]);
                                tab.show();
                            }

                            if (count =2) {
                                console.log("Hha");
                                if (( !(inputcardnumber.value && validatePattern(inputcardnumberpattern, inputcardnumber.value))) && form.className.includes('needs-validation')) {
                                    form.classList.add('was-validated');
                                } else {
                                    count += 1;
                                    var tab = new window.bootstrap.Tab(tabToggleButtonEl[count]);
                                    tab.show();
                                }
                            }
                        });
                        prevButton.addEventListener('click', function() {
                            count -= 1;
                            var tab = new window.bootstrap.Tab(tabToggleButtonEl[count]);
                            tab.show();
                        });

                        if (tabToggleButtonEl.length) {
                            tabToggleButtonEl.forEach(function(item, index) {
                                /* eslint-disable */
                                item.addEventListener('show.bs.tab', function(e) {
                                    if ((!(inputEmail.value && validatePattern(emailPattern, inputEmail.value))) && form.className.includes('needs-validation')) {
                                        e.preventDefault();
                                        form.classList.add('was-validated');
                                        return null;
                                        /* eslint-enable */
                                    }

                                    /*if ((!(inputEmail.value && validatePattern(emailPattern, inputEmail.value)) || !inputPassword.value || !inputConfirmPassword.value) && form.className.includes('needs-validation')) {
                                        e.preventDefault();
                                        form.classList.add('was-validated');
                                        return null;
                                    }*/

                                    count = index; // can't go back tab

                                    if (count === tabToggleButtonEl.length - 1) {
                                        tabToggleButtonEl.forEach(function(tab) {
                                            tab.setAttribute('data-bs-toggle', 'modal');
                                            tab.setAttribute('data-bs-target', '#error-modal');
                                        });
                                    } //add done class


                                    for (var i = 0; i < count; i += 1) {
                                        tabToggleButtonEl[i].classList.add('done');
                                    } //remove done class


                                    for (var j = count; j < tabToggleButtonEl.length; j += 1) {
                                        tabToggleButtonEl[j].classList.remove('done');
                                    } // card footer remove at last step


                                    if (count > tabToggleButtonEl.length - 2) {
                                        item.classList.add('done');
                                        cardFooter.classList.add('d-none');
                                    } else {
                                        cardFooter.classList.remove('d-none');
                                    } // prev-button removing


                                    if (count > 0) {
                                        prevButton.classList.remove('d-none');
                                    } else {
                                        prevButton.classList.add('d-none');
                                    }
                                });
                            });
                        }
                    }); // control wizard progressbar
                };

                docReady(wizardInit);
            </script>
        </body>
    </html>

