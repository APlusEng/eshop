@extends('layouts.navbar')
@section('content')
        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>PAGE NOT FOUND</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li class="active">404</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->
        
        <!-- 404-area start -->
        <div class="error-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="error-wrap">
                            <img src="assets/images/404.png" alt="">
                            <h3>The Requested Page Cannot Be Found</h3>
                            <p>You May Have Mistyped The Address Or The Page May Have Moved</p>
                            <ul>
                                <li><a href="index.html"><i class="fa fa-home"></i> Back To Home</a></li>
                                <li><a href="contact.html"><i class="fa fa-envelope"></i> Contact With US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404-area end -->

@endsection