@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Error 404 Page' subtitle='404 error' />


    <!-- Promo Section End -->

    <section class="error-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-wrap text-center mx-auto">
                        <img class="img-fluid" src="{{ asset('images/404.svg') }}" alt="404">
                        <div class="errot-txt">
                            <h2 class="display-3">Opp’s that page can’t be found</h2>
                            <p>It looks like nothing was found at this location. Maybe try one of
                                the links below or a search?</p>
                            <a href="{{ route('index') }}" class="btn btn-dark"><i class="fa-solid fa-house"></i> back to
                                home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Start -->

@endsection
