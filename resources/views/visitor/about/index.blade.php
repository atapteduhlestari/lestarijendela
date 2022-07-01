@extends('layouts.visitor.master')
@section('title', 'About | Lestari Jendela')
@section('content')
    <section class="bg-breadcrumb txt-center d-flex align-items-center justify-content-center">
        <h2 class="ltext-105 cl0">
            About
        </h2>
    </section>

    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            {{ $about->name }}
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            {{ $about->description }}
                        </p>

                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="/assets/visitor/images/about.jpg" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


@endsection
