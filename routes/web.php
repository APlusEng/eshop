<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
	return view('layouts.app');
});
// Route for Home
Route::get('home', function(){
	return view('layouts.app');
});
Route::get('pages/index', function(){
	return view('pages.index');
});
Route::get('pages/index2', function(){
	return view('pages.index2');
});
Route::get('pages/index3', function(){
	return view('pages.index3');
});


// route for services
Route::get('pages/service', function(){
	return view('pages.service');
});
Route::get('pages/service2', function(){
	return view('pages.service2');
});
Route::get('pages/service3', function(){
	return view('pages.service3');
});


// Route for pages

Route::get('pages/404', function(){
	return view('pages.404');
});

Route::get('pages/about', function(){
	return view('pages.about');
});

Route::get('pages/project', function(){
	return view('pages.project');
});

Route::get('pages/booking', function(){
	return view('pages.booking');
});

Route::get('pages/pricing', function(){
	return view('pages.pricing');
});


// route for blog
Route::get('pages/blog', function(){
	return view('pages.blog');
});
Route::get('pages/blog2', function(){
	return view('pages.blog2');
});
Route::get('pages/blog-left', function(){
	return view('pages.blog-left');
});
Route::get('pages/blog-right', function(){
	return view('pages.blog-right');
});
Route::get('pages/blog-details', function(){
	return view('pages.blog-details');
});




Route::get('pages/team', function(){
	return view('pages.team');
});

Route::get('pages/contact', function(){
	return view('pages.contact');
});

// route for shop

Route::get('pages/shop', function(){
	return view('pages.shop');
});
Route::get('pages/checkout', function(){
	return view('pages.checkout');
});
Route::get('pages/cart', function(){
	return view('pages.cart');
});

// route for team 

Route::get('pages/team', function(){
	return view('pages.team');
});
Route::get('pages/team2', function(){
	return view('pages.team2');
});






// Route::resource('pages', 'PageController');