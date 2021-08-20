<div class="row mb-3">
    <div class="col">
        <div class="card bg-100 shadow-none border">
            <div class="row gx-0 flex-between-center">
                <div class="col-sm-auto d-flex align-items-center">
                    <img class="ms-n2" src="../assets/img/illustrations/crm-bar-chart.png" alt="" width="90" />
                    <div>
                        <h4 class="text-primary fw-bold mb-0">Tafuta Sasa <span class="text-info fw-medium">CRM</span></h4>
                    </div>
                    <img class="ms-n4 d-md-none d-lg-block" src="../assets/img/illustrations/crm-line-chart.png" alt="" width="150" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-3 g-3">

    <div class="col-12">
        <div class="card bg-transparent-50 overflow-hidden">
            <div class="card-header position-relative">
                <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;"></div>
                <!--/.bg-holder-->
                <div class="position-relative z-index-2">
                    <div>
                        <h3 class="text-primary mb-1">Welcome back, <?php echo $this->mod_crypt->Dec_String($this->session->userdata('log_name')); ?>!</h3>
                        <p>Here’s what happening with your web platform today </p>
                    </div>

                    <?php
                    $pro = 0; $free = 0;
                        foreach ($list_answers_all as $answer) {
                            if ($answer['Qn_Pay'] == $this->mod_crypt->Enc_String('pay_free')) {
                                $free++;
                            }else{
                                $pro++;
                            }
                        }
                    ?>

                    <div class="card-body py-3">
                        <div class="row g-0">
                            <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                                <h6 class="pb-1 text-700">All users </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2"><?php echo count($list_users_all ); ?> </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">Admin Users not included </h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-end pb-4 ps-3">
                                <h6 class="pb-1 text-700">All Answers </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2"><?php echo count($list_answers_all ); ?> </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">Includes Pro and Free answers </h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 border-200 border-bottom border-end border-md-end-0 pb-4 pt-4 pt-md-0 ps-md-3">
                                <h6 class="pb-1 text-700">Free Answers </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2"><?php echo $free; ?></p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">Only Free answers </h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-bottom-0 border-md-end pt-4 pb-md-0 ps-3 ps-md-0">
                                <h6 class="pb-1 text-700">Pro Answers</h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2"><?php echo $pro; ?> </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">Answer available for sale </h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 border-200 border-md-bottom-0 border-end pt-4 pb-md-0 ps-md-3">
                                <h6 class="pb-1 text-700">All Sales </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">$365.53 </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                                    <h6 class="fs--2 ps-3 mb-0 text-success">
                                        <span class="me-1 fas fa-caret-up"></span>21.8%
                                    </h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
                                <h6 class="pb-1 text-700">Profits </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">861 </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                                    <h6 class="fs--2 ps-3 mb-0 text-info">
                                        <span class="me-1 fas fa-caret-up"></span>21.8%
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex py-3">
                        <div class="pe-3">
                            <p class="text-600 fs--1 fw-medium">Today's visit </p>
                            <h4 class="text-800 mb-0">14,209</h4>
                        </div>
                        <div class="ps-3">
                            <p class="text-600 fs--1">Today’s total sales </p>
                            <h4 class="text-800 mb-0">$21,349.29 </h4>
                        </div>
                        <div class="ps-3">
                            <p class="text-600 fs--1">Today’s viewed answers </p>
                            <h4 class="text-800 mb-0">$21,349.29 </h4>
                        </div>
                        <div class="ps-3">
                            <p class="text-600 fs--1">Today’s searched answers </p>
                            <h4 class="text-800 mb-0"><?php echo count($list_searches ); ?> </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="mb-0 list-unstyled">
                    <li class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
                        <div class="row flex-between-center">
                            <div class="col">
                                <div class="d-flex">
                                    <div class="fas fa-circle mt-1 fs--2"></div>
                                    <p class="fs--1 ps-2 mb-0"><strong>5 Answers</strong> didn’t publish to your</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a class="alert-link fs--1 fw-medium" href="#">
                                    View products
                                    <i class="fas fa-chevron-right ms-1 fs--2"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                        <div class="row flex-between-center">
                            <div class="col">
                                <div class="d-flex">
                                    <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                    <p class="fs--1 ps-2 mb-0"><strong>7 orders</strong> have payments that need to be captured</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a class="alert-link fs--1 fw-medium" href="#">
                                    View payments
                                    <i class="fas fa-chevron-right ms-1 fs--2"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                        <div class="row flex-between-center">
                            <div class="col">
                                <div class="d-flex">
                                    <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                    <p class="fs--1 ps-2 mb-0"><strong>50+ orders</strong> need to be fulfilled</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <a class="alert-link fs--1 fw-medium" href="#">
                                    View orders
                                    <i class="fas fa-chevron-right ms-1 fs--2"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-xxl-12">
        <div class="card">
            <div class="card-header d-flex flex-between-center py-2 border-bottom">
                <h6 class="mb-0">Most recent actions</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <div class="row align-items-center">
                    <div class="col-md-12 col-xxl-12 mb-xxl-1">
                        <ul class="nav nav-pills" id="pill-myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pill-home-tab" data-bs-toggle="tab" href="#tab_last_10_purchases" role="tab" aria-controls="tab_last_10_purchases" aria-selected="true">Last 10 answers purchased</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pill-profile-tab" data-bs-toggle="tab" href="#tab_last_10_viewed" role="tab" aria-controls="tab_last_10_viewed" aria-selected="false">Last 10 Viewed Questions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pill-contact-tab" data-bs-toggle="tab" href="#tab_last_10_searches" role="tab" aria-controls="tab_last_10_searches" aria-selected="false">Last 10 searches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pill-contact-tab" data-bs-toggle="tab" href="#tab_last_10_new_users" role="tab" aria-controls="tab_last_10_new_users" aria-selected="false">New Signed in Users</a>
                            </li>
                        </ul>
                        <div class="tab-content border p-3 mt-3" id="pill-myTabContent">
                            <div class="tab-pane fade show active" id="tab_last_10_purchases" role="tabpanel" aria-labelledby="home-tab">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.</div>
                            <div class="tab-pane fade" id="tab_last_10_viewed" role="tabpanel" aria-labelledby="profile-tab">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="order">Source</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="date">Viewed</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address" style="min-width: 12.5rem;">Question</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-orders-body">
                    <?php
                        foreach ($list_answers_viewed as $viewed) {
                            $qn = $this->mod_questions->get_question_by_id($viewed["View_Question"]);
                            $qn_nm = $this->mod_crypt->Dec_String($qn->Qn_Name);
                            echo '
                            <tr class="btn-reveal-trigger">
                                <td class="order py-2 align-middle white-space-nowrap">
                                    <strong>'.($viewed["View_Source"]).'</strong><br />
                                </td>
                                <td class="date py-2 align-middle">'.date("F d Y H:i A", $viewed["View_Time"]).'</td>
                                <td class="address py-2 align-middle white-space-nowrap">
                                    '.$qn_nm.'
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
                            </div>
                            <div class="tab-pane fade" id="tab_last_10_searches" role="tabpanel" aria-labelledby="contact-tab">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="order">Source</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="date">Created</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address" style="min-width: 12.5rem;">Question</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-orders-body">
                    <?php
                        foreach ($list_searches as $searches) {
                            echo '
                            <tr class="btn-reveal-trigger">
                                <td class="order py-2 align-middle white-space-nowrap">
                                    <strong>'.($searches["Search_Ip"]).'</strong><br />
                                </td>
                                <td class="date py-2 align-middle">'.date("F d Y H:i A", $searches["Search_Time"]).'</td>
                                <td class="address py-2 align-middle white-space-nowrap">
                                    '.$this->security->xss_clean($this->mod_crypt->Dec_String($searches["Search_Query"])).'
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
                            </div>
                            <div class="tab-pane fade" id="tab_last_10_new_users" role="tabpanel" aria-labelledby="contact-tab">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="order">Name</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="date">Created</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address" style="min-width: 12.5rem;">Bio</th>
                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="status">Status</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-orders-body">
                    <?php
                        foreach ($list_users as $users) {
                            if ($users['Status'] == "" || $users['Status'] == "00" ) {
                                $activated = '
                                    <span class="badge badge rounded-pill d-block badge-soft-danger">Inactive
                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                    </span>';
                            }else{
                                $activated = '
                                    <span class="badge badge rounded-pill d-block badge-soft-success">Active
                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                    </span>';
                            }
                            $p_id = urlencode($this->mod_crypt->Enc_String($users['Person_ID']));

                            echo '
                            <tr class="btn-reveal-trigger">
                                <td class="order py-2 align-middle white-space-nowrap">
                                    <strong>'.$this->security->xss_clean($this->mod_crypt->Dec_String($users["Name"])).'</strong><br />
                                    <a href="'.base_url('admin/users/details/'.$p_id).'">'.$this->security->xss_clean($this->mod_crypt->Dec_String($users["Email"])).'</a>
                                </td>
                                <td class="date py-2 align-middle">'.date("F d Y H:i A", $users["Timestamp"]).'</td>
                                <td class="address py-2 align-middle white-space-nowrap">
                                    '.$this->security->xss_clean($this->mod_crypt->Dec_String($users["Email"])).'
                                </td>
                                <td class="status py-2 align-middle text-center fs-0 white-space-nowrap">
                                    '.$activated.'
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
