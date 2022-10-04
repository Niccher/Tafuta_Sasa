<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md-6">
                <h5 class="mb-2 mb-md-0">Order Information</h5>
            </div>
            <div class="col-md-6">
            	<?php $url_id = urlencode($this->mod_crypt->Enc_String($orders_info['Ord_Id'])); ?>
            	<div class="d-flex flex-row-reverse">
                    <?php
                        if($orders_info['Ord_Status'] == "00"){
                            echo '
                                <a href="'.base_url('client/orders/delete/'.$url_id).'" class="p-2 btn btn-outline-danger btn-sm me-1 mb-1">
                                    <span class="far fa-trash me-1" data-fa-transform="shrink-3"></span>Delete
                                </a>
                                <a href="'.base_url('client/orders/edit/'.$url_id).'" class="p-2 btn btn-outline-primary btn-sm me-1 mb-1">
                                    <span class="far fa-edit me-1" data-fa-transform="shrink-3"></span>Edit
                                </a>';
                        }
                    ?>
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

                                <div class="ps-3">
                                    <p class="text-600 fs--1">Price </p>
                                    <h4 class="text-800 mb-0">
                                        <?php 
                                        echo "$ ". number_format($this->mod_crypt->Dec_String($orders_info['Ord_Price']), 2);  ?>
                                    </h4>
                                </div>

                                <?php
                                if($orders_info['Ord_Status'] == "11"){
                                    echo '<div class="ps-3">
                                            <p class="text-600 fs--1">Download Order </p>
                                            <div class="d-flex flex-row-reverse">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_download_order" class="p-2 btn btn-success me-1 mb-1" type="button">
                                                    <span class="fas fa-download me-1" data-fa-transform="shrink-3"></span>Download
                                                </a>
                                            </div>
                                        </div>';

                                    $submited_info = $this->mod_submit->client_download_order($orders_info['Ord_Id']);

                                    //$submited_files = $submited_info['submit_Attachment'];
                                    $submited_files = substr($submited_info['submit_Attachment'], 4);

                                    $submited_time = date('Y F d D H:i:s A',  $submited_info['submit_Time']);

                                    $files = explode("|__|" ,$submited_files);

                                    $submited_file = "";
                                    $submited_file.='<div class="mb-3 position-relative"><div class="text-start">';

                                    foreach ( $files as $file) {
                                        $submited_file.= '
                                        <p class="text-muted mb-0">
                                            <a href="#" class="download_now" id="'.$file.'">
                                                <strong>'.$file.' </strong>
                                                <span class="text-info fa fa-download"></span>
                                            </a>
                                        </p>';
                                    }
                                    $submited_file.= '</div></div>';

                                }
                                ?>

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
	                    }else{
                            echo '
                            <div class="card-body p-0">
                                <ul class="mb-0 list-unstyled">
                                    <li class="alert mb-0 rounded-0 py-3 px-card alert-success border-x-0 border-top-0">
                                        <div class="row flex-between-center">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <div class="fas fa-circle mt-1 fs--2"></div>
                                                    <p class="fs--1 ps-2 mb-0">Order <strong>#'.$orders_info['Ord_Id'].'</strong> Has already been paid for.</p>
                                                </div>
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

<div class="modal fade" id="modal_download_order" data-keyboard="false" tabindex="-1" aria-labelledby="scrollinglongcontentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Order has been delivered </h4>
                </div>
                <div class="p-4 pb-0">
                    <div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Message from the admin:</label>
                            <textarea class="form-control disabled" id="message_from_admin" disabled><?php echo $submited_info['submit_Msg']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Attached files:</label>
                            <div class="d-grid gap-2 temp_files" id="temp_files"><?php echo $submited_file; ?></div>
                        </div>

                        <div class="mb-3">
                            <small>
                                <div class="d-grid gap-2 text-muted" id="">Submitted at <?php echo $submited_time; ?></div>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
