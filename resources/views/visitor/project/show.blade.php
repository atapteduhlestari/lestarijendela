@extends('layouts.visitor.master')
@section('title', 'Gallery | Lestari Jendela | ' . $project->title)
@section('content')

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/node_modules" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="/home/gallery" class="stext-109 cl8 hov-cl1 trans-04">
                Gallery
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                {{ $project->title }}
            </span>
        </div>
    </div>


    <!-- project Detail -->
    <section class="sec-project-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            @if ($project->images->count() > 0)
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                            @endif
                            <div class="slick3 gallery-lb">
                                @if ($project->images->isEmpty())
                                    <img src="/assets/img/no-image.png" class="img-responsive h-350 rounded"
                                        alt="IMG-project">
                                @endif

                                @foreach ($project->images as $image)
                                    <div class="item-slick3" data-thumb="{{ '/storage/' . $image->url }}">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="{{ '/storage/' . $image->url }}"
                                                class="img-responsive h-350 rounded" alt="IMG-project">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                href="{{ '/storage/' . $image->url }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 p-b-10">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <div class="table-responsive stext-102 cl3">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Title</th>
                                    <td>:</td>
                                    <td>{{ $project->title }}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>:</td>
                                    <td>
                                        <a class="stext-102 cl3 hov-cl1"
                                            href="/home/gallery/category/{{ $project->category->slug }}">
                                            {{ $project->category->title }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Product</th>
                                    <td>:</td>
                                    <td>
                                        {{ $project->product->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <td>:</td>
                                    <td>{{ $project->year }}</td>
                                </tr>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
@endpush
