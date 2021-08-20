
        <body>
            <!-- ===============================================-->
            <!--    Main Content-->
            <!-- ===============================================-->
            <main class="main" id="top">
                <div class="container" data-layout="container">
                    <script>
                        var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                        if (isFluid) {
                            var container = document.querySelector('[data-layout]');
                            container.classList.remove('container');
                            container.classList.add('container-fluid');
                        }else{
                            var container = document.querySelector('[data-layout]');
                            container.classList.remove('container');
                            container.classList.add('container-fluid');
                        }
                    </script>
                    <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                        <div class="d-flex align-items-center">
                            <div class="toggle-icon-wrapper">
                                <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation">   <span class="navbar-toggle-icon">
                                    <span class="toggle-line"></span>
                                </span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="#">
                                <div class="d-flex align-items-center py-3">
                                    <img class="me-2" src="<?php echo base_url('assets/img/icons/spot-illustrations/logo.png'); ?>" alt="" width="40" />
                                    <span class="font-sans-serif">Tafuta Sasa</span>
                                </div>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                            <div class="navbar-vertical-content scrollbar">
                                <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">App</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'home') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/home').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/home').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-icon"><span class="fas fa-tachometer-alt"></span></span>
                                                <span class="nav-link-text ps-1">Dashboard</span>
                                            </div>
                                        </a>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'calendar') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/calendar').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/calendar').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-icon"><span class="far fa-calendar-alt"></span></span>
                                                <span class="nav-link-text ps-1">Calendar</span>
                                            </div>
                                        </a>
                                        <!-- parent pages-->
                                    </li>
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">Questions</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'questions') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/questions').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/questions').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-icon"><span class="fas fa-question"></span></span>
                                                <span class="nav-link-text ps-1">View</span>
                                            </div>
                                        </a>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'questions_add') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/questions/add').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/questions/add').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-icon"><span class="fas fa-plus"></span></span>
                                                <span class="nav-link-text ps-1">Add</span>
                                            </div>
                                        </a>
                                        <!-- parent pages-->
                                    </li>
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">Messages</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'chat') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/chat').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/chat').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-comments"></span></span><span class="nav-link-text ps-1">Instant Chat</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'mails') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/mails').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/mails').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-icon"><span class="far fa-envelope"></span></span>
                                                <span class="nav-link-text ps-1">Messages</span>
                                            </div>
                                        </a>
                                        <!-- parent pages-->
                                    </li>
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">Analytics</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'sales') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/sales').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/sales').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-icon"><span class="fas fa-chart-line"></span></span>
                                                <span class="nav-link-text ps-1">Sales</span>
                                            </div>
                                        </a>
                                        <!-- parent pages-->
                                    </li>
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">Users</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'users') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/users').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/users').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-icon"><span class="fas fa-users"></span></span>
                                                <span class="nav-link-text ps-1">Users</span>
                                            </div>
                                        </a>
                                        <!-- parent pages-->
                                        <?php
                                            if ($pg_name == 'invite') {
                                                echo '<a class="nav-link active" href="'.base_url('admin/users/invite').'" role="button">';
                                            }
                                            else{
                                                echo '<a class="nav-link" href="'.base_url('admin/users/invite').'" role="button">';
                                            }
                                        ?>
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-icon"><span class="fas fa-user-plus"></span></span>
                                                <span class="nav-link-text ps-1">Invite People</span>
                                            </div>
                                        </a>
                                        <!-- parent pages-->
                                    </li >
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
                        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="navbar-toggle-icon">
                                <span class="toggle-line"></span>
                            </span>
                        </button>
                        <a class="navbar-brand me-1 me-sm-3" href="#">
                            <div class="d-flex align-items-center">
                                <img class="me-2" src="<?php echo base_url('assets/img/icons/spot-illustrations/logo.png'); ?>" alt="" width="40" />
                                <span class="font-sans-serif">Tafuta Sasa</span>
                            </div>
                        </a>
                    </nav>
                    <div class="content">
                        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                                <span class="navbar-toggle-icon">
                                    <span class="toggle-line"></span>
                                </span>
                            </button>
                            <a class="navbar-brand me-1 me-sm-3" href="#">
                                <div class="d-flex align-items-center">
                                    <img class="me-2" src="<?php echo base_url('assets/img/icons/spot-illustrations/logo.png'); ?>" alt="" width="40" />
                                    <span class="font-sans-serif">Tafuta Sasa</span>
                                </div>
                            </a>
                            <ul class="navbar-nav align-items-center d-none d-lg-block">
                                <li class="nav-item">
                                </li>
                            </ul>
                            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                                        <div class="card card-notification shadow-none">
                                            <div class="card-header">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">
                                                        <h6 class="card-header-title mb-0">Notifications</h6>
                                                    </div>
                                                    <div class="col-auto ps-0 ps-sm-3">
                                                        <a class="card-link fw-normal" href="#">Mark all as read</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scrollbar-overlay" style="max-height:10rem">
                                                <div class="list-group list-group-flush fw-normal fs--1">
                                                    <div class="list-group-title border-bottom">NEW</div>
                                                    <div class="list-group-item">
                                                        <a class="border-bottom-0 notification-unread  notification notification-flush" href="#">
                                                            <div class="notification-avatar">
                                                                <div class="avatar avatar-xl me-3">
                                                                    <img class="rounded-circle" src="<?php echo base_url('assets/img/logos/oxford.png'); ?>" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="notification-body">
                                                                <p class="mb-1">
                                                                    <strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"
                                                                </p>
                                                                <span class="notification-time">
                                                                    <span class="me-2" role="img" aria-label="Emoji">✌️</span>1w
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center border-top">
                                                <a class="card-link d-block" href="#">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="avatar avatar-xl">
                                            <img class="rounded-circle" src="#" alt="" />
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                                        <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                            <a class="dropdown-item" href="<?php echo base_url('admin/settings')?>">Setting</a>
                                            <a class="dropdown-item" href="<?php echo base_url('admin/account')?>">Account</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <script>
                            var navbarPosition = localStorage.getItem('navbarPosition');
                            var navbarVertical = document.querySelector('.navbar-vertical');
                            var navbarTopVertical = document.querySelector('.content .navbar-top');
                            var navbarTop = document.querySelector('[data-layout] .navbar-top');

                            navbarVertical.removeAttribute('style');
                            navbarTopVertical.removeAttribute('style');
                            navbarTop.remove(navbarTop);
                        </script>
                        