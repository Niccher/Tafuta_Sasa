<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md-6">
                <h5 class="mb-2 mb-md-0">Pay for the order.</h5>
            </div>
            <div class="col-md-6">
            	<?php $url_id = urlencode($this->mod_crypt->Enc_String($orders_info['Ord_Id'])); ?>
            	<div class="d-flex flex-row-reverse">
                	<a href="<?php echo  base_url('client/orders/edit/'.$url_id) ?>" class="p-2 btn btn-outline-primary btn-sm me-1 mb-1">
                		<span class="far fa-edit me-1" data-fa-transform="shrink-3"></span>Edit
                	</a>
                	<a href="<?php echo  base_url('client/orders') ?>" class="p-2 btn btn-outline-success btn-sm me-1 mb-1" type="button">
            			<span class="fas fa-arrow-alt-circle-left me-1" data-fa-transform="shrink-3"></span>Back to Orders
                	</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-primary mb-1">
                	<?php echo $this->mod_crypt->Dec_String($orders_info['Ord_Name']); ?>
                </h3>
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
                            echo " $ ".number_format($this->mod_crypt->Dec_String($orders_info['Ord_Price']), 2);  ?>
                        </h4>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>    
                            
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_51JAW36LbL1tUcWWUqOumhoq39YMVXytWgq4iXQVCCGuZXXvTCzs32ZH3SdFFboDsBLZs0BhoqJvF80DegHAj63oM00LnDKtNxp');
    
    //callback to handle the response from stripe
    function stripeResponseHandler(status, response) {
        if (response.error) {
            //enable the submit button
            $('#payBtn').removeAttr("disabled");
            //display the errors on the form
            // $('#payment-errors').attr('hidden', 'false');
            $('#payment-errors').addClass('alert alert-danger');
            $("#payment-errors").html(response.error.message);
        } else {
            var form$ = $("#paymentFrm");
            //get token id
            var token = response['id'];
            //insert the token into the form
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            //submit form to the server
            form$.get(0).submit();
        }
    }
    $(document).ready(function() {
        //on form submit
        $("#paymentFrm").submit(function(event) {
            //disable the submit button to prevent repeated clicks
            $('#payBtn').attr("disabled", "disabled");
            
            //create single-use token to charge the user
            Stripe.createToken({
                number: $('#card_num').val(),
                cvc: $('#card-cvc').val(),
                exp_month: $('#card-expiry-month').val(),
                exp_year: $('#card-expiry-year').val()
            }, stripeResponseHandler);
            
            //submit from callback
            return false;
        });
    });
</script>

<?php 
    $stripeDetails = array(
        "secretKey" => "sk_test_51JAW36LbL1tUcWWUdDb7iU1Y1BmimlhcMGEfvvvW5rBkhWfTXELXLAqU8u5uU7B2STPBhyCXpZz1OAlgpLMFrbBz00yjr5sREd",
        "publishableKey" => "pk_test_51JAW36LbL1tUcWWUqOumhoq39YMVXytWgq4iXQVCCGuZXXvTCzs32ZH3SdFFboDsBLZs0BhoqJvF80DegHAj63oM00LnDKtNxp"
    );  

    $order_name = $this->mod_crypt->Dec_String($orders_info['Ord_Name']);
    $cost = $this->mod_crypt->Dec_String($orders_info['Ord_Price']);
    $order_cost = (((int)$cost) * 110);
    $order_deadline = date('M d H:i A', strtotime($this->mod_crypt->Dec_String($orders_info['Ord_Deadline'])));   
?>


<div class="row g-0">
    <div class="col-lg-8 pe-lg-2 mb-3">
        <div class="card h-100">
            <div class="card-header">
                <h5 class="mb-0">Payment information</h5>
            </div>
            <div class="card-body bg-light">
                <div class="form-check mb-0">
                	<input class="form-check-input" type="radio" value="" id="paypal" name="billing" /><label class="form-check-label mb-0 d-block" for="paypal">
                		<img src="<?php echo base_url('assets/img/icons/icon-paypal-full.png') ?>" height="20" alt="" />
                	</label>
                </div>
                <p class="fs--1 mb-4">Pay with PayPal, Apple Pay, PayPal Credit and much more</p>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6 offset-md-3">
                    	<button class="btn btn-outline-primary">Proceed with PayPal</button>
                    </div>
                </div>
                <hr /><br><hr />
                <div class="form-check mb-0">
                	<input class="form-check-input" type="radio" value="" id="credit-card" checked="checked" name="billing" />
                	<label class="form-check-label d-flex align-items-center mb-0" for="credit-card"><span class="fs-1 text-nowrap">Credit Card</span>
                		<img class="d-none d-sm-inline-block ms-2 mt-lg-0" src="<?php echo base_url('assets/img/icons/icon-payment-methods.png') ?>" height="20" alt="" />
                	</label>
                </div>
                <p class="fs--1 mb-4">Safe money transfer using your bank accounts. Visa, maestro, discover, american express.</p>

                <div class="row gx-3 mb-3">
                    <div class="col-md-6 offset-md-3">
                        <?php
                            echo '
                                <div class="col-4 text-center">
                                    <form action="'.base_url("client/pay/".urlencode($this->mod_crypt->Enc_String($orders_info['Ord_Id'])).'" method="POST">
                                        <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="'.$stripeDetails['publishableKey'].'"
                                            data-amount="'.$order_cost.'"
                                            data-name="'.$order_name).'"
                                            data-description="Pay Before '.$order_deadline.'"
                                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                            data-locale="auto">
                                        </script>
                                    </form>
                                </div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2 mb-3">
        <div class="card h-100">
            <div class="card-header">
                <h5 class="mb-0">Billing</h5>
            </div>
            <div class="card-body bg-light">
                <div class="d-flex justify-content-between fs--1 mb-1 text-info">
                    <p class="mb-0">Price</p>
                    <span>KES <?php echo number_format( ((int)$order_cost),2); ?></span>
                </div>
                <div class="d-flex justify-content-between fs--1 mb-1 text-primary">
                    <p class="mb-0">Additional Payments</p>
                    <span>$00.00</span>
                </div>
                <hr />
                <div class="d-flex justify-content-between fs--1 mb-1 text-success">
                    <p class="mb-0">Total</p>
                    <span>KES <?php echo number_format( ((int)$order_cost),2); ?></span>
                </div>
                <hr />
            </div>
        </div>
    </div>
</div>
