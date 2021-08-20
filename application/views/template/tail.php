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

