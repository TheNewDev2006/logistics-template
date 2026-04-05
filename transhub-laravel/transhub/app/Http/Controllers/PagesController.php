<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function services()
    {
        return view('pages.services');
    }

    public function services_2()
    {
        return view('pages.services-2');
    }

    public function single_service()
    {
        return view('pages.single-service');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function quote()
    {
        return view('pages.quote');
    }

    public function tracking()
    {
        return view('pages.tracking');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function single_team()
    {
        return view('pages.single-team');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function single_product()
    {
        return view('pages.single-product');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function not_found()
    {
        return view('pages.404');
    }

    public function case_studies()
    {
        return view('pages.case-studies');
    }

    public function case_studies_2()
    {
        return view('pages.case-studies-2');
    }

    public function single_casestudy()
    {
        return view('pages.single-casestudy');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blog_2()
    {
        return view('pages.blog-2');
    }

    public function blog_classic()
    {
        return view('pages.blog-classic');
    }

    public function single_post()
    {
        return view('pages.single-post');
    }

    public function single_post_2()
    {
        return view('pages.single-post-2');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}