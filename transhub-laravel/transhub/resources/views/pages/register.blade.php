@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Register' subtitle='Register' />


    <!-- Promo Section End -->
    <section class="signup-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="contact-form2 bg-shade  rounded-3 shadow-sm border p-5">
                        <h2 class="h4 fw-normal mb-5"> Create your Account</h2>
                        <form role="form" class="row">
                            @csrf
                            <div class="form-group mb-4 col-lg-12">
                                <label for="username">User Name :</label>
                                <input class="form-control" type="text" id="username" placeholder="Enter username">
                            </div>
                            <div class="form-group mb-4 col-lg-6">
                                <label for="fname">First Name :</label>
                                <input id="fname" class="form-control" type="text" placeholder="Enter first name">


                            </div>
                            <div class="form-group mb-4 col-lg-6">
                                <label for="lname">Last Name :</label>
                                <input id="lname" class="form-control" type="text" placeholder="Enter last name">

                            </div>


                            <div class="form-group mb-4 col-lg-12">
                                <label for="email">Email:</label>
                                <input class="form-control" type="email" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group mb-4 col-lg-12">
                                <label for="pwd">Password:</label>
                                <input class="form-control" type="password" id="pwd" placeholder="Enter password">
                            </div>
                            <div class="form-group mb-4 col-lg-12">
                                <label for="pass-c">Confirm Password:</label>
                                <input class="form-control" type="password" id="pass-c" placeholder="Confirm password">
                            </div>
                            <button class="btn btn-primary">Submit US<i class="fa fa-arrow-right"></i></button>
                            <div class="login-bottom mt-4">
                                <label><i class="fa fa-user me-2"></i> Already have an account to <a
                                        href="{{ route('login') }}">Log
                                        In</a> here</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- LOGING AREA END -->
        </div>
    </section>
    <!-- Footer Start -->

@endsection
