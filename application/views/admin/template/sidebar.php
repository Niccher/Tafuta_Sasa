
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
                        }
                    </script>
                    <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                        <script>
                            var navbarStyle = localStorage.getItem("navbarStyle");
                            if (navbarStyle && navbarStyle !== 'transparent') {
                            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                            }
                        </script>
                        <div class="d-flex align-items-center">
                            <div class="toggle-icon-wrapper">
                                <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                            </div>
                            <a class="navbar-brand" href="../index.html">
                                <div class="d-flex align-items-center py-3"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
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
                                        <a class="nav-link" href="../app/calendar.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tachometer-alt"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../app/chat.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
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
                                        <a class="nav-link" href="../pages/starter.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question"></span></span><span class="nav-link-text ps-1">View</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../pages/landing.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plus"></span></span><span class="nav-link-text ps-1">Add</span></div>
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
                                        <a class="nav-link" href="../pages/starter.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-comments"></span></span><span class="nav-link-text ps-1">Instant Chat</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../pages/landing.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-envelope"></span></span><span class="nav-link-text ps-1">Messages</span></div>
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
                                        <a class="nav-link" href="../widgets.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Sales</span></div>
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
                                        <a class="nav-link" href="../pages/starter.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-users"></span></span><span class="nav-link-text ps-1">Users</span></div>
                                        </a>
                                        <!-- parent pages-->
                                    </li>
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">Misc</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="getting-started.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-plus"></span></span><span class="nav-link-text ps-1">Invite People</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="gulp.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-info-circle"></span></span><span class="nav-link-text ps-1">Privacy Policy</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link active" href="design-file.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">FAQ</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../changelog.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Changelog</span></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
                        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                            <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
                        </a>
                    </nav>
                    <div class="content">
                        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                            <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                                <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
                            </a>
                            <ul class="navbar-nav align-items-center d-none d-lg-block">
                                <li class="nav-item">
                                </li>
                            </ul>
                            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="design-file.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                                        <div class="card card-notification shadow-none">
                                            <div class="card-header">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">
                                                        <h6 class="card-header-title mb-0">Notifications</h6>
                                                    </div>
                                                    <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="design-file.html#">Mark all as read</a></div>
                                                </div>
                                            </div>
                                            <div class="scrollbar-overlay" style="max-height:10rem">
                                                <div class="list-group list-group-flush fw-normal fs--1">
                                                    <div class="list-group-title border-bottom">NEW</div>
                                                    <div class="list-group-item">
                                                        <a class="border-bottom-0 notification-unread  notification notification-flush" href="design-file.html#!">
                                                            <div class="notification-avatar">
                                                                <div class="avatar avatar-xl me-3">
                                                                    <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="notification-body">
                                                                <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                                                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center border-top"><a class="card-link d-block" href="../app/social/notifications.html">View all</a></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link pe-0" id="navbarDropdownUser" href="design-file.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="avatar avatar-xl">
                                            <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                                        <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                            <a class="dropdown-item fw-bold text-warning" href="design-file.html#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="design-file.html#!">Set status</a>
                                            <a class="dropdown-item" href="../pages/user/profile.html">Profile &amp; account</a>
                                            <a class="dropdown-item" href="design-file.html#!">Feedback</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../pages/user/settings.html">Settings</a>
                                            <a class="dropdown-item" href="../pages/authentication/card/logout.html">Logout</a>
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
                            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
                            if (navbarPosition === 'top') {
                            navbarTop.removeAttribute('style');
                            navbarTopVertical.remove(navbarTopVertical);
                            navbarVertical.remove(navbarVertical);
                            navbarTopCombo.remove(navbarTopCombo);
                            } else if (navbarPosition === 'combo') {
                            navbarVertical.removeAttribute('style');
                            navbarTopCombo.removeAttribute('style');
                            navbarTop.remove(navbarTop);
                            navbarTopVertical.remove(navbarTopVertical);
                            } else {
                            navbarVertical.removeAttribute('style');
                            navbarTopVertical.removeAttribute('style');
                            navbarTop.remove(navbarTop);
                            navbarTopCombo.remove(navbarTopCombo);
                            }
                        </script>
                        