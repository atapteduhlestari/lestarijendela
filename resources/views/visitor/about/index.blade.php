@extends('layouts.visitor.master')
@section('title', 'About | Lestari Jendela')
@section('content')
    <section class="bg-breadcrumb txt-center d-flex align-items-center justify-content-center">
        <h2 class="ltext-105 cl0">
            About
        </h2>
    </section>
    <section class="bg0 p-b-120">
        <div class="container">
            <div class="row p-b-50 align-items-center">
                <div class="col-md-11 col-lg-11">
                    <div class="p-t-7 ">
                        {{-- <h3 class="mtext-111 cl2 p-b-16">
                            {{ $about->name }}
                        </h3> --}}
                        <div class="text-center">
                            <img loading="lazy" class="col-6 mb-3 text-center" src="/assets/img/logo.png"
                                alt="Lestari Jendela">
                        </div>
                        <p class="mtext-107 cl6">
                            {{-- {{ $about->description }} --}}
                            Lestari jendela merupakan produk kusen/frame, daun pintu dan jendela yang diproduksi oleh <span
                                class="font-weight-bold"><a class="cl1" href="https://roof-online.com/">PT Atap Teduh
                                    Lestari</a></span>.
                            Lestari Jendela memiliki 2 jenis
                            material yang
                            ditawarkan sebagai pilihan yaitu uPVC dan Aluminium.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-11 col-md-11 col-lg-11">
                    <div class="p-r-85 p-r-15-lg p-r-0-md">
                        <p class="mtext-107 cl6">
                            Lestari Jendela UPVC memakai standar profil merk <b>Tonish</b> pertama dan satu-satunya di
                            Indonesia.
                            <b>uPVC Tonish</b> merupakan merek profil uPVC yang terkemuka di Cina dan telah bersertifikat
                            ISO9001, CE, SGS,
                            RoHS, BV Audit. Material atau bahan profil UPVC Tonish mengandung Thermoplasic, Calcium, dan
                            Stablizer yang ramah lingkungan.
                        </p>
                    </div>
                </div>
                <div class="col-11 col-md-11 col-lg-11 p-b-26 p-t-26">
                    <div class="row">
                        <div class="hov-img0 col-4">
                            <img loading="lazy" src="/assets/img/mockup-1.png" alt="Lestari Jendela Mockup">
                        </div>
                        <div class="hov-img0 col-4">
                            <img loading="lazy" src="/assets/img/mockup-2.png" alt="Lestari Jendela Mockup">
                        </div>
                        <div class="hov-img0 col-4">
                            <img loading="lazy" src="/assets/img/mockup-3.png" alt="Lestari Jendela Mockup">
                        </div>
                    </div>
                    <div class="p-t-10">
                        <p class="mtext-107 cl6">
                            uPVC yang digunakan mengandung senyawa kimia <b>TiO2(Titanium dioxide)</b>, dimana membuat
                            profil
                            menjadi
                            tahan terhadap
                            sinar UV dan cuaca ekstrim sehingga warna tidak mudah berubah.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-11 col-lg-11 p-b-26">
                    <p class="mtext-107 cl6">
                        Proses produksi dilakukan menggunakan mesin cnc cutting dan seamless welding sehingga sambungan
                        antar
                        profile terlihat lebih rapi dan menyatu. Proses assembly produk untuk pintu dan jendela
                        dilakukan di
                        pabrik sehingga memudahkan dalam proses pemasangan dan tidak memerlukan proses cutting di
                        lapangan.
                    </p>
                </div>
                <div class="col-11 col-md-7 col-lg-7">
                    <div class="row">
                        <img loading="lazy" class="col" src="/assets/img/cnc.JPG"
                            alt="Lestari Jendela cnc cutting machine">
                        <img loading="lazy" class="col" src="/assets/img/seamless.JPG"
                            alt="Lestari Jendela seamless wielding machine">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-c-m flex-w w-full p-t-120">
            <a href="/home/contact#getInTouch" class="flex-c-m stext-301 cl1 size-103 bg3 bor1 hov-btn3 p-lr-15 trans-04">
                GET IN TOUCH
            </a>
        </div>
    </section>
@endsection
