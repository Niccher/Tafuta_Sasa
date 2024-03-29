
<div class="row mb-3 g-3">

    <div class="col-12">
        <div class="card bg-transparent-50 overflow-hidden">
            <div class="card-header position-relative">
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
                                <p class="font-sans-serif lh-1 mb-1 fs-2">$0 </p>
                            </div>
                            <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
                                <h6 class="pb-1 text-700">Profits </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">0 </p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex py-3">
                        <div class="pe-3">
                            <p class="text-600 fs--1 fw-medium">Today's visit </p>
                            <h4 class="text-800 mb-0">0</h4>
                        </div>
                        <div class="ps-3">
                            <p class="text-600 fs--1">Today’s total sales </p>
                            <h4 class="text-800 mb-0">$0 </h4>
                        </div>
                        <div class="ps-3">
                            <p class="text-600 fs--1">Today’s viewed answers </p>
                            <h4 class="text-800 mb-0">$0 </h4>
                        </div>
                        <div class="ps-3">
                            <p class="text-600 fs--1">Today’s searched answers </p>
                            <h4 class="text-800 mb-0"><?php echo count($list_searches ); ?> </h4>
                        </div>
                    </div>
                </div>
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
                            <li class="nav-item active">
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

                            <div class="tab-pane fade show active" id="tab_last_10_viewed" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="table-responsive scrollbar">
                                    <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden tbl_last_ten">
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
                                                    $qn_nm = strip_tags($this->mod_crypt->Dec_String($qn->Qn_Name));
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
