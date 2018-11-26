<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TattooZ - Blog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- all css here -->
        <!-- bootstrap v3.3.7 css -->
       <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <!-- owl.carousel.2.0.0-beta.2.4 css -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
        <!-- font-awesome v4.6.3 css -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <!-- magnific-popup.css -->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <!-- flaticon.css -->
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <!-- slicknav.min.css -->
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- modernizr css -->
        <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
@extends('layouts.navbar')
@section('content')
        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Shopping Cart</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li class="active">Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

		
		<!-- cart-area start -->
		<div class="cart-area bg-1 ptb-130">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-xs-12">
						<div class="shoping-cart-wrap table-responsive  bg-2 mb-30">
							<table>
								<thead>
									<tr>
										<th class="shoping-cart-img">Image</th>
										<th class="shoping-cart-name">Product Details</th>
										<th class="shoping-cart-price">Price</th>
										<th class="shoping-cart-quantity">Quantity</th>
										<th class="shoping-cart-total">Total</th>
										<th class="shoping-cart-remove">Remove</th>
									</tr>
								</thead>
							</table>
							<div class="table-wrap bg-2">
								<table>
									<tbody>
										<tr>
											<td class="shoping-cart-img">
												<img src="assets/images/cart/1.jpg" alt="" />
											</td>
											<td class="shoping-cart-name">
												<a href="#">Chomok Website Mock Up</a>
											</td>
											<td class="shoping-cart-price">
												<span>$15.00</span>
											</td>
											<td class="shoping-cart-quantity">
												<input type="number" value="2"/>
											</td>
											<td class="shoping-cart-total">
												<span>$30.00</span>
											</td>
											<td class="shoping-cart-remove">
												<a href="#"><i class="fa fa-times"></i></a>
											</td>
										</tr>
										<tr>
											<td class="shoping-cart-img">
												<img src="assets/images/cart/2.jpg" alt="" />
											</td>
											<td class="shoping-cart-name">
												<a href="#">Tree Inspiration Logo Template</a>
											</td>
											<td class="shoping-cart-price">
												<span>$20.00</span>
											</td>
											<td class="shoping-cart-quantity">
												<input type="number" value="1"/>
											</td>
											<td class="shoping-cart-total">
												<span>$45.00</span>
											</td>
											<td class="shoping-cart-remove">
												<a href="#"><i class="fa fa-times"></i></a>
											</td>
										</tr>
										<tr>
											<td class="shoping-cart-img">
												<img src="assets/images/cart/3.jpg" alt="" />
											</td>
											<td class="shoping-cart-name">
												<a href="#">Music Player UI Sets</a>
											</td>
											<td class="shoping-cart-price">
												<span>$25.00</span>
											</td>
											<td class="shoping-cart-quantity">
												<input type="number" value="3"/>
											</td>
											<td class="shoping-cart-total">
												<span>$40.00</span>
											</td>
											<td class="shoping-cart-remove">
												<a href="#"><i class="fa fa-times"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="shoping-cart-btn">
									<a href="#">Update Cart</a>
									<a href="#">Continue Shopping</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-xs-12">
								<aside class="sidebar-wrap">
									<!-- flow-area -->
									<div class="widget cart-form-wrap bg-2">
										<h3 class="widget-title">Redeem Coupon</h3>
										<input type="text" placeholder="Enter your coupon code..."/>
										<button>Apply Coupon Code</button>
									</div>
									<div class="cart-form-wrap bg-2">
										<h3 class="widget-title">Calculate Shipping</h3>
										<select name="select" >
											<option value="Select your Country...">Select your Country...</option>
											<option>Bangladesh</option>
											<option>India</option>
											<option>Pakistan</option>
											<option>Chaina</option>
										</select>
										<select name="select" >
											<option value="State / City">State / City</option>
											<option>Dhaka</option>
											<option>India</option>
											<option>Pakistan</option>
											<option>Chaina</option>
										</select>
										<input type="text" placeholder="Postcode / ZIP"/>
										<button>Calculate Shipping</button>
									</div>
									<!-- flow-area -->
								</aside>
							</div>
							<div class="col-md-8 col-xs-12">
								<div class="shoping-cart-wrapper cart-form-wrap bg-2">
									<h3 class="widget-title">Cart Totals</h3>
									<ul>
										<li>Cart Subtotal <span>$74.00</span></li>
										<li>Shipping <span>$15.00</span></li>
										<li>Cart Total <span>$155.00</span></li>
									</ul>
									<button>Proceed To Checkout</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- cart-area end -->
@endsection