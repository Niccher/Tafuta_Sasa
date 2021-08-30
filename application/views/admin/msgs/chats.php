<div class="card card-chat overflow-hidden">
    <div class="card-body d-flex p-0 h-100">
        <div class="chat-sidebar">
            <div class="contacts-list scrollbar-overlay">
                <div class="nav nav-tabs border-0 flex-column" role="tablist" aria-orientation="vertical">
                    <?php echo $sent_users; ?>
                </div>
            </div>
        </div>
        <div class="card-chat-content">
            <div class="card-chat-pane">
                <div class="chat-content-body" style="display: inherit;">
                    <div class="chat-content-scroll-area scrollbar">
                        <div class="posted_msgs" id="posted_msgs" name="posted_msgs"> 
                            <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                                <div class="avatar avatar-2xl status-online me-3"></div>
                                <div class="flex-1">
                                    <h6 class="mb-0">
                                        <a class="text-decoration-none stretched-link text-700" href="#">No User</a>
                                    </h6>
                                    <p class="mb-0">Select a user to start a conversation with.</p>
                                </div>
                            </div>
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
                                <button class="btn btn-sm btn-outline-primary" type="button" id="admin_send_msg">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
