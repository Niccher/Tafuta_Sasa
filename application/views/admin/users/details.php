    <div class="card mb-3">
        <div class="card-body">

            <div class="row">
                <div class="col-lg-2">
                    <div class="avatar" style="width: 60px; height: 60px;">
                        <img class="rounded-circle" src="<?php echo base_url('uploads/profiles/'.$user_info->Avatar); ?>" />
                    </div>
                </div>

                <div class="col-lg-5">
                    <h4 class="mb-1"> <?php echo $this->mod_crypt->Dec_String($user_info->Name); ?>
                    </h4>
                    <?php 
                        if($user_info->Status == '' || $user_info->Status == '00'){
                            $staus = '
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Unverified">
                                    <small class="fas fa-check-circle text-danger" data-fa-transform="shrink-4 down-2"></small>
                                </span>
                            ';
                        }else{
                            $staus = '
                                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Email Not Verified">
                                    <small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small>
                                </span>
                            ';
                        } 
                    ?>
                    <p class="text-500">Email Verified: <?php echo $staus; ?></p>
                    <a href="#">
                        <button class="btn btn-falcon-primary btn-sm px-3" type="button" data-bs-toggle="modal" data-bs-target="#message_pop">Message</button>
                    </a>
                    <div class="border-dashed-bottom my-4 d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-lg-8"> 
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Question Viewed</h5>
                </div>
                <div class="card-body fs--1">
                    <div class="row">
                        <?php
                            $qn_array = array(); $qn_seen = array(); 
                            $qn_all = array_reverse($question_viewed);
                            foreach ($qn_all as $question) {
                                $q_info = $this->mod_questions->get_question_by_id($question['View_Question']);
                                if (!empty($q_info)) {
                                    array_push($qn_seen,$question['View_Question']);
                                }
                            }
                            $qn_array = array_unique($qn_seen);
                            foreach ($qn_array as $this_qn) {
                                $q_info = $this->mod_questions->get_question_by_id($this_qn);

                                if (!empty($q_info)) {
                                    $qn_id = urlencode($this->mod_crypt->Enc_String($this_qn));

                                    if ($this->mod_crypt->Dec_String($q_info->Qn_Pay) == 'pay_free' ) {
                                        $pays = '<span class="badge badge-soft-success rounded-pill">Free</span>';
                                    }else {
                                        $pays = '<span class="badge badge-soft-info rounded-pill">Pro</span>';
                                    }

                                    $posted = '
                                        <div class="col-md-12 h-100">
                                            <div class="border-dashed-bottom my-1"></div>
                                            <div class="d-flex btn-reveal-trigger">
                                                <div class="calendar">
                                                    <span class="calendar-month">'.date('M', $q_info->Qn_Created).'</span><span class="calendar-day">'.date('d', $q_info->Qn_Created).'
                                                    </span>
                                                </div>
                                                <div class="flex-1 position-relative ps-3">
                                                    <h6 class="fs-0 mb-0">
                                                        <a href="'.base_url('admin/questions/view/'.$qn_id).'">'.$this->security->xss_clean(ucfirst($this->mod_crypt->Dec_String($q_info->Qn_Name))).'</a>
                                                    </h6>
                                                    Tags: '.$this->security->xss_clean($this->mod_crypt->Dec_String($q_info->Qn_Tags)).'
                                                    <br>
                                                    Level: '.$this->security->xss_clean($this->mod_crypt->Dec_String($q_info->Qn_Level)).'
                                                    <br>
                                                    Pay: '.$pays.'
                                                </div>
                                            </div>
                                            <div class="border-dashed-bottom my-3"></div>
                                        </div>
                                    ';
                                    echo $posted;
                                }

                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-header bg-light d-flex justify-content-between">
                    <h5 class="mb-0">User info</h5>
                </div>
                <div class="card-body fs--1 p-0">
                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none">
                                    <span class="text-primary fas fa-tag"></span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                            	<strong>Name</strong>
                            </p>
                            <span class="notification-time"><?php echo $this->mod_crypt->Dec_String($user_info->Name); ?></span>
                        </div>
                    </a>
                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none">
                                    <span class="text-primary fas fa-phone-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                            	<strong>Mobile Phone</strong>
                            </p>
                            <span class="notification-time"><?php echo $this->mod_crypt->Dec_String($user_info->Phone); ?></span>
                        </div>
                    </a>
                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none">
                                    <span class="text-primary fas fa-tag"></span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                            	<strong>Privilege</strong>
                            </p>
                            <span class="notification-time"><?php echo ($user_info->Privilege); ?></span>
                        </div>
                    </a>
                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none">
                                    <span class="text-primary fas fa-info"></span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                            	<strong>Bio and Description</strong>
                            </p>
                            <span class="notification-time"><?php echo $this->mod_crypt->Dec_String($user_info->Bio); ?></span>
                        </div>
                    </a>
                    <a class="notification border-x-0 border-bottom-0 border-300 rounded-top-0" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none">
                                    <span class="text-primary far fa-calendar-check"></span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                                <strong>Joined Platform</strong>
                            </p>
                            <span class="notification-time"><?php echo date('F d H:i A', $user_info->Timestamp) ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="message_pop" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
            <div class="modal-content position-relative">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="p-4 pb-0">
                    <form>
                        <div class="mb-3">
                            <label class="col-form-label" for="message_note">Message:</label>
                            <textarea class="form-control" id="message_note" name="message_note" rows="6"></textarea>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button" id="send_msg">Send Message </button>
                </div>
            </div>
        </div>
    </div>

