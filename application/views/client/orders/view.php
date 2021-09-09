<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md-6">
                <h5 class="mb-2 mb-md-0">Order Information</h5>
            </div>
            <div class="col-md-6">
            	<?php $url_id = urlencode($this->mod_crypt->Enc_String($orders_info['Ord_Id'])); ?>
            	<div class="d-flex flex-row-reverse">
                	<a href="<?php echo  base_url('client/orders/delete/'.$url_id) ?>" class="p-2 btn btn-outline-danger me-1 mb-1" type="button">
                	 	<span class="fas fa-trash me-1" data-fa-transform="shrink-3"></span>Delete
                	</a>
                	<a href="<?php echo  base_url('client/orders/edit/'.$url_id) ?>" class="p-2 btn btn-outline-primary btn-sm me-1 mb-1">
                		<span class="far fa-edit me-1" data-fa-transform="shrink-3"></span>Edit
                	</a>
                	<a href="<?php echo  base_url('client/orders') ?>" class="p-2 btn btn-outline-success btn-sm me-1 mb-1" type="button">
            			<span class="fas fa-arrow-alt-circle-left me-1" data-fa-transform="shrink-3"></span>Back to Orders
                	</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-3 mb-3">
    <div class="col-xxl-12 col-xl-12">
        <div class="row g-3">
            <div class="col-12">
                <div class="card bg-transparent-50 overflow-hidden">
                    <div class="card-header position-relative">
                        <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;"></div>
                        <!--/.bg-holder-->
                        <div class="position-relative z-index-2">
                            <div>
                                <h3 class="text-primary mb-1">
                                	<?php echo $this->mod_crypt->Dec_String($orders_info['Ord_Name']); ?>
                                </h3>
                                <p><?php echo $this->mod_crypt->Dec_String($orders_info['Ord_Body']); ?></p>
                            </div>
                            <div class="d-flex py-3">
                                <div class="pe-3">
                                    <p class="text-600 fs--1 fw-medium">Citation </p>
                                    <h4 class="text-800 mb-0">
                                    	<?php echo ucfirst(str_replace("cite_", "", $this->mod_crypt->Dec_String($orders_info['Ord_Cite']))); ?>
                                    </h4>
                                </div>

                                <div class="ps-3">
                                    <p class="text-600 fs--1">Pages </p>
                                    <h4 class="text-800 mb-0">
                                    	<?php echo (str_replace("ord_pg_count_", "", $this->mod_crypt->Dec_String($orders_info['Ord_Pages']))); ?>
                                    </h4>
                                </div>

                                <div class="ps-3">
                                    <p class="text-600 fs--1">Words </p>
                                    <h4 class="text-800 mb-0">
                                    	<?php echo 300 * (str_replace("ord_pg_count_", "", $this->mod_crypt->Dec_String($orders_info['Ord_Pages']))). "Words"; ?>
                                    </h4>
                                </div>

                                <div class="ps-3">
                                    <p class="text-600 fs--1">Created </p>
                                    <h4 class="text-800 mb-0">
                                    	<?php echo date('M d H:i A', $orders_info['Ord_Created']); ?>
                                    </h4>
                                </div>

                                <div class="ps-3">
                                    <p class="text-600 fs--1">Due </p>
                                    <h4 class="text-800 mb-0">
                                    	<?php 
                                    	$days = strtotime($this->mod_crypt->Dec_String($orders_info['Ord_Deadline']));
                                    	echo date('M d H:i A', $days);  ?>
                                    </h4>
                                </div>

                                <div class="ps-3">
                                    <p class="text-600 fs--1">Remaining </p>
                                    <h4 class="text-800 mb-0">
                                    	<?php 
                                    	echo timespan(time(), $days, 2);  ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if ($orders_info['Ord_Attachment'] != "") {
                        $files = explode("|__|", $orders_info['Ord_Attachment']);
                        array_shift($files);
                        if (!empty($files)) {
                            echo '
                            <div class="col-lg-12 pe-lg-2 mb-3">
                                <div class="card h-lg-100 overflow-hidden">
                                    <div class="card-header bg-light">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0">Attachments</h6>
                                            </div>
                                        </div>
                                    </div>
                            ';

                            foreach ($files as $file) {
                                $human_size = $this->mod_orders->get_attachment_size(filesize('uploads/client_orders/'.urldecode($file)));
                                echo '
                                <div class="card-body p-0">
                                    <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                        <div class="col ps-card py-1 position-static">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-xl me-3">
                                                    <div class="avatar-name rounded-circle bg-soft-primary text-dark">
                                                        <span class="fs-0 text-primary"> .'.pathinfo($file, PATHINFO_EXTENSION).'</span>
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 d-flex align-items-center">
                                                        <a class="text-800 stretched-link" href="'.base_url("orders/uploads/attachment/".urldecode($file)).'">'.$file.'</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col py-1">
                                            <div class="row flex-end-center g-0">
                                                <div class="col-auto pe-2">
                                                    <div class="fs--1 fw-semi-bold">
                                                        '.$human_size.'
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                            echo '
                                </div>
                            </div>';
                        }
                    }
                    ?>


                    <?php
	                    if ($orders_info['Ord_Pay'] == "00") {
	                    	echo '
	                    	<div class="card-body p-0">
		                        <ul class="mb-0 list-unstyled">
		                            <li class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
		                                <div class="row flex-between-center">
		                                    <div class="col">
		                                        <div class="d-flex">
		                                            <div class="fas fa-circle mt-1 fs--2"></div>
		                                            <p class="fs--1 ps-2 mb-0">Order <strong>#'.$orders_info['Ord_Id'].'</strong> Has not been paid for</p>
		                                        </div>
		                                    </div>
		                                    <div class="col-auto d-flex align-items-center">
		                                    	<a class="alert-link fs--1 fw-medium" href="'.base_url('client/orders/pay/'.$url_id).'">Pay Now
		                                    		<i class="fas fa-chevron-right ms-1 fs--2"></i>
		                                    	</a>
		                                    </div>
		                                </div>
		                            </li>
		                        </ul>
		                    </div>
	                    	';
	                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
