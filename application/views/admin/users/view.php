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
                        <th>
                            <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select='{"body":"table-orders-body","actions":"orders-bulk-actions","replacedElement":"orders-actions"}' /></div>
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="order">Name</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="date">Created</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address" style="min-width: 12.5rem;">Bio</th>
                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="status">Status</th>
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
                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                    </span>';
                            }
                            $p_id = urlencode($this->mod_crypt->Enc_String($users['Person_ID']));

                            echo '
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" id="checkbox-0" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <td class="order py-2 align-middle white-space-nowrap">
                                    <strong>'.$this->mod_crypt->Dec_String($users["Name"]).'</strong><br />
                                    <a href="'.base_url('admin/users/details/'.$p_id).'">'.$this->mod_crypt->Dec_String($users["Email"]).'</a>
                                </td>
                                <td class="date py-2 align-middle">'.date("F d Y H:i A", $users["Timestamp"]).'</td>
                                <td class="address py-2 align-middle white-space-nowrap">
                                    '.$this->mod_crypt->Dec_String($users["Email"]).'
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