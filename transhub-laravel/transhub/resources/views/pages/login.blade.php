@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Login' subtitle='Login' />


    <!-- Promo Section End -->

    <section class="account-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="text-center mb-5 pb-lg-5">
                        <h2 class="sec-title">Login To Your Account</h2>
                        <p>Please log to access your account.</p>
                    </div>
                    <div class="account-form bg-mute rounded-4">
                        <div class="d-sm-flex justify-content-between mb-4">
                            <a href="#" class="btn btn-primary text-info">Login with Facebook</a>
                            <a href="#" class="btn btn-dark text-info">Login with Google</a>
                        </div>
                        <h5 class="h2 text-center mb-5">OR</h5>
                        <form action="#">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Username*" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password*" required="">
                            </div>
                            <div class="d-flex justify-content-between my-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="text-danger">Forget Password</a>
                            </div>
                            <button class="btn btn-primary w-100 mt-4">Login</button>
                        </form>
                        <div class="login-message text-center mt-5">
                            <p>Don’t have an account ? <a class="text-success" href="{{ route('register') }}"> Register Now
                                </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->

@endsection
