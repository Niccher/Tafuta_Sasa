
    <div class="content">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 class="mb-2"><b><?php echo $this->mod_crypt->Dec_String($user_info->Name); ?> </b></h5>
                        <a class="btn btn-falcon-default btn-sm" href="customer-details.html#!">
                            <span class="fas fa-plus fs--2 me-1"></span>Edit
                        </a>
                        <button class="btn btn-falcon-default btn-sm dropdown-toggle ms-2 dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fas fa-ellipsis-h"></span>
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
                    <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="customer-details.html#!"><span class="fas fa-pencil-alt fs--2 me-1"></span>Update details</a></div>
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
                    <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
                        <h6 class="fw-semi-bold ls mb-3 text-uppercase">Billing Information</h6>
                        <div class="row">
                            <div class="col-5 col-sm-4">
                                <p class="fw-semi-bold mb-1">Email</p>
                            </div>
                            <div class="col">sampleMail@gmail.com</div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-sm-4">
                                <p class="fw-semi-bold mb-1">Name</p>
                            </div>
                            <div class="col">124578124578</div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-sm-4">
                                <p class="fw-semi-bold mb-1">Phone</p>
                            </div>
                            <div class="col">124578124578</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>