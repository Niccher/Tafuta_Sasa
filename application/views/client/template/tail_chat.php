
                        <footer class="footer">
                            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                                <div class="col-12 col-sm-auto text-center">
                                    <p class="mb-0 text-600">Epic Writers <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; </p>
                                </div>
                                <div class="col-12 col-sm-auto text-center">
                                    <p class="mb-0 text-600">v1.0.0</p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </main>


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

            <script src="<?php echo base_url('assets/plugins/dropzone/dropzone.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.js'); ?>"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#profile_bio').summernote();
                    $("#info_msg").summernote({
                        height: 100,
                        toolbar: [
                            [ 'style', [ 'style' ] ],
                            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                            [ 'fontname', [ 'fontname' ] ],
                            [ 'fontsize', [ 'fontsize' ] ],
                            [ 'color', [ 'color' ] ],
                            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                            [ 'table', [ 'table' ] ],
                            [ 'insert', [ 'link'] ],
                            [ 'view', [ 'undo', 'redo', 'codeview', 'help' ] ]
                        ]
                    });

                    $('#posted_msgs').scrollTop($('#posted_msgs').height())

                    $('#client_send_msg').click(function(){
                        var msg = $('#info_msg').summernote('code');

                        $.ajax({
                            url: "<?php echo base_url('client/massage/send'); ?>",
                            type: 'POST',
                            data: { convo_body:msg },
                            success: function(response){
                                $.ajax({
                                    url: "<?php echo base_url('client/convos/'.urlencode($this->mod_crypt->Enc_String($this->session->userdata('log_id')))); ?>",
                                    type: 'POST',
                                    success: function(response){
                                        $('.posted_msgs').html(response);
                                        $('#info_msg').summernote('reset');
                                    }
                                });
                            }
                        });  
                        $('.posted_msgs').scrollTop($('.posted_msgs')[0].scrollHeight);
                    });

                    function sendRequest(){
                        $.ajax({
                            url: "<?php echo base_url('client/convos/'.urlencode($this->mod_crypt->Enc_String($this->session->userdata('log_id')))); ?>",
                            type: 'POST',
                            success: function(response){
                                $('.posted_msgs').html(response);
                                $('.posted_msgs').scrollTop($('.posted_msgs').height());
                                $('#posted_msgs').scrollTop($('#posted_msgs').height());
                                $('#posted_msgs').scrollTop($('#posted_msgs')[0].scrollHeight - $('#posted_msgs')[0].clientHeight);
                                setTimeout(function(){
                                    sendRequest();
                                }, 5000);
                            }
                        }); 
                    }

                    sendRequest();
                });
            </script>

            <script type="text/javascript">
                //Dropzone.autoDiscover = false;
                Dropzone.options.imageUpload = {
                    maxFilesize:10,
                    maxFiles: 1,
                    acceptedFiles: ".jpeg,.jpg,.png,.gif"
                };
            </script>

        </body>
    </html>

