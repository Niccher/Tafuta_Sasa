

    <form action="<?php echo base_url('admin/questions/add');?>" method="post">
        <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Question Details</h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row gx-2">
                            <div class="col-12 mb-3">
                                <label class="form-label" for="event-name">Title</label>
                                <input class="form-control" type="text" name="ans_tags" placeholder="Question Title" />
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="event-name">Question</label>
                                <input class="form-control" type="text" name="ans_name" placeholder="Question Title/Name" />
                            </div>
                            <!--<div class="col-12 mb-3">
                                <label class="form-label" for="event-name">Question Tags</label>
                                <input class="form-control" type="text" name="ans_tags" placeholder="eg, History, Africa, Colonialism, Slave Trade etc" />
                            </div>-->
                            <div class="col-12">
                                <label class="form-label" for="event-description">Answer Here</label>
                                <textarea class="form-control" id="answer_note" name="ans_body" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 pe-lg-2">
                <div class="card mb-3 hidden">
                    <div class="card-header">
                        <h5 class="mb-0">Question Info</h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="customRadio4" type="radio" name="ans_pay" value="pay_free" checked="checked" />
                            <label class="form-label mb-0" for="customRadio4"> 
                                <strong>Free Answer:</strong>
                            </label>
                            <div class="form-text mt-0">This setting specifies the answer to be free to anybody who accesses the website.</div>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="customRadio5" type="radio" name="ans_pay" value="pay_sale" />
                            <label class="form-label mb-0" for="customRadio5"> 
                                <strong>Pro Answer:</strong>
                            </label>
                            <div class="form-text mt-0">This answer shall only be available to the users with a subscription only. </div>
                        </div>
                    </div>

                    <hr>

                    <div class="card-body bg-light">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <small class="text-center text-primary">
                                    <i class="fas fa-info"></i>
                                    Any neccesary files to support this answer are need, please upload them
                                </small>
                                <hr>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-primary me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#modal_upload">Click to upload</button>
                                </div>


                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 ps-lg-2">
                <div class="sticky-sidebar">
                    <div class="card mb-lg-0">
                        <div class="card-header">
                            <h5 class="mb-0">Level</h5>
                        </div>
                        <div class="card-body bg-light">
                            <div class="mb-3">
                                <label class="form-label" for="event-topic">Sale Price:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">KES</span>
                                    <span class="input-group-text">0.00</span>
                                    <input class="form-control" type="text" placeholder="Cost" name="ans_price" />
                                </div>

                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="event-topic">Question Level:</label>
                                <select class="form-select" name="ans_level">
                                    <option value="level_undergraduate" selected="selected">Undergraduate</option>
                                    <option value="level_hschool">High School</option>
                                    <option value="level_college">College</option>
                                    <option value="level_postgraduate">Post Graduate</option>
                                    <option value="level_masters">Masters</option>
                                    <option value="level_phd">PHD</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="event-topic">Question Category (Subject):</label>
                                <select class="form-select" id="event-topic" name="ans_subject">
                                    <option value="subject_history" elected="selected">History</option>
                                    <option value="subject_business">Business</option>
                                    <option value="subject_computing">Computing</option>
                                    <option value="subject_medicine">Medicine</option>
                                    <option value="subject_philosophy">Philosophy</option>
                                    <option value="subject_biology">Biology</option>
                                    <option value="subject_chemistry">Chemistry</option>
                                    <option value="subject_engineering">Engineering</option>
                                    <option value="subject_physical">Physical Education</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-block me-1 mb-1" type="submit">Save Question</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <div class="row"></div>
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
                    <form action="<?php echo base_url('admin/questions/attach');?>" class="dropzone" method="post" enctype="multipart/form-data" id="my-awesome-dropzone" data-dropzone="data-dropzone">
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
