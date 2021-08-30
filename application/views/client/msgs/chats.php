<div class="card card-chat overflow-hidden">
    <div class="card-body d-flex p-0 h-100">
        <div class="card-chat-content">
            <div class="card-chat-pane">
                <div class="chat-content-body" style="display: inherit;">
                    <div class="chat-content-scroll-area scrollbar">
                        <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                            <div class="avatar avatar-2xl status-online me-3">
                                <img class="rounded-circle" src="<?php echo base_url('assets/img/team/11.jpg'); ?>" alt="" />
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0">
                                    <a class="text-decoration-none stretched-link text-700" href="#">Account Support</a>
                                </h6>
                                <p class="mb-0">You friends with Account Support.</p>
                            </div>
                        </div>

                        <div class="posted_msgs" id="posted_msgs" name="posted_msgs"> 
                            <?php echo $sent_msg;?>
                        </div>
                    </div>
                </div>
            </div>
            <form class="chat-editor-area">
                <div class="mb-3">
                    <div class="container">
                        <br>
                        <div class="col-12">
                            <textarea name="info_msg" id="info_msg" rows="6"></textarea>
                        </div>
                        <br>
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button class="btn btn-sm btn-outline-primary" type="button" id="client_send_msg">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
