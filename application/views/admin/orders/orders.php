<link href="<?php echo  base_url('assets/plugins/datatables/datatables.css'); ?>" rel="stylesheet">

<div class="row">
    <div class="col-lg-12 col-xl-12 h-100">
        <div class="card theme-wizard mb-5">
            <div class="card-header bg-light pt-3 pb-2">
                <ul class="nav nav-pills mb-3" role="tablist" id="pill-tab1">
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link active" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_all" type="button" role="tab" aria-controls="tab_orders_all" aria-selected="true">
                    		<span class="fas fa-list me-2" data-fa-transform="shrink-2"></span>
                    		<span class="d-none d-md-inline-block fs--1">All</span>
                    	</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_paid" type="button" role="tab" aria-controls="tab_orders_paid" aria-selected="false">
                    		<span class="fas fa-lock-open me-2" data-fa-transform="shrink-2"></span>
                    		<span class="d-none d-md-inline-block fs--1">Paid</span>
                    	</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_unpaid" type="button" role="tab" aria-controls="tab_orders_unpaid" aria-selected="false">
                    		<span class="fas fa-lock me-2" data-fa-transform="shrink-2"></span>
                    		<span class="d-none d-md-inline-block fs--1">Unpaid</span>
                    	</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_pending" type="button" role="tab" aria-controls="tab_orders_pending" aria-selected="false">
                    		<span class="fa fa-refresh me-2" data-fa-transform="down-2 shrink-2"></span>
                    		<span class="d-none d-md-inline-block fs--1">Pending</span>
                    	</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_completed" type="button" role="tab" aria-controls="tab_orders_completed" aria-selected="false">
                    		<span class="far fa-check-circle me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Completed</span>
                    	</button>
                    </li>
                </ul>
            </div>
            <div class="card-body py-4">
                <div class="tab-content">
                    <div class="tab-pane active " role="tabpanel" aria-labelledby="tab_orders_all" id="tab_orders_all">
                        <form novalidate="novalidate">
                            <div class="table-responsive scrollbar">
                                <table class="table table-hover table-striped overflow-hidden table_clean">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Paid</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                            foreach ($client_orders as $orders) {
                                                $name = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Name'])), 30);
                                                $desc = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Body'])), 45);
                                                $stop = $this->mod_crypt->Dec_String($orders['Ord_Deadline']);
                                                $start = date('M d H:i:s', $orders['Ord_Created']);
                                                $order_id = urlencode($this->mod_crypt->Enc_String($orders['Ord_Id']));


                                                if ($orders['Ord_Pay'] == '00') {
                                                    $paid = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Unpaid
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }else{
                                                    $paid = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-success">Paid
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }

                                                if ($orders['Ord_Status'] == '00') {
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending
                                                        <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }else if ($orders['Ord_Status'] == '11') {
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-danger">Submitted
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                } else{
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-success">Finished
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }


                                                echo '
                                                    <tr class="align-middle">
                                                        <td class="text-nowrap">
                                                            <a href="'.base_url("admin/orders/view/".$order_id).'">
                                                                <div class="d-flex">
                                                                    <div class="ms-2">'.$this->security->xss_clean(ucfirst(word_limiter(strip_tags($name), 10))).'</div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="text-nowrap">'.$this->security->xss_clean(ucfirst(word_limiter(strip_tags($desc), 10))).'</td>
                                                        <td class="text-nowrap">Created '.$start.'<br>Due '.$stop.'</td>
                                                        <td>'.$paid.'</td>
                                                        <td>'.$status.'</td>
                                                    </tr>
                                                ';
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane " role="tabpanel" aria-labelledby="tab_orders_paid" id="tab_orders_paid">
                        <form>
                            <div class="table-responsive scrollbar">
                                <table class="table table-hover table-striped overflow-hidden table_clean">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                            foreach ($client_orders as $orders) {
                                                $name = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Name'])), 30);
                                                $desc = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Body'])), 45);
                                                $stop = $this->mod_crypt->Dec_String($orders['Ord_Deadline']);
                                                $start = date('M d H:i:s', $orders['Ord_Created']);
                                                $order_id = urlencode($this->mod_crypt->Enc_String($orders['Ord_Id']));

                                                if ($orders['Ord_Status'] == '00') {
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending
                                                        <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }else if ($orders['Ord_Status'] == '11') {
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-danger">Submitted
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                } else{
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-success">Finished
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }


                                                if ($orders['Ord_Pay'] != '00') {
                                                    
                                                    echo '
                                                        <tr class="align-middle">
                                                            <td class="text-nowrap">
                                                                <a href="'.base_url("admin/orders/view/".$order_id).'">
                                                                    <div class="d-flex">
                                                                        <div class="ms-2">'.word_limiter($name, 10).'</div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="text-nowrap">'.word_limiter($desc, 10).'</td>
                                                            <td class="text-nowrap">Created '.$start.'<br>Due '.$stop.'</td>
                                                            <td>'.$status.'</td>
                                                        </tr>
                                                    ';
                                                }
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane " role="tabpanel" aria-labelledby="tab_orders_unpaid" id="tab_orders_unpaid">
                        <form>
                            <div class="table-responsive scrollbar">
                                <table class="table table-hover table-striped overflow-hidden table_clean">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                            foreach ($client_orders as $orders) {
                                                $name = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Name'])), 30);
                                                $desc = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Body'])), 45);
                                                $stop = $this->mod_crypt->Dec_String($orders['Ord_Deadline']);
                                                $start = date('M d H:i:s', $orders['Ord_Created']);
                                                $order_id = urlencode($this->mod_crypt->Enc_String($orders['Ord_Id']));

                                                if ($orders['Ord_Status'] == '00') {
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending
                                                        <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }else if ($orders['Ord_Status'] == '11') {
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-danger">Submitted
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                } else{
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-success">Finished
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }


                                                if ($orders['Ord_Pay'] == '00') {
                                                    
                                                    echo '
                                                        <tr class="align-middle">
                                                            <td class="text-nowrap">
                                                                <a href="'.base_url("admin/orders/view/".$order_id).'">
                                                                    <div class="d-flex">
                                                                        <div class="ms-2">'.word_limiter($name, 10).'</div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="text-nowrap">'.word_limiter($desc, 10).'</td>
                                                            <td class="text-nowrap">Created '.$start.'<br>Due '.$stop.'</td>
                                                            <td>'.$status.'</td>
                                                        </tr>
                                                    ';
                                                }
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane " role="tabpanel" aria-labelledby="tab_orders_pending" id="tab_orders_pending">
                        <form class="form-validation">
                            <div class="table-responsive scrollbar">
                                <table class="table table-hover table-striped overflow-hidden table_clean">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Paid</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                            foreach ($client_orders as $orders) {
                                                $name = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Name'])), 30);
                                                $desc = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Body'])), 45);
                                                $stop = $this->mod_crypt->Dec_String($orders['Ord_Deadline']);
                                                $start = date('M d H:i:s', $orders['Ord_Created']);
                                                $order_id = urlencode($this->mod_crypt->Enc_String($orders['Ord_Id']));

                                                if ($orders['Ord_Status'] == '00') {
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending
                                                        <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }else if ($orders['Ord_Status'] == '11') {
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-danger">Submitted
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                } else{
                                                    $status = '
                                                    <span class="badge badge rounded-pill d-block p-2 badge-soft-success">Finished
                                                        <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                                    ';
                                                }

                                                if ($orders['Ord_Status'] == '00') {
                                                     echo '
                                                        <tr class="align-middle">
                                                            <td class="text-nowrap">
                                                                <a href="'.base_url("admin/orders/view/".$order_id).'">
                                                                    <div class="d-flex">
                                                                        <div class="ms-2">'.word_limiter($name, 10).'</div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="text-nowrap">'.word_limiter($desc, 10).'</td>
                                                            <td class="text-nowrap">Created '.$start.'<br>Due '.$stop.'</td>
                                                            <td>'.$paid.'</td>
                                                        </tr>
                                                    ';
                                                }

                                               
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane " role="tabpanel" aria-labelledby="tab_orders_completed" id="tab_orders_completed">
                        <form class="form-validation">
                            <div class="table-responsive scrollbar">
                                <table class="table table-hover table-striped overflow-hidden table_clean">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Paid</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            foreach ($client_orders as $orders) {
                                                $name = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Name'])), 30);
                                                $desc = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Body'])), 45);
                                                $stop = $this->mod_crypt->Dec_String($orders['Ord_Deadline']);
                                                $start = date('M d H:i:s', $orders['Ord_Created']);
                                                $order_id = urlencode($this->mod_crypt->Enc_String($orders['Ord_Id']));

                                                if ($orders['Ord_Status'] == '22') {
                                                     echo '
                                                        <tr class="align-middle">
                                                            <td class="text-nowrap">
                                                                <a href="'.base_url("admin/orders/view/".$order_id).'">
                                                                    <div class="d-flex">
                                                                        <div class="ms-2">'.word_limiter($name, 10).'</div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="text-nowrap">'.word_limiter($desc, 10).'</td>
                                                            <td class="text-nowrap">Created '.$start.'<br>Due '.$stop.'</td>
                                                            <td>'.$paid.'</td>
                                                        </tr>
                                                    ';
                                                }


                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light">
            </div>
        </div>
    </div>
</div>                    