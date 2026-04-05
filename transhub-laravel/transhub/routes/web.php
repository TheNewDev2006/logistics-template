<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])
    ->name('index');

Route::get('/index-2', [HomeController::class, 'index_2'])
    ->name('index-2');

Route::get('/index-3', [HomeController::class, 'index_3'])
    ->name('index-3');

Route::get('/services', [PagesController::class, 'services'])
    ->name('services');

Route::get('/services-2', [PagesController::class, 'services_2'])
    ->name('services-2');

Route::get('/single-service', [PagesController::class, 'single_service'])
    ->name('single-service');

Route::get('/about', [PagesController::class, 'about'])
    ->name('about');

Route::get('/quote', [PagesController::class, 'quote'])
    ->name('quote');

Route::get('/tracking', [PagesController::class, 'tracking'])
    ->name('tracking');

Route::get('/team', [PagesController::class, 'team'])
    ->name('team');

Route::get('/single-team', [PagesController::class, 'single_team'])
    ->name('single-team');

Route::get('/shop', [PagesController::class, 'shop'])
    ->name('shop');

Route::get('/single-product', [PagesController::class, 'single_product'])
    ->name('single-product');

Route::get('/cart', [PagesController::class, 'cart'])
    ->name('cart');

Route::get('/checkout', [PagesController::class, 'checkout'])
    ->name('checkout');

Route::get('/login', [PagesController::class, 'login'])
    ->name('login');

Route::get('/register', [PagesController::class, 'register'])
    ->name('register');

Route::get('/pricing', [PagesController::class, 'pricing'])
    ->name('pricing');

Route::get('/faq', [PagesController::class, 'faq'])
    ->name('faq');

Route::get('/404', [PagesController::class, 'not_found'])
    ->name('404');

Route::get('/case-studies', [PagesController::class, 'case_studies'])
    ->name('case-studies');

Route::get('/case-studies-2', [PagesController::class, 'case_studies_2'])
    ->name('case-studies-2');

Route::get('/single-casestudy', [PagesController::class, 'single_casestudy'])
    ->name('single-casestudy');

Route::get('/blog', [PagesController::class, 'blog'])
    ->name('blog');

Route::get('/blog-2', [PagesController::class, 'blog_2'])
    ->name('blog-2');

Route::get('/blog-classic', [PagesController::class, 'blog_classic'])
    ->name('blog-classic');

Route::get('/single-post', [PagesController::class, 'single_post'])
    ->name('single-post');

Route::get('/single-post-2', [PagesController::class, 'single_post_2'])
    ->name('single-post-2');

Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::fallback(function () {
    return view('pages.404');
});