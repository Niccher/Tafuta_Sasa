        <?php
                $orders_all = count($client_orders);
                $paid = 0;
                $unpaid = 0;
                $orders_paid = 0;
                $orders_unpaid = 0;
                $orders_avg = 0;

                foreach ($client_orders as $my_order) {
                    $price = $this->mod_crypt->Dec_String($my_order['Ord_Price']);
                    if ($my_order['Ord_Pay'] == "11") {
                        $paid = $paid + $price;
                        $orders_paid ++;
                    }else{
                        $unpaid = $unpaid + $price;
                        $orders_unpaid ++;
                    }
                }

                $orders_avg = $paid / $orders_paid;
                
            ?>
        <div class="content">
            <div class="row g-0">
                <div class="col-md-6 col-xxl-3 mb-3 pe-md-2">
                    <div class="card h-md-100 ecommerce-card-min-width">
                        <div class="card-header pb-0">
                            <h6 class="mb-0 mt-2 d-flex align-items-center">Total of All Orders <span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                            <div class="row">
                                <div class="col">
                                    <p class="font-sans-serif lh-1 mb-1 fs-4"><?php echo "USD ".number_format(($unpaid + $paid), 2);?></p>
                                </div>
                                <div class="col-auto ps-0">
                                    <div class="echart-bar-weekly-sales h-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 mb-3 ps-md-2 pe-xxl-2">
                    <div class="card h-md-100">
                        <div class="card-header pb-0">
                            <h6 class="mb-0 mt-2">Totals of Paid Orders</h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-end">
                                    <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1"><?php echo "USD ".number_format($paid, 2);?></div>
                                </div>
                                <div class="col-auto ps-0 mt-n4">
                                    <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","week 6","week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}' data-echart-responsive="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-xxl-3 mb-3 pe-md-2 ps-xxl-2">
                    <div class="card h-md-100">
                        <div class="card-body">
                            <div class="row h-100 justify-content-between g-0">
                                <div class="col-5 col-sm-6 col-xxl pe-2">
                                    <h6 class="mt-1">Created Orders</h6>
                                    <div class="fs--2 mt-3">
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">All</span></div>
                                            <div class="d-xxl-none"><?php echo $orders_all;?></div>
                                        </div>
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Paid Orders</span></div>
                                            <div class="d-xxl-none"><?php echo $orders_paid;?></div>
                                        </div>
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Unpaid Orders</span></div>
                                            <div class="d-xxl-none"><?php echo $orders_unpaid;?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xxl-3 mb-3 ps-md-2 pe-xxl-2">
                    <div class="card h-md-100">
                        <div class="card-header pb-0">
                            <h6 class="mb-0 mt-2">Order Average Price</h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-end">
                                    <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1"><?php echo "USD ".number_format($orders_avg, 2);?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-12 pe-lg-2 mb-3">
                    <div class="card h-lg-100 overflow-hidden">
                        <div class="card-header">
                            <br class="row flex-between-center">
                                </br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="badge badge rounded-pill d-block p-2 badge-soft-primary">
                                            <i class="fas fa-plus"></i>
                                            <a href="<?php echo base_url("client/orders/add"); ?>">Proceed and create a new order Orders</a>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="badge badge rounded-pill d-block p-2 badge-soft-info">
                                            <i class="fas fa-eye"></i>
                                            <a href="<?php echo base_url("client/orders"); ?>">Proceed and create a new order Orders</a>
                                        </span>
                                    </div>
                                    <div class="row"></div>
                                </div>
                                </br>
                                </br>
                                <div class="row text-center">
                                    <h4 class="mb-0">Latest created Orders</h4>
                                </div>
                                </br>
                        <div class="card-body p-0">
                            <div class="table-responsive scrollbar">
                                <table class="table table-hover table-striped overflow-hidden table_clean">
                                    <thead>
                                    <tr>
                                        <th scope="col">Order Name</th>
                                        <th scope="col">Order Description</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Paid</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $client_order = array_slice($client_orders, 0, 5);
                                        foreach ($client_order as $orders) {
                                            $name = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Name'])), 30);
                                            $desc = character_limiter(strip_tags($this->mod_crypt->Dec_String($orders['Ord_Body'])), 45);
                                            $stop = $this->mod_crypt->Dec_String($orders['Ord_Deadline']);
                                            $start = date('M d H:i:s', $orders['Ord_Created']);
                                            $order_id = urlencode($this->mod_crypt->Enc_String($orders['Ord_Id']));

                                            if ($orders['Ord_Pay'] == '00') {
                                                $paid = '
                                                        <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">
                                                            <a href="'.base_url("client/orders/pay/".$order_id).'">Pay Now</a>
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
                                                            <a href="'.base_url("client/orders/view/".$order_id).'">
                                                                <div class="d-flex">
                                                                    <div class="ms-2">'.word_limiter($name, 10).'</div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="text-nowrap">'.word_limiter($desc, 10).'</td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>