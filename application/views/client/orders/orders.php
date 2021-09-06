<div class="row mt-5 mt-lg-0 mt-xl-5 mt-xxl-0">
    <div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
        <div class="d-flex mb-4">
            <span class="fa-stack me-2 ms-n1">
            	<i class="fas fa-circle fa-stack-2x text-300"></i>
            	<i class="fa-inverse fa-stack-1x text-primary fas fa-capsules"></i>
            </span>
            <div class="col">
                <h5 class="mb-0 text-primary position-relative">
                	<span class="bg-200 dark__bg-1100 pe-3">All of my orders</span>
                	<span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span>
                </h5>
                <p class="mb-0">This losting shows all orders despite their states</p>
            </div>
        </div>
        <div class="card theme-wizard mb-5">
            <div class="card-header bg-light pt-3 pb-2">
                <ul class="nav nav-pills mb-3" role="tablist" id="pill-tab1">
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link active" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_all" type="button" role="tab" aria-controls="tab_orders_all" aria-selected="true">
                    		<span class="fas fa-lock me-2" data-fa-transform="shrink-2"></span>
                    		<span class="d-none d-md-inline-block fs--1">All</span>
                    	</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_paid" type="button" role="tab" aria-controls="tab_orders_paid" aria-selected="false">
                    		<span class="fas fa-user me-2" data-fa-transform="shrink-2"></span>
                    		<span class="d-none d-md-inline-block fs--1">Paid</span>
                    	</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_unpaid" type="button" role="tab" aria-controls="tab_orders_unpaid" aria-selected="false">
                    		<span class="fas fa-user me-2" data-fa-transform="shrink-2"></span>
                    		<span class="d-none d-md-inline-block fs--1">Unpaid</span>
                    	</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_pending" type="button" role="tab" aria-controls="tab_orders_pending" aria-selected="false">
                    		<span class="fas fa-dollar-sign me-2" data-fa-transform="down-2 shrink-2"></span>
                    		<span class="d-none d-md-inline-block fs--1">Pending</span>
                    	</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#tab_orders_completed" type="button" role="tab" aria-controls="tab_orders_completed" aria-selected="false">
                    		<span class="fas fa-thumbs-up me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Completed</span>
                    	</button>
                    </li>
                </ul>
            </div>
            <div class="card-body py-4">
                <div class="tab-content">
                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="tab_orders_all" id="tab_orders_all">
                        <form novalidate="novalidate">
                            <div class="mb-3">
                            	<label class="form-label" for="form-wizard-wizard-name">Name</label><input class="form-control" type="text" name="name" placeholder="John Smith" id="form-wizard-wizard-name" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="form-wizard-wizard-email">Email*</label>
                                <input class="form-control" type="email" name="email" placeholder="Email address" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="form-wizard-wizard-email" data-wizard-validate-email="true" />
                                <div class="invalid-feedback">You must add email</div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="tab_orders_paid" id="tab_orders_paid">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="form-wizard-gender">Gender</label>
                                <select class="form-select" name="gender" id="form-wizard-gender">
                                    <option value="">Select your gender ...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                            	<label class="form-label" for="form-wizard-wizard-phone">Phone</label>
                            	<input class="form-control" type="text" name="phone" placeholder="Phone" id="form-wizard-wizard-phone" />
                            </div>
                            <div class="mb-3">
                            	<label class="form-label" for="form-wizard-wizard-datepicker">Date of Birth</label>
                            	<input class="form-control datetimepicker" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' id="form-wizard-wizard-datepicker" />
                            </div>
                            <div class="mb-3">
                            	<label class="form-label" for="form-wizard-wizard-address">Address</label>
                            	<textarea class="form-control" rows="4" id="form-wizard-wizard-address"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="tab_orders_unpaid" id="tab_orders_unpaid">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="form-wizard-gender">Gender</label>
                                <select class="form-select" name="gender" id="form-wizard-gender">
                                    <option value="">Select your gender ...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                            	<label class="form-label" for="form-wizard-wizard-phone">Phone</label>
                            	<input class="form-control" type="text" name="phone" placeholder="Phone" id="form-wizard-wizard-phone" />
                            </div>
                            <div class="mb-3">
                            	<label class="form-label" for="form-wizard-wizard-datepicker">Date of Birth</label>
                            	<input class="form-control datetimepicker" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' id="form-wizard-wizard-datepicker" />
                            </div>
                            <div class="mb-3">
                            	<label class="form-label" for="form-wizard-wizard-address">Address</label>
                            	<textarea class="form-control" rows="4" id="form-wizard-wizard-address"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="tab_orders_pending" id="tab_orders_pending">
                        <form class="form-validation">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="form-wizard-card-number">Card Number</label><input class="form-control" placeholder="XXXX XXXX XXXX XXXX" type="text" id="form-wizard-card-number" /></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="form-wizard-card-name">Name on Card</label><input class="form-control" placeholder="John Doe" name="cardName" type="text" id="form-wizard-card-name" /></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel" aria-labelledby="tab_orders_completed" id="tab_orders_completed">
                        <div class="wizard-lottie-wrapper">
                            <div class="lottie wizard-lottie mx-auto my-3" data-options='{"path":"../../assets/img/animated-icons/celebration.json"}'></div>
                        </div>
                        <h4 class="mb-1">Your account is all set!</h4>
                        <p>Now you can access to your account</p>
                        <a class="btn btn-primary px-5 my-3" href="wizard.html">Start Over</a>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light">
            </div>
        </div>
    </div>
</div>
















<div class="table-responsive scrollbar">
    <table class="table table-hover table-striped overflow-hidden">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th class="text-end" scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr class="align-middle">
                <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                        </div>
                        <div class="ms-2">Ricky Antony</div>
                    </div>
                </td>
                <td class="text-nowrap">ricky@example.com</td>
                <td class="text-nowrap">(201) 200-1851</td>
                <td class="text-nowrap">2392 Main Avenue, Penasauka</td>
                <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                <td class="text-end">$99</td>
            </tr>
            <tr class="align-middle">
                <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
                        </div>
                        <div class="ms-2">Emma Watson</div>
                    </div>
                </td>
                <td class="text-nowrap">emma@example.com</td>
                <td class="text-nowrap">(212) 228-8403</td>
                <td class="text-nowrap">2289 5th Avenue, New York</td>
                <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                <td class="text-end">$199</td>
            </tr>
            <tr class="align-middle">
                <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <div class="avatar-name rounded-circle"><span>RA</span></div>
                        </div>
                        <div class="ms-2">Rowen Atkinson</div>
                    </div>
                </td>
                <td class="text-nowrap">rown@example.com</td>
                <td class="text-nowrap">(201) 200-1851</td>
                <td class="text-nowrap">112 Bostwick Avenue, Jersey City</td>
                <td><span class="badge badge rounded-pill d-block p-2 badge-soft-primary">Processing<span class="ms-1 fas fa-redo" data-fa-transform="shrink-2"></span></span></td>
                <td class="text-end">$755</td>
            </tr>
            <tr class="align-middle">
                <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="ms-2">Antony Hopkins</div>
                    </div>
                </td>
                <td class="text-nowrap">antony@example.com</td>
                <td class="text-nowrap">(901) 324-3127</td>
                <td class="text-nowrap">3448 Ile De France St #242</td>
                <td><span class="badge badge rounded-pill d-block p-2 badge-soft-secondary">On Hold<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                <td class="text-end">$50</td>
            </tr>
            <tr class="align-middle">
                <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                        </div>
                        <div class="ms-2">Jennifer Schramm</div>
                    </div>
                </td>
                <td class="text-nowrap">jennifer@example.com</td>
                <td class="text-nowrap">(828) 382-9631</td>
                <td class="text-nowrap">659 Hannah Street, Charlotte</td>
                <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                <td class="text-end">$150</td>
            </tr>
        </tbody>
    </table>
</div>


                    