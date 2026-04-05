@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Tracking Parcels' subtitle='Tracking Parcels' />

    <!-- Quote Section Start -->
    <section class="tracking-page sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tracking-form2" style="background-image: url({{ asset('images/ship.jpg') }});">
                        <div class="form-inner round">
                            <h2 class="display-3">Package Tracking</h2>
                            <form action="#">
                                @csrf
                                <div class="row g-5">
                                    <div class="col-lg-6">
                                        <label for="id">Tracking ID</label>
                                        <input type="text" placeholder="Tracking ID">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="id">Email Address</label>
                                        <input type="email" placeholder="info@example.com">
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <button class="btn btn-primary w-100">Track & trach <i
                                                class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->

@endsection
