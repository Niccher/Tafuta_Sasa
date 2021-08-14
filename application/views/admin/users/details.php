    <div class="card mb-3">
        <div class="card-body">

            <div class="row">
                <div class="col-lg-2">
                    <div class="avatar" style="width: 60px; height: 60px;">
                        <img class="rounded-circle" src="../../assets/img/team/2.jpg" />
                    </div>
                </div>
                <div class="col-lg-5">
                    <h4 class="mb-1"> <?php echo $this->mod_crypt->Dec_String($user_info->Name); ?>
                        <span data-bs-toggle="tooltip" data-bs-placement="right" title="Verified">
                            <small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small>
                        </span>
                    </h4>
                    <p class="text-500">Location: Unknown</p>
                    <a href="<?php echo base_url('admin/mails'); ?>">
                        <button class="btn btn-falcon-primary btn-sm px-3" type="button">Message</button>
                    </a>
                    <div class="border-dashed-bottom my-4 d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Intro</h5>
                </div>
                <div class="card-body text-justify">
                    <p class="mb-0 text-1000"><?php echo $this->mod_crypt->Dec_String($user_info->Bio); ?>.</p>
                </div>
                <div class="card-footer bg-light p-0 border-top"></div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-light d-flex justify-content-between">
                    <h5 class="mb-0">Activity log</h5>
                    <a class="font-sans-serif" href="#">All logs</a>
                </div>
                <div class="card-body fs--1 p-0">
                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-emoji rounded-circle ">
                                	<span role="img" aria-label="Emoji">🎁</span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                            	<strong>Question One</strong> viewed <strong>2 Times</strong>
                            </p>
                            <span class="notification-time">November 13, 5:00 Am</span>
                        </div>
                    </a>
                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-emoji rounded-circle ">
                                	<span role="img" aria-label="Emoji">🏷️</span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                            	<strong>Question Twenty</strong> viewed <strong> 2 Times </strong>
                            </p>
                            <span class="notification-time">November 8, 5:00 PM</span>
                        </div>
                    </a>
                    <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-emoji rounded-circle ">
                                	<span role="img" aria-label="Emoji">📋️</span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                            	<strong>Question Nine</strong> purchased <strong>2 Times</strong> 
                            </p>
                            <span class="notification-time">November 01, 11:30 AM</span>
                        </div>
                    </a>
                    <a class="notification border-x-0 border-bottom-0 border-300 rounded-top-0" href="#">
                        <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-emoji rounded-circle ">
                                	<span role="img" aria-label="Emoji">📅️</span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-body">
                            <p class="mb-1">
                            	<strong>Question Four</strong> purchased <strong>2 Times</strong> to an event
                            </p>
                            <span class="notification-time">October 28, 12:00 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Question Viewed</h5>
                    </div>
                    <div class="card-body fs--1">
                        <div class="d-flex btn-reveal-trigger">
                            <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
                            <div class="flex-1 position-relative ps-3">
                                <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">Newmarket Nights</a></h6>
                                <p class="mb-1">Organized by <a href="profile.html#!" class="text-700">University of Oxford</a></p>
                                <p class="text-1000 mb-0">Time: 6:00AM</p>
                                <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>
                                Place: Cambridge Boat Club, Cambridge
                                <div class="border-dashed-bottom my-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>