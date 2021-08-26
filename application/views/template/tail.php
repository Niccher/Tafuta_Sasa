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
                                            <a class="fs--1" href="https://api.whatsapp.com/send?phone=2540701527895" target="_blank">Proceed</a>
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

            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="<?php echo base_url('assets/plugins/popper/popper.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/fontawesome/all.min.js'); ?>"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $("#purchase_email").keyup(function(){
                        var email = $('#purchase_email').val();
                        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if (!filter.test(email)) {
                            $("#error_email").text(email+" is not a valid email");
                            email.focus;
                        } else {
                            $("#error_email").text("");
                            $('#init_payment').removeClass('disabled');

                            $('.init_payment').click(function(){
                                var msg = $('#purchase_email').val();
                                console.log(msg);

                                <?php 
                                    $question_name = $this->mod_crypt->Enc_String(urldecode($_GET['q_name']));
                                    $qu_info = $this->mod_questions->get_question_by_name($question_name);
                                    if (!empty($qu_info)) {
                                        $qu_url = urlencode($this->mod_crypt->Enc_String($qu_info->Qn_Id));
                                    }
                                    
                                ?>

                                $.ajax({
                                    url: "<?php echo base_url('buyer/pay/'.$qu_url); ?>",
                                    type: 'POST',
                                    data: { mail:email},
                                    success: function(response){
                                        $('#wiz_get_eml').html(response);
                                    }
                                }); 

                            });

                        }

                    });

                });
            </script>
        </body>
    </html>

