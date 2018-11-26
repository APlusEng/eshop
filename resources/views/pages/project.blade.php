@extends('layouts.navbar')
@section('content')
        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Gallary</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li class="active">gallary</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- project-area start -->
        <div class="project-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="project-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".cat1">Body Design</button>
                            <button data-filter=".cat2">Hand Design</button>
                            <button data-filter=".cat3">Lag Design</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-2  cat3 cat2 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="assets/images/project/1.jpg" alt="">
                            <a href="assets/images/project/1.jpg" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat2 cat3 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="assets/images/project/2.jpg" alt="">
                            <a href="assets/images/project/2.jpg" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat1 cat2 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="assets/images/project/3.jpg" alt="">
                            <a href="assets/images/project/3.jpg" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat3 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="assets/images/project/4.jpg" alt="">
                            <a href="assets/images/project/4.jpg" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat2 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="assets/images/project/5.jpg" alt="">
                            <a href="assets/images/project/5.jpg" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat1 cat3 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="assets/images/project/6.jpg" alt="">
                            <a href="assets/images/project/6.jpg" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat3 cat1 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="assets/images/project/7.jpg" alt="">
                            <a href="assets/images/project/7.jpg" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat1 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="assets/images/project/8.jpg" alt="">
                            <a href="assets/images/project/8.jpg" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project-area end -->
@endsection