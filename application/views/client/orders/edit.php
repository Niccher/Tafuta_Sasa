<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md-6">
                <h5 class="mb-2 mb-md-0">Edit order.</h5>
            </div>
            <div class="col-md-6">
                <?php $url_id = urlencode($this->mod_crypt->Enc_String($orders_info['Ord_Id'])); ?>
                <div class="d-flex flex-row-reverse">
                    <a href="<?php echo  base_url('client/orders/delete/'.$url_id) ?>" class="p-2 btn btn-outline-danger me-1 mb-1" type="button">
                        <span class="fas fa-trash me-1" data-fa-transform="shrink-3"></span>Delete
                    </a>
                    <a href="<?php echo  base_url('client/orders') ?>" class="p-2 btn btn-outline-success btn-sm me-1 mb-1" type="button">
                        <span class="fas fa-arrow-alt-circle-left me-1" data-fa-transform="shrink-3"></span>Back to Orders
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="<?php echo base_url('client/order/make');?>" method="post">
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Requirements</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row gx-2">
                        <div class="col-12 mb-3">
                            <label class="form-label" for="event-name">Order name</label>
                            <input class="form-control" type="text" name="ord_name" id="ord_name" placeholder="My order name" value="<?php echo $this->mod_crypt->Dec_String($orders_info['Ord_Name']); ?>" />
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="event-description">Order description</label>
                            <textarea class="form-control" id="ord_body" name="ord_body" rows="6">
                                <?php echo $this->mod_crypt->Dec_String($orders_info['Ord_Body']); ?>
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Order Description</h5>
                </div>
                <div class="card-body bg-light">
                	<div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="datetimepicker">Submit Before</label>
                            <input class="form-control datetimepicker" id="datetimepicker" type="text" placeholder="d/m/y H:i" name="ord_date" value="<?php echo $this->mod_crypt->Dec_String($orders_info['Ord_Deadline']); ?>" data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true}' />
                            <div class="row">
                            	<div class="col-md-6">
	                            	<label class="form-label" for="datetimepicker">Pages</label>
	                            	<select class="form-select" name="ord_pgs" id="ord_pgs">
		                                <option value="ord_pg_count_1" selected="selected" name="count_1" id="count_1">1</option>
		                                <?php
		                                for ($i=2; $i < 50; $i++) { 
		                                	echo '<option value="ord_pg_count_'.$i.'" name="count_'.$i.'" unt_'.$i.'" id="count_'.$i.'">'.$i.'</option>';
		                                }
		                                ?>
		                            </select>
	                            </div>
	                            <div class="col-md-6">
	                            	<label class="form-label" for="datetimepicker">Word Count</label>
	                            	<input class="form-control" type="text" name="ord_word" id="ord_word" disabled="" placeholder="Word count" value="300 Words" />
	                            </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Citation:</label>
                            <select class="form-select" name="ord_citing" id="ord_citing">
                                <option value="cite_apa" selected="selected">APA</option>
                                <option value="cite_harvard">Harvard</option>
                                <option value="cite_chicago">Chicago</option>
                                <option value="cite_mla">MLA</option>
                            </select>

                            <label class="form-label">Level</label>
                        	<select class="form-select" name="ord_level" id="ord_level">
                                <option value="level_undergraduate" selected="selected">Undergraduate</option>
                                <option value="level_high_school">High School</option>
                                <option value="level_college">College</option>
                                <option value="level_postgraduate">Post Graduate</option>
                                <option value="level_masters">Masters</option>
                                <option value="level_phd">PHD</option>
                            </select>
	                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Uploads</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <small class="text-center text-primary">
                                <i class="fas fa-info"></i>
                                Any neccesary files that may be needed when working on your assignment.
                            </small>
                            <hr>
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#modal_upload">Click to upload</button>
                            </div>

                            <div class="d-grid gap-2 temp_files"></div>


                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Nice Job! save to continue</h5>
                </div>
                <div class="col-auto">
                    <button class="btn btn-falcon-primary btn-sm me-2 edit_order" disabled="" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>


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

<div class="modal fade" id="modal_upload" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1">Upload auxilliary data. </h4>
                </div>
                <form action="<?php echo base_url('client/orders/attach');?>" class="dropzone" method="post" enctype="multipart/form-data" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                    <div class="dz-message" data-dz-message="data-dz-message">
                        <img class="me-2" src="<?php echo base_url('assets/img/icons/cloud-upload.svg');?>" width="25" alt="" />Drop your files here
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
