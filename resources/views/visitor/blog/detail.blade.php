@extends('layouts.visitor.master')
@push('styles')
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=62f5c4b7af6eee0019fb9742&product=inline-share-buttons'
        async='async'></script>
@endpush
@section('title', 'Blog | Lestari Jendela | ' . $post->title)
@section('content')
    <section class="bg0 p-t-52 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <!--  -->
                        <div class="wrap-pic-w how-pos5-parent">
                            <a href="/home/blog/{{ $post->slug }}"" class="hov-img0 how-pos5-parent">
                                <img loading="lazy" data-src="{{ $post->firstImage }}" src="{{ $post->firstImage }}"
                                    alt="{{ $post->slug }}" class="img-responsive h-300 lazy">

                                <div class="flex-col-c-m size-123 bg9 how-pos5">
                                    <span class="ltext-107 cl2 txt-center">
                                        {{ $post->created_at->format('d') }}
                                    </span>

                                    <span class="stext-109 cl3 txt-center">
                                        {{ $post->created_at->format('M Y') }}
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="p-t-32">
                            <span class="flex-w flex-m stext-111 cl2 p-b-19">
                                <span>
                                    {{ $post->created_at->diffForHumans() }}
                                    <span class="cl12 m-l-4 m-r-6">|</span>
                                </span>

                                <span>
                                    {{ $post->category->title }}
                                </span>
                            </span>

                            <h4 class="ltext-109 cl2 p-b-28">
                                {{ $post->title }}
                            </h4>

                            <p class="stext-117 cl6 p-b-26">
                                {!! $post->deskripsi !!}
                            </p>
                        </div>
                    </div>
                    <div class="p-t-50">
                        <span class="mtext-102 cl1">Share <i class="zmdi zmdi-caret-down"></i></span>
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 p-b-80">
                    <div class="side-menu">
                        <div class="bor17 of-hidden pos-relative">
                            <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search"
                                placeholder="Search">

                            <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </div>

                        <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Categories
                            </h4>
                            <ul>
                                @foreach ($categories as $data)
                                    <li class="bor18">
                                        <a href="/home/blog-category/{{ $data->slug }}"
                                            class="{{ $post->category->slug == $data->slug ? 'active ' : '' }}dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                            {{ $data->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-20">
                                Archive
                            </h4>
                            <ul>
                                <li class="p-b-7">
                                    @php
                                        $usermcount = [];
                                        $userArr = [];
                                    @endphp
                                    @foreach ($archives as $key => $value)
                                        <a href="/home/blog-archive/{{ $value->first()->created_at->format('m') }}/{{ $value->first()->created_at->format('Y') }}"
                                            class="{{ $post->category->slug == $data->slug ? 'active ' : '' }}dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                            <span>
                                                {{ $value->first()->created_at->format('F Y') }}
                                            </span>
                                            <span>
                                                ({{ $usermcount[(int) $key] = count($value) }})
                                            </span>
                                        </a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
