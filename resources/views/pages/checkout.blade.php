@extends('layouts.navbar')
@section('content')
        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Checkout</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li class="active">Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->
		
		<!-- checkout-area start -->
		<div class="checkout-area ptb-130 bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="checkout-form-wrap mb-30">
							<h3 class="checkout-title">Billing Information</h3>
							<div class="checkout-form">
								<div class="row">
									<div class="col-md-6">
										<p>First Name <span>*</span></p>
										<input type="text" placeholder="Your first name..."/>
									</div>
									<div class="col-md-6">
										<p>Last Name <span>*</span></p>
										<input type="text" placeholder="Your Last name..."/>
									</div>
									<div class="col-xs-12">
										<p>Company Name</p>
										<input type="text" placeholder="Your company name..."/>
									</div>
									<div class="col-md-6">
										<p>Phone <span>*</span></p>
										<input type="text" placeholder="Your phone..."/>
									</div>
									<div class="col-md-6">
										<p>Email Address <span>*</span></p>
										<input type="email" placeholder="Your email address..."/>
									</div>
									<div class="col-md-6">
										<p>Country <span>*</span></p>
										<select name="select">
											<option value="Select your Country...">Usa</option>
											<option>India</option>
											<option>Pakisthan</option>
											<option>Japan</option>
											<option>Bangladesh</option>
										</select>
									</div>
									<div class="col-md-6">
										<p>State / City <span>*</span></p>
										<select name="select">
											<option value="Select your Country...">Dhaka</option>
											<option>Jessor</option>
											<option>Khulna</option>
											<option>Japan</option>
											<option>Bangladesh</option>
										</select>
									</div>
									<div class="col-md-6">
										<p>Town <span>*</span></p>
										<select name="select">
											<option value="Select your Country...">Dhaka</option>
											<option>Jessor</option>
											<option>Khulna</option>
											<option>Japan</option>
											<option>Bangladesh</option>
										</select>
									</div>
									<div class="col-md-6">
										<p>EZIP / Post Code <span>*</span></p>
										<input type="email" placeholder="Your ZIP/Post Code here..."/>
									</div>
									<div class="col-xs-12">
										<p>Address <span>*</span></p>
										<input type="text" placeholder="Street address..."/>
										<input type="text" placeholder="Apartment, suite, unit etc. (optional)"/>
										<input type="checkbox" />
										<span>Ship to the same address</span>
									</div>
								</div>
							</div>
						</div>
						<div class="checkout-form-wrap">
							<h3 class="checkout-title">Shipping Information</h3>
							<div class="checkout-form">
								<div class="row">
									<div class="col-md-6">
										<p>First Name <span>*</span></p>
										<input type="text" placeholder="Your first name..."/>
									</div>
									<div class="col-md-6">
										<p>Last Name <span>*</span></p>
										<input type="text" placeholder="Your Last name..."/>
									</div>
									<div class="col-xs-12">
										<p>Company Name</p>
										<input type="text" placeholder="Your company name..."/>
									</div>
									<div class="col-md-6">
										<p>Phone <span>*</span></p>
										<input type="text" placeholder="Your phone..."/>
									</div>
									<div class="col-md-6">
										<p>Email Address <span>*</span></p>
										<input type="email" placeholder="Your email address..."/>
									</div>
									<div class="col-md-6">
										<p>Country <span>*</span></p>
										<select name="select">
											<option value="Select your Country...">Usa</option>
											<option>India</option>
											<option>Pakisthan</option>
											<option>Japan</option>
											<option>Bangladesh</option>
										</select>
									</div>
									<div class="col-md-6">
										<p>State / City <span>*</span></p>
										<select name="select">
											<option value="Select your Country...">Dhaka</option>
											<option>Jessor</option>
											<option>Khulna</option>
											<option>Japan</option>
											<option>Bangladesh</option>
										</select>
									</div>
									<div class="col-md-6">
										<p>Town <span>*</span></p>
										<select name="select">
											<option value="Select your Country...">Dhaka</option>
											<option>Jessor</option>
											<option>Khulna</option>
											<option>Japan</option>
											<option>Bangladesh</option>
										</select>
									</div>
									<div class="col-md-6">
										<p>EZIP / Post Code <span>*</span></p>
										<input type="email" placeholder="Your ZIP/Post Code here..."/>
									</div>
									<div class="col-xs-12">
										<p>Address <span>*</span></p>
										<input type="text" placeholder="Street address..."/>
										<input type="text" placeholder="Apartment, suite, unit etc. (optional)"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="checkout-form-wrap mb-30">
							<h3 class="checkout-title">Your Order</h3>
							<div class="checkout-form">
								<div class="row">
									<div class="col-xs-12">
										<ul>
											<li>Chomok Website Mock Up <span>x2</span> <strong>$30.00</strong></li>
											<li>Tree Inspiration Logo Template<span>x1</span> <strong>$25.00</strong></li>
											<li>Music Player UI Sets <span>x3</span> <strong>$19.00</strong></li>
										</ul>
									</div>
									<div class="col-md-6 col-md-offset-6 col-xs-12">
										<ul>
											<li><b>Cart Subtotal</b> <strong>$74.00</strong></li>
											<li><b>Shipping</b> <strong>$17.00</strong></li>
											<li class="last"><b>Cart Total</b> <strong>$91.00</strong></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="checkout-form-wrap mb-30">
							<h3 class="checkout-title">Payment & Confirmation</h3>
							<div class="checkout-form">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Direct Bank Transfer
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												Keep away from people who try to belittle your ambitions. Small people  always do that. Keep away forit astiil people who try to belittle your ami tions. Small peol always do that.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Check Payments
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												Keep away from people who try to belittle your ambitions. Small people always do that. Keep away forit astiil people who try to belittle your ami tions. Small peol always do that. 
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													Cash On Delivery
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												Keep away from people who try to belittle your ambitions. Small people  always do that. Keep away forit astiil people who try to belittle your ami tions. Small peol always do that.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" id="headingfour">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
													Paypal
												</a>
											</h4>
										</div>
										<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
											<div class="panel-body">
												Keep away from people who try to belittle your ambitions. Small people  always do that. Keep away forit astiil people who try to belittle your ami tions. Small peol always do that.
											</div>
										</div>
									</div>
								</div>
								 <a class="order" href="#">Place Your Order</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- checkout-area end -->
		
@endsection