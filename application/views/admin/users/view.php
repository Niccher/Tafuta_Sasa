<div class="card mb-3" id="ordersTable" data-list='{"valueNames":["order","date","address","status","amount"],"page":10,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Users</h5>
            </div>
            <div class="col-8 col-sm-auto ms-auto text-end ps-0">
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="order">Name</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="date">Created</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address" style="min-width: 12.5rem;">Bio</th>
                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="status">Status</th>
                        <th class="text-end" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-orders-body">
                    <?php
                        foreach ($users_list as $users) {
                            if ($users['Status'] == "" || $users['Status'] == "00" ) {
                                $activated = '
                                    <span class="badge badge rounded-pill d-block badge-soft-danger">Inactive
                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                    </span>';
                            }else{
                                $activated = '
                                    <span class="badge badge rounded-pill d-block badge-soft-success">Active
                                        <span class="ms-1 fas fa-check"  data-fa-transform="shrink-2"></span>
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
                                <td class="status py-2 align-middle text-end fs-0 white-space-nowrap">
                                    <div>
                                        <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="View User Info">
                                            <span class="text-500 fas far fa-eye"></span>
                                        </button>
                                        <button class="btn p-0 ms-2 show_msgbox" type="button" data-bs-placement="top" title="Send Message" name="'.$p_id.'" id="'.$p_id.'">
                                            <span class="text-500 far fa-envelope"></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<div class="modal fade" id="pop_msg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Send message </h4>
                </div>
                <div class="p-4 pb-0">
                    <form>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Message:</label>
                            <textarea class="form-control" id="pop_message_box"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary admin_send_txt" id="admin_send_txt" name="admin_send_txt" type="button">Send</button>
            </div>
        </div>
    </div>
</div>


    <div class="card-footer">
        <div class="d-flex align-items-center justify-content-center">
            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev">
                <span class="fas fa-chevron-left"></span>
            </button>
            <ul class="pagination mb-0"></ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next">
                <span class="fas fa-chevron-right"></span>
            </button>
        </div>
    </div>
</div>