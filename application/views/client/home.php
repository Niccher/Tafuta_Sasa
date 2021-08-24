                <?php
                        $qn_all = count($question_viewed);
                        $qn_free = 0; $qn_pay = 0; $qn_paid = 0; $qn_paid_month = 0;
                        foreach ($question_viewed as $question) {
                            $qu_id = $question['View_Question'];
                            $qu_info = $this->mod_questions->get_question_by_id($qu_id);

                            if (!empty($qu_info)) {
                                if ($qu_info->Qn_Pay == $this->mod_crypt->Enc_String('pay_sale')) {
                                    $qn_pay++;
                                    $qn_paid += $qu_info->Qn_Price;

                                    if ($question['View_Time'] < time() && $question['View_Time'] > (time() - (24*30*3600)) ) {
                                        $qn_paid_month += $qu_info->Qn_Price;
                                    }
                                }

                                if ($qu_info->Qn_Pay == $this->mod_crypt->Enc_String('pay_free')) {
                                    $qn_free++;
                                }
                            }
                        }
                        
                    ?>
                <div class="content">
                    <div class="row g-0">
                        <div class="col-md-6 col-xxl-3 mb-3 pe-md-2">
                            <div class="card h-md-100 ecommerce-card-min-width">
                                <div class="card-header pb-0">
                                    <h6 class="mb-0 mt-2 d-flex align-items-center">All Purchases<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-end">
                                    <div class="row">
                                        <div class="col">
                                            <p class="font-sans-serif lh-1 mb-1 fs-4"><?php echo "KES ".number_format($qn_paid, 2);?></p>
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
                                    <h6 class="mb-0 mt-2">This Month</h6>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-end">
                                    <div class="row justify-content-between">
                                        <div class="col-auto align-self-end">
                                            <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1"><?php echo "KES ".number_format($qn_paid_month, 2);?></div>
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
                                            <h6 class="mt-1">Answers Available</h6>
                                            <div class="fs--2 mt-3">
                                                <div class="d-flex flex-between-center mb-1">
                                                    <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">All</span></div>
                                                    <div class="d-xxl-none"><?php echo $qn_all;?></div>
                                                </div>
                                                <div class="d-flex flex-between-center mb-1">
                                                    <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Purchased</span></div>
                                                    <div class="d-xxl-none"><?php echo $qn_pay;?></div>
                                                </div>
                                                <div class="d-flex flex-between-center mb-1">
                                                    <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Free</span></div>
                                                    <div class="d-xxl-none"><?php echo $qn_free;?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto position-relative">
                                            <div class="echart-market-share"></div>
                                            <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2"><?php echo $qn_all;?></div>
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
                                    <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <h6 class="mb-0">Latest viewed Questions</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <?php
                                        foreach ($question_viewed as $question) {
                                            $qu_id = $question['View_Question'];
                                            $qu_info = $this->mod_questions->get_question_by_id($qu_id);

                                            if (!empty($qu_info)) {
                                echo '
                                    <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                        <div class="col-3 ps-card py-1 position-static">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-xl me-3">
                                                    <div class="avatar-name rounded-circle bg-soft-primary text-dark">
                                                        <span class="fs-0 text-primary">Q/A</span>
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 d-flex">
                                                        <a class="text-800 stretched-link" href="'.base_url("search/answer/id?q_name=".urlencode($this->mod_crypt->Dec_String($qu_info->Qn_Name))).'">'.word_limiter(htmlentities($this->mod_crypt->Dec_String($qu_info->Qn_Name)), 50).'</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-1">
                                                    <h6 class="mb-0 d-flex align-items-center">
                                                        '.date('M d H:i A',$qu_info->Qn_Created).'
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row flex-end-center g-0">
                                                <div class="col-12 pe-2">
                                                    <div class="fs--1 fw-semi-bold">
                                                    '.word_limiter(htmlentities($this->mod_crypt->Dec_String($qu_info->Qn_Answer)), 20).'
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                                            }

                                            
                                        }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>