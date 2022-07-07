@extends('layouts.visitor.master')
@section('title', 'Blog | Lestari Jendela')
@section('content')
    <section class="bg-breadcrumb txt-center d-flex align-items-center justify-content-center">
        <h2 class="ltext-105 cl0 ">
            Blog
        </h2>
    </section>

    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <!-- item blog -->
                        @foreach ($posts as $data)
                            <div class="p-b-63">
                                <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                    <img src="{{ $data->firstImage }}" alt="IMG-BLOG" class="img-responsive h-300">

                                    <div class="flex-col-c-m size-123 bg9 how-pos5">
                                        <span class="ltext-107 cl2 txt-center">
                                            {{ $data->created_at->format('d') }}
                                        </span>

                                        <span class="stext-109 cl3 txt-center">
                                            {{ $data->created_at->format('M Y') }}
                                        </span>
                                    </div>
                                </a>

                                <div class="p-t-32">
                                    <h4 class="p-b-5">
                                        <a href="/home/blog/{{ $data->slug }}" class="ltext-108 cl2 hov-cl1 trans-04">
                                            {{ $data->title }}
                                        </a>
                                    </h4>
                                    <a href="" class="mtext-106 cl6 hov-cl1 trans-04">
                                        {{ $data->category->title }}
                                    </a>

                                    <p class="stext-117 cl6">
                                        {!! limitString($data->deskripsi, 300, '...') !!}
                                    </p>

                                    <div class="flex-w flex-sb-m p-t-18">
                                        <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                            <span>
                                                <span class="cl4">By</span> Admin
                                                <span class="cl12 m-l-4 m-r-6">|</span>
                                            </span>

                                        </span>

                                        <a href="/home/blog/{{ $data->slug }}"
                                            class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                            Continue Reading

                                            <i class="fa fa-long-arrow-right m-l-9"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- item blog -->


                        <!-- Pagination -->
                        <div class="d-flex justify-content-center">
                            {{ $posts->withQueryString()->links('pagination::custom') }}
                        </div>
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

                                @foreach ($categories as $category)
                                    <li class="bor18">
                                        <a href="/home/blog-category/{{ $category->slug }}"
                                            class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                            {{ $category->title }}
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
                                {{-- <li class="p-b-7">
                                   @php
                                         $usermcount = [];
                                        $userArr = [];
                                    foreach ($month as $key => $value) {
                                                $usermcount[(int)$key] = count($value);
                                            }

                                        for($i = 1; $i <= 12; $i++){
                                        if(!empty($usermcount[$i])){
                                           echo $userArr[$i] = $usermcount[$i]."<br>";    
                                        }else{
                                            echo $userArr[$i] = 0 ."<br>";    
                                        }
                                    }  

                                    
                                   @endphp
                                </li> --}}
                                
                                <li class="p-b-7">
                                    
                                    @php
                                       $usermcount = [];
                                        $userArr = [];
                                        @endphp

                                        @foreach ($archives as $key => $value)
                                            <a href="/home/blog-archive/{{$value->first()->created_at->format('m')}}/{{$value->first()->created_at->format('Y')}}" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">

                                                <span>
                                                   {{$value->first()->created_at->format('F Y')}}
                                                </span>

                                                <span>
                                                   ({{$usermcount[(int)$key] = count($value)}})
                                                </span>
                                            <a/>
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
