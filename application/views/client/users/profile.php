
    <div class="content">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 class="mb-2"><b><?php echo $this->mod_crypt->Dec_String($user_info->Name); ?> </b></h5>
                        <button class="btn btn-falcon-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit_profile">
                            <span class="fas fa-plus fs--2 me-1"></span>Edit
                        </button>
                        <button class="btn btn-falcon-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit_avatar">
                            <span class="fas fa-user-edit fs--2 me-1"></span>Avatar
                        </button>
                    </div>
                    <div class="col-auto d-none d-sm-block">
                        <h6 class="text-uppercase text-600">Profile<span class="fas fa-user ms-2"></span></h6>
                    </div>
                </div>
            </div>
            <div class="card-body border-top">
                <div class="d-flex">
                    <span class="fas fa-user text-success me-2" data-fa-transform="down-5"></span>
                    <div class="flex-1">
                        <p class="mb-0">Account was created</p>
                        <p class="fs--1 mb-0 text-600"><?php echo $this->mod_crypt->Dec_String($user_info->Name); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Details</h5>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light border-top">
                <div class="row">
                    <div class="col-lg col-xxl-5">
                        <h6 class="fw-semi-bold ls mb-3 text-uppercase">Account Information</h6>
                        <div class="row">
                            <div class="col-5 col-sm-4">
                                <p class="fw-semi-bold mb-1">ID</p>
                            </div>
                            <div class="col"><?php echo str_replace("=", "", 'user_'.$this->mod_crypt->Enc_String($user_info->Person_ID)) ; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-sm-4">
                                <p class="fw-semi-bold mb-1">Created</p>
                            </div>
                            <div class="col"><?php echo date('Y F d H:i:s A',$user_info->Timestamp); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-sm-4">
                                <p class="fw-semi-bold mb-1">Email</p>
                            </div>
                            <div class="col"><?php echo $this->mod_crypt->Dec_String($user_info->Email); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-sm-4">
                                <p class="fw-semi-bold mb-1">Phone</p>
                            </div>
                            <div class="col"><?php echo $this->mod_crypt->Dec_String($user_info->Phone); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-sm-4">
                                <p class="fw-semi-bold mb-1">Description</p>
                            </div>
                            <div class="col">
                                <p class="fst-italic text-400 mb-1"><?php echo $this->mod_crypt->Dec_String($user_info->Bio); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="modal fade" id="edit_profile" tabindex="-1" aria-hidden="true" role="dialog" aria-hidden="true" >
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body p-0">
                    <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                        <h5 class="mb-1" id="staticBackdropLabel">Profile not pleasing? Edit it now</h5>
                    </div>
                    <div class="p-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex">
                                    <span class="fa-stack ms-n1 me-3">
                                        <i class="fas fa-circle fa-stack-2x text-200"></i>
                                        <i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i>
                                    </span>
                                    <div class="flex-1">
                                        <h5 class="mb-2 fs-0">Description</h5>

                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('client/profile/add'); ?>" method="post">
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-2"></div>
                                <div class="mb-3 col-sm-8">
                                    <input class="form-control" type="text" autocomplete="on" placeholder="New Name" name="prof_nw_name" />
                                </div>
                                <div class="mb-3 col-sm-2"></div>
                            </div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-2"></div>
                                <div class="mb-3 col-sm-8">
                                    <input class="form-control" type="email" autocomplete="on" placeholder="New Email address" name="prof_nw_mail" />
                                </div>
                                <div class="mb-3 col-sm-2"></div>
                            </div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-2"></div>
                                <div class="mb-3 col-sm-8">
                                    <input class="form-control" type="text" autocomplete="on" placeholder="New Phone" name="prof_nw_phone" />
                                </div>
                                <div class="mb-3 col-sm-2"></div>
                            </div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-6">
                                    <input class="form-control" type="password" autocomplete="on" placeholder="New Password" name="prof_nw_pwd1" />
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <input class="form-control" type="password" autocomplete="on" placeholder="Old Password" name="prof_nw_pwd0" />
                                </div>
                            </div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-12">
                                    <textarea class="form-control" id="profile_bio" name="prof_nw_info" rows="6" placeholder="My Description"></textarea>
                                </div>
                            </div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-12">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-primary btn-block " type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit_avatar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
            <div class="modal-content position-relative">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                        <h4 class="mb-1">Upload profile image. </h4>
                    </div>
                    <form action="<?php echo base_url('client/profile/attach_img');?>" class="dropzone" method="post" enctype="multipart/form-data" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                        <div class="fallback">
                            <input name="file" type="file" single />
                        </div>
                        <div class="dz-message" data-dz-message="data-dz-message">
                            <img class="me-2" src="<?php echo base_url('assets/img/icons/cloud-upload.svg');?>" width="25" alt="" />Drop your profile avatar here
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>