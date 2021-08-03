<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>Tafuta Sasa</title>
        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/img/favicons/apple-touch-icon.png'); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/img/favicons/favicon-32x32.png'); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/favicons/favicon-16x16.png'); ?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicons/favicon.ico'); ?>">
        <link rel="manifest" href="<?php echo base_url('assets/img/favicons/manifest.json'); ?>">
        <meta name="msapplication-TileImage" content="<?php echo  base_url('assets/img/favicons/mstile-150x150.png'); ?>">
        <meta name="theme-color" content="#ffffff">
        <script src="<?php echo base_url('assets/js/config.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/overlayscrollbars/OverlayScrollbars.min.js'); ?>"></script>
        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="<?php echo  base_url('assets/plugins/prism/prism-okaidia.css'); ?>" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
        <link href="<?php echo  base_url('assets/plugins/overlayscrollbars/OverlayScrollbars.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/theme-rtl.min.css'); ?>" rel="stylesheet" id="style-rtl">
        <link href="<?php echo base_url('assets/css/theme.min.css'); ?>" rel="stylesheet" id="style-default">
        <link href="<?php echo base_url('assets/css/user-rtl.min.css'); ?>" rel="stylesheet" id="user-style-rtl">
        <link href="<?php echo base_url('assets/css/user.min.css'); ?>" rel="stylesheet" id="user-style-default">
        <script>
            var isRTL = JSON.parse(localStorage.getItem('isRTL'));
            if (isRTL) {
              var linkDefault = document.getElementById('style-default');
              var userLinkDefault = document.getElementById('user-style-default');
              linkDefault.setAttribute('disabled', true);
              userLinkDefault.setAttribute('disabled', true);
              document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
              var linkRTL = document.getElementById('style-rtl');
              var userLinkRTL = document.getElementById('user-style-rtl');
              linkRTL.setAttribute('disabled', true);
              userLinkRTL.setAttribute('disabled', true);
            }
        </script>
    </head>
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
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="../app/chat.html" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="../app/kanban.html" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
                                    </a>
                                    <!-- parent pages-->
                                </li>
                                <li class="nav-item">
                                    <!-- label-->
                                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                        <div class="col-auto navbar-vertical-label">Pages</div>
                                        <div class="col ps-0">
                                            <hr class="mb-0 navbar-vertical-divider" />
                                        </div>
                                    </div>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="../pages/starter.html" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span></div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="../pages/landing.html" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span></div>
                                    </a>
                                    <!-- parent pages-->
                                </li>
                                <li class="nav-item">
                                    <!-- label-->
                                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                        <div class="col-auto navbar-vertical-label">Modules</div>
                                        <div class="col ps-0">
                                            <hr class="mb-0 navbar-vertical-divider" />
                                        </div>
                                    </div>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="../widgets.html" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">Widgets</span></div>
                                    </a>
                                    <!-- parent pages-->
                                </li>
                                <li class="nav-item">
                                    <!-- label-->
                                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                        <div class="col-auto navbar-vertical-label">Documentation</div>
                                        <div class="col ps-0">
                                            <hr class="mb-0 navbar-vertical-divider" />
                                        </div>
                                    </div>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="gulp.html" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gulp"></span></span><span class="nav-link-text ps-1">Gulp</span></div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link active" href="design-file.html" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Design file</span></div>
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
                    <div class="card mb-3">
                        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-4.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3>Design File</h3>
                                    <p class="mb-1 mt-2">We have designed Falcon initially directly with code. After receiving multiple requests from our customers for design files, we recreated the design in Figma.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p>This is an early demo of Figma files. All the design is not yet recreated with Figma. But hopefully, we will port all the layouts in the next couple of weeks.</p>
                            <h5 data-anchor="data-anchor">To play with the design:</h5>
                            <ul>
                                <li> <a href="https://www.figma.com/" target="_blank">Download Figma</a></li>
                                <li>Open the Figma link from the <code>README.md</code></li>
                                <li>The file is "read-only", so you'll have to duplicate it! Go to your grid of documents in Figma, click the ellipsis icon on <b class="text-primary text-600">Falcon (Distributed)</b>, and then "Duplicate" to create an editable version.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <footer class="footer">
                        <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com">Themewagon</a></p>
                            </div>
                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-600">v3.2.0</p>
                            </div>
                        </div>
                    </footer>
                </div>

            </div>
        </main>

        <script src="<?php echo base_url('assets/plugins/popper/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/anchorjs/anchor.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/is/is.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/prism/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/fontawesome/all.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/lodash/lodash.min.js'); ?>"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/list.js/list.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
    </body>
</html>

































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
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../app/chat.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../app/kanban.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
                                        </a>
                                        <!-- parent pages-->
                                    </li>
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">Pages</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../pages/starter.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../pages/landing.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span></div>
                                        </a>
                                        <!-- parent pages-->
                                    </li>
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">Modules</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="../widgets.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">Widgets</span></div>
                                        </a>
                                        <!-- parent pages-->
                                    </li>
                                    <li class="nav-item">
                                        <!-- label-->
                                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                            <div class="col-auto navbar-vertical-label">Documentation</div>
                                            <div class="col ps-0">
                                                <hr class="mb-0 navbar-vertical-divider" />
                                            </div>
                                        </div>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="getting-started.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Getting started</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link" href="gulp.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gulp"></span></span><span class="nav-link-text ps-1">Gulp</span></div>
                                        </a>
                                        <!-- parent pages-->
                                        <a class="nav-link active" href="design-file.html" role="button">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Design file</span></div>
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
                    <div class="content">
                        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                            <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                                <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
                            </a>
                            <ul class="navbar-nav align-items-center d-none d-lg-block">
                                <li class="nav-item">
                                    <div class="search-box" data-list='{"valueNames":["title"]}'>
                                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                                            <span class="fas fa-search search-box-icon"></span>
                                        </form>
                                        <button class="btn-close position-absolute end-0 top-50 translate-middle shadow-none p-1 me-1 fs--2" type="button" data-bs-dismiss="search"></button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                                <li class="nav-item">
                                    <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
                                </li>
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
                                            <div class="scrollbar-overlay" style="max-height:19rem">
                                                <div class="list-group list-group-flush fw-normal fs--1">
                                                    <div class="list-group-item">
                                                        <a class="notification notification-flush" href="design-file.html#!">
                                                            <div class="notification-avatar">
                                                                <div class="avatar avatar-2xl me-3">
                                                                    <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="notification-body">
                                                                <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                            </div>
                                                        </a>
                                                    </div>
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
                        