
                        <footer class="footer">
                            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                                <div class="col-12 col-sm-auto text-center">
                                    <p class="mb-0 text-600">Tafuta Sasa <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; </p>
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

            <script src="<?php echo base_url('assets/plugins/progressbar/progressbar.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/dayjs/dayjs.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/js/flatpickr.js'); ?>"></script>

            <script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.js'); ?>"></script>
	        <script src="<?php echo base_url('assets/plugins/dropzone/dropzone.min.js'); ?>"></script>

	        <script type="text/javascript">
	            $(document).ready(function() {
	                $('#ord_body').summernote();


	                $('#send_msg').click(function(){
		                var msg = $('#message_note').val();
		                console.log(msg);

		                $.ajax({
		                    url: "<?php echo base_url('mail/send/'.($this->uri->segment(4))); ?>",
		                    type: 'POST',
		                    data: { convo_body:msg },
		                    success: function(response){
		                        if(response == 1){ 
		                            //$('textarea').val('')  
		                        }else{
		                            //alert('Invalid ID.');
		                        }
		                    }
		                });
		                
		            });


                    $('.create_order').click(function(){
                        var ord_name = $('#ord_name').val();
                        var ord_body = $('#ord_body').summernote('code');
                        var ord_date = $('#datetimepicker').val();
                        var ord_pgs = $('#ord_pgs').val();
                        var ord_citing = $('#ord_citing').val();
                        var ord_level = $('#ord_level').val();

                        $.ajax({
                            url: "<?php echo base_url('client/order/make'); ?>",
                            type: 'POST',
                            data: { ord_name:ord_name, ord_body:ord_body, ord_date:ord_date, ord_pgs:ord_pgs, ord_citing:ord_citing, ord_level:ord_level },
                            success: function(response){
                                window.location.replace("<?php echo base_url('client/orders'); ?>");
                            }
                        });
                        
                    });


		             $('select').change(function () {
					    var optionSelected = $(this).find("option:selected");
					    var valueSelected  = optionSelected.val();
					    var textSelected   = optionSelected.text();
					    var words = textSelected * 300;
					    $('#ord_word').val(words+ ' Words');
					    console.log(textSelected);
					});

                    function sendRequest(){
                        $.ajax({ 
                            url: '<?php echo base_url("client/get/order_attachments"); ?>',
                            type: 'POST',
                            success: function(response){
                                $(".temp_files").html(response).fadeIn();
                                setTimeout(function(){
                                    sendRequest();
                                }, 5000);

                            } 
                        }); 
                    }

                    sendRequest();

                    $(document).on("click", '.delete_attach_file_', function(event) {
                    var fileid = this.id;
                    $.ajax({
                        url: '<?php echo base_url("client/get/attachment_delete/"); ?>'+fileid,
                        type: 'POST',
                        success: function(response){
                            console.log(response);
                        }
                    });  
                }); 
	                
	            });
	        </script>

        </body>
    </html>

