<div class="card mb-3 mb-lg-0">
    <div class="card-header bg-light d-flex justify-content-between">
        <h5 class="mb-0">Events</h5>
        <form>
            <select class="form-select form-select-sm" id="event-topic" name="ans_subject">
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
        </form>
    </div>
    <div class="card-body fs--1">
        <div class="row">
            <?php
                foreach ($qn_list as $qn) {
                    if ($this->mod_crypt->Dec_String($qn['Qn_Pay']) == 'pay_free' ) {
                        $pays = '<span class="badge badge-soft-success rounded-pill">Free</span>';
                    }else /*($this->mod_crypt->Dec_String($qn['Qn_Pay']) == 'pay_sale' ) */{
                        $pays = '<span class="badge badge-soft-info rounded-pill">Pro</span>';
                    }

                    echo '
                        <div class="col-md-6 h-100">
                            <div class="border-dashed-bottom my-1"></div>
                            <div class="d-flex btn-reveal-trigger">
                                <div class="calendar">
                                    <span class="calendar-month">'.date('M', $qn['Qn_Created']).'</span><span class="calendar-day">'.date('d', $qn['Qn_Created']).'
                                    </span>
                                </div>
                                <div class="flex-1 position-relative ps-3">
                                    <h6 class="fs-0 mb-0">
                                        <a href="'.base_url('admin/questions/view').'">'.ucfirst($this->mod_crypt->Dec_String($qn["Qn_Name"])).'</a>
                                    </h6>
                                    Tags: '.$this->mod_crypt->Dec_String($qn["Qn_Tags"]).'
                                    <br>
                                    Level: '.$this->mod_crypt->Dec_String($qn["Qn_Level"]).'
                                    <br>
                                    Pay: '.$pays.'
                                    <p class="text-1000 mb-0">Created: '.date('F d H:i A', $qn['Qn_Created']).'</p>
                                </div>
                            </div>
                            <div class="border-dashed-bottom my-3"></div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
</div>
                    