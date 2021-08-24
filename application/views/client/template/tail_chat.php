
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
            <!-- ===============================================-->
            <!--    End of Main Content-->
            <!-- ===============================================-->

            <!-- ===============================================-->
            <!--    JavaScripts-->
            <!-- ===============================================-->
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="<?php echo base_url('assets/plugins/popper/popper.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/fontawesome/all.min.js'); ?>">

            <script src="<?php echo base_url('assets/js/emoji-button.js'); ?>"></script>

            <script src="<?php echo base_url('assets/plugins/summernote/summernote-lite.js'); ?>"></script>
            <script src="<?php echo base_url('assets/plugins/dropzone/dropzone.min.js'); ?>"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#profile_bio').summernote();

                    Dropzone.autoDiscover = false;

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
                });
            </script>

        </body>
    </html>

