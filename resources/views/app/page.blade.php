@extends('layouts.backend')
@section('content')
    <!-- Page Content -->
    <div class="row no-gutters justify-content-center bg-body-dark">
        <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
            <!-- Lock Block -->
            <!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
            <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-video" data-vide-bg="assets/media/videos/city_night" data-vide-options="posterType: jpg">
                <div class="row no-gutters">
                    <div class="col-md-6 order-md-1 bg-white">
                        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                            <!-- Header -->
                            <div class="mb-2 text-center">
                                <a class="link-fx text-success font-w700 font-size-h1" href="/">
                                    <span class="text-dark">{{ config('app.name') }}</span>
                                </a>
                            </div>
                            <!-- END Header -->

                            <!-- Lock Form -->
                            <div class="js-validation-lock">
                                <div class="form-group text-center">
                                    <a href="/" class="btn btn-block btn-hero-success" style="color: white">
                                        <i class="fa fa-fw fa-reply mr-1"></i> Lecture 2
                                    </a>
                                </div>
                            </div>
                            <!-- END Lock Form -->
                        </div>
                    </div>
                    <div class="col-md-6 order-md-0 bg-success-op d-flex align-items-center">
                        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6 text-center">
                            <div class="d-block text-white font-size-lg font-w600 mb-3">Thank you for the purchase!</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Lock Block -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
