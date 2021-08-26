    <div class="card mb-3">
        <img class="card-img-top" src="../../assets/img/generic/13.jpg" alt="" />
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="d-flex">
                        <div class="calendar me-2"><span class="calendar-month"><?php echo date('M', ($question_info->Qn_Created)); ?> </span><span class="calendar-day"><?php echo date('d', ($question_info->Qn_Created)); ?>    </span></div>
                        <div class="flex-1 fs--1">
                            <h5 class="fs-0"><?php echo ucfirst($this->security->xss_clean($this->mod_crypt->Dec_String($question_info->Qn_Name))); ?></h5>
                            <p class="mb-0">by <a href="#">Admin</a></p>
                            <span class="fs-0 text-warning fw-semi-bold">Price: <?php echo number_format($this->mod_crypt->Dec_String($question_info->Qn_Price), 2); ?></span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex">
                        <div class="col-12 col-sm-auto ms-auto">
                            <a href="<?php echo base_url('admin/questions'); ?>">
                                <button class="btn btn-info me-1 mb-1" type="button">
                                    <span class="fas fa-arrow-left me-1" data-fa-transform="shrink-3"></span>Go Back
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-primary me-1 mb-1" type="button">
                                    <span class="far fa-edit me-1" data-fa-transform="shrink-3"></span>Edit
                                </button>
                            </a>
                            <a href="<?php echo base_url('questions/delete/'.urlencode($this->mod_crypt->Enc_String($question_info->Qn_Id))); ?>">
                                <button class="btn btn-danger me-1 mb-1" type="button">
                                    <span class="fas fa-trash-alt me-1" data-fa-transform="shrink-3"></span>Delete
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div> 
        </div>
    </div>

    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3 mb-lg-0">
                <div class="card-body">
                    <p>
                        <?php echo $this->security->xss_clean($this->mod_crypt->Dec_String($question_info->Qn_Answer)); ?>
                    </p>

                    <h5 class="fs-0 mt-5 mb-2">Tags</h5>
                    <?php 
                        $files = explode(' ', $this->security->xss_clean($this->mod_crypt->Dec_String($question_info->Qn_Tags)));
                        for ($i=0; $i < count($files) - 1; $i++) { 
                            echo '
                            <a class="badge border link-secondary me-1 text-decoration-none" href="#">'.$files[$i].'</a>
                            ';
                        }
                    ?>   
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3 fs--1">
                    <div class="card-body">
                        <h6>Date And Time</h6>
                        <p class="mb-1">
                            <?php echo date('Y m D, H:i:m A', ($question_info->Qn_Created)); ?>   
                        </p>
                        <h6>Viewed</h6>
                        <p class="mb-1">
                            <?php echo $question_info->Qn_Viewed; ?>   
                        </p>
                        <h6>Subject</h6>
                        <p class="mb-1">
                            <?php echo ucfirst(str_replace('subject_','', $this->mod_crypt->Dec_String($question_info->Qn_Subject))); ?>   
                        </p>
                        <h6>Level</h6>
                        <p class="mb-1">
                            <?php echo ucfirst(str_replace('level_','', $this->mod_crypt->Dec_String($question_info->Qn_Level))); ?>   
                        </p>
                        <h6>Attachment</h6>
                        <p class="mb-1">
                            <?php 
                                $files = explode('|||', $question_info->Qn_Attachment);
                                for ($i=0; $i < count($files) - 0; $i++) { 
                                    echo '
                                    <a class="badge border link-secondary me-1 text-decoration-none" href="'.base_url("questions/get_attachment/".$files[$i]).'">'.$files[$i].'</a>
                                    ';
                                }
                            ?>   
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>