@extends('layouts.visitor.master')
@section('title', 'FAQs | Lestari Jendela')
@section('content')
    <section class="bg-breadcrumb txt-center d-flex align-items-center justify-content-center">
        <h2 class="ltext-105 cl0">
            FAQs
        </h2>
    </section>

    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <h3 class="mb-3">FAQs</h3>
            <div class="card">

                @foreach ($faqs as $faq)
                <div class="accordion" id="accordionExample">
                   
                      <div class="card-header btn-hijau" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left text-white" type="button" data-toggle="collapse" data-target="#collapseOne{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">
                          {{$faq->question}}
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne{{$faq->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                         {{$faq->answer}}
                        </div>
                      </div>
                      @endforeach
        </div>
    </section>

@endsection
