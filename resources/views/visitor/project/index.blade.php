@extends('layouts.visitor.master')
@push('styles')
    <link href="/assets/visitor/vendor/selectize/selectize.css" rel="stylesheet">
@endpush
@section('title', 'Gallery')
@section('content')
    <section class="bg-breadcrumb txt-center d-flex align-items-center justify-content-center">
        <h2 class="ltext-105 cl0">
            Gallery
        </h2>
    </section>
    <!-- project -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-10 align-items-center">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <div class="p-b-10 p-t-10">
                        @if (request('title') || request('category'))
                            <div class="p-t-15">
                                <table class="stext-105 table-sm table-borderless">
                                    @if (request('title'))
                                        <tr>
                                            <td>Title</td>
                                            <td>:</td>
                                            <td>{{ request('title') }}</td>
                                        </tr>
                                    @endif

                                    @if (request('category'))
                                        <tr>
                                            <td>Category</td>
                                            <td>:</td>
                                            <td>{{ request('category') }}</td>
                                        </tr>
                                    @endif

                                    <tr>
                                        <td>Results</td>
                                        <td>:</td>
                                        <td>{{ $projects->count() }}</td>
                                    </tr>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10 stext-106 cl6">
                    <form action="/home/gallery">
                        <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                            <div class="col-md-6 p-r-15 p-b-5">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input name="title" id="title" class="form-control" type="text"
                                        value="{{ request('title') }}">
                                </div>
                            </div>
                            <div class="col-md-6 p-r-15 p-b-5">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value=""></option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->slug }}"
                                                {{ $category->slug == request('category') ? 'selected' : '' }}>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 p-r-15 p-b-5">
                                <div class="form-group">
                                    <label for="">Product</label>
                                    <select name="product" id="product" class="form-control">
                                        <option value=""></option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->slug }}"
                                                {{ $product->slug == request('product') ? 'selected' : '' }}>
                                                {{ $product->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-5 p-lr-15-sm  p-b-10">
                            <div class="col-md-6 p-r-15">
                                <button class="btn btn-sm btn-outline-dark px-5" type="submit">
                                    <i class="zmdi zmdi-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row isotope-grid">
                @forelse ($projects as $project)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-t-35 p-b-35 isotope-item">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{ $project->firstImage }}" class="img-responsive h-200" alt="IMG-project">

                                <a href="/home/gallery/{{ $project->slug }}"
                                    class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                    See Detail
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l">
                                    <div class="d-flex">
                                        <span class="stext-104 cl4 trans-04 js-name-b2 p-b-6">
                                            {{ $project->category->title }}
                                        </span>
                                    </div>
                                    <a href="/home/gallery/{{ $project->slug }}" class="stext-105 cl3 hov-cl1">
                                        {{ $project->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="d-flex justify-content-center">
                {{ $projects->withQueryString()->links('pagination::custom') }}
            </div>

            {{-- <div class="flex-c-m flex-w w-full p-t-45">
                <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div> --}}
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/assets/visitor/vendor/selectize/selectize.js"></script>
    <script>
        $("#category").selectize({
            create: false,
            sortField: "text",
        });

        $("#product").selectize({
            create: false,
            sortField: "text",
        });
    </script>
@endpush
