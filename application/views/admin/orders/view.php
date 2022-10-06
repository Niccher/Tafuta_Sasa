<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md-6">
                <h5 class="mb-2 mb-md-0">Order Information</h5>
            </div>
            <div class="col-md-6">
            	<?php $url_id = urlencode($this->mod_crypt->Enc_String($orders_info['Ord_Id'])); ?>
            	<div class="d-flex flex-row-reverse">

                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_submit" class="p-2 btn btn-primary btn-sm me-1 mb-1" type="button">
                        <span class="fas fa-upload me-1" data-fa-transform="shrink-3"></span>Submit
                    </a>

                	<a href="<?php echo  base_url('admin/orders') ?>" class="p-2 btn btn-outline-success btn-sm me-1 mb-1" type="button">
            			<span class="fas fa-arrow-alt-circle-left me-1" data-fa-transform="shrink-3"></span>Back to Orders
                	</a>

                </div>

            </div>
        </div>
    </div>
</div>

<?php 
    $opts ="";
    //.$opts='<option value="" selected >Select as Writer</option>';
    //$opts .='<option value data-choices-placeholder>Please Choose a writer…</option>';
    foreach ($writers as $writer) {
        $name = ($writer['Name']);
        $val = urlencode($this->mod_crypt->Enc_String($writer['Id']));
        $opts.='<option value="'.$val.'">'.$name.'</option>';
    }
?>
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
                                        echo number_format($this->mod_crypt->Dec_String($orders_info['Ord_Price']), 2);  ?>
                                    </h4>
                                </div>

                            </div>

                        </div>

                        <div class="position-relative z-index-2">

                            <div class="d-flex py-3">
                                <?php
                                $is_revised = $this->mod_submit->is_revised($orders_info['Ord_Id']);
                                $is_order_submited = $this->mod_submit->is_order_submited_to_client($orders_info['Ord_Id']);

                                $assigned = $this->mod_orders->orders_assignment_id($orders_info['Ord_Id']);
                                if (empty($assigned) || $assigned['Assign_Order'] == "00" ) {
                                    if ( ($orders_info['Ord_Pay'] == "11")) {
                                        echo '
                                            <div class="ps-3">
                                                <p class="text-600 fs--1">Assign to someone </p>
                                                <h4 class="text-800 mb-0">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_assign" class="p-2 btn btn-info btn-sm me-1 mb-1" type="button">
                                                        <span class="far fa-handshake me-1" data-fa-transform="shrink-3"></span>Assign Order to Writer
                                                    </a>
                                                </h4>
                                            </div>
                                        ';
                                    }
                                }

                                echo '
                                    <div class="ps-3">
                                        <p class="text-600 fs--1">Submit Order </p>
                                        <h4 class="text-800 mb-0">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_submit" class="p-2 btn btn-primary btn-sm me-1 mb-1" type="button">
                                                <span class="fas fa-upload me-1" data-fa-transform="shrink-3"></span>Submit Order
                                            </a>
                                        </h4>
                                    </div>
                                ';

                                if (empty($is_order_submited)){
                                }else{
                                    echo '
                                    <div class="ps-3">
                                        <p class="text-600 fs--1">Mark as complete </p>
                                        <h4 class="text-800 mb-0">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_mark_complete" class="p-2 btn btn-success btn-sm me-1 mb-1" type="button">
                                                <span class="far fa-check-circle me-1" data-fa-transform="shrink-3"></span>Mark order as Complete
                                            </a>
                                        </h4>
                                    </div>
                                    ';
                                }


                                if (!empty($is_revised) && !empty($is_order_submited)){
                                    $last_revision = $is_revised['rev_Time'];
                                    $last_submission = $is_order_submited['submit_Time'];

                                    if ($last_revision < $last_submission){
                                        //echo "Revision is delivered by admin";
                                    }else{
                                        if (!empty($is_revised)){
                                            $submited_time = date('Y F d D H:i:s A',  $is_revised['rev_Time']);
                                            $submited_files = $this->mod_crypt->Dec_String($is_revised['rev_Files']);
                                            $submited_files_ = explode('|__|', $submited_files);
                                            //$submited_rev_files = array_shift($submited_files_);
                                            echo '
                                                <div class="ps-3">
                                                    <p class="text-600 fs--1">View revision requirement </p>
                                                    <h4 class="text-800 mb-0">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_view_revisions" class="p-2 btn btn-warning btn-sm me-1 mb-1" type="button">
                                                            <span class="fas fa-eye me-1" data-fa-transform="shrink-3"></span>View Revision comments
                                                        </a>
                                                    </h4>
                                                </div>
                                                ';
                                        }
                                    }
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
		                                    	<a class="alert-link fs--1 fw-medium" href="#">Owner has not paid
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

<style type="text/css">
    .dropzone {
        background: white;
        border-radius: 5px;
        border: 2px dashed rgb(0, 135, 247);
        border-image: none;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<div class="modal fade" id="modal_assign" data-keyboard="false" tabindex="-1" aria-labelledby="scrollinglongcontentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                <h4 class="mb-1" id="modalExampleDemoLabel">Select writers </h4>
                </div>
                <div class="p-4 pb-0">
                    <form>
                        <select class="form-select writer_list" multiple name="writer_list" id="writer_list" data-placeholder="Writers to assign this order to.">
                            <?php echo $opts;?>
                        </select>
                        <br>
                        <div class="text-secondary">
                            An order can be assigned to several Writers as you may deem necessary.
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary assigned" id="assigned" type="button">Assign Order</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_submit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Deliver an Order </h4>
                </div>
                <div class="p-4 pb-0">
                    <div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Message to the client:</label>
                            <textarea class="form-control" id="order_send_mgs"></textarea>
                        </div>
                        <div class="mb-3">
                            <form action="<?php echo base_url('orders/temp_submit');?>" class="dropzone" method="post" enctype="multipart/form-data" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                                <div class="dz-message" data-dz-message="data-dz-message">
                                    <img class="me-2" src="<?php echo base_url('assets/img/icons/cloud-upload.svg');?>" width="25" alt="" />Drop your files here
                                </div>
                            </form>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Uploaded files:</label>
                            <div class="d-grid gap-2 temp_files" id="temp_files"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary order_submit" type="button">Submit Order </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_mark_complete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Mark order as complete </h4>
                </div>
                <div class="p-4 pb-0">
                    <div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Note</label>
                            <div>Once an order has been marked as Complete, it will not be possible to work on it again.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-success order_flag_complete" type="button">Mark as Complete </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_view_revisions" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Revision comments </h4>
                </div>
                <div class="p-4 pb-0">
                    <div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Comment from the client:</label>
                            <div>
                                <?php
                                    echo $this->mod_crypt->Dec_String($is_revised['rev_Msg']);
                                ?>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Files</label>
                            <div>
                                <?php
                                foreach ($submited_files_ as $rev_file) {
                                    echo $rev_file;
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-3">
                            <small>
                                <div class="d-grid gap-2 text-muted" id="">
                                    Submitted at <?php echo $submited_time; ?>
                                </div>
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


