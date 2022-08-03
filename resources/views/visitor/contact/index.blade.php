@extends('layouts.visitor.master')
@section('title', 'Contact | Lestari Jendela')
@section('content')
    <section class="bg-breadcrumb txt-center d-flex align-items-center justify-content-center">
        <h2 class="ltext-105 cl0">
            Contact
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md" style="width: 100%">
                    <div class="row">
                        <div class="col">
                            <span class="fs-18 cl5 txt-center size-211">
                                <span class="lnr lnr-map-marker"></span>
                            </span>

                            <span class="mtext-110 cl2">
                                Address
                            </span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                                {{ $contact->address }}
                            </p>
                        </div>

                        <div class="col">
                            <span class="fs-18 cl5 txt-center size-211">
                                <span class="lnr lnr-phone-handset"></span>
                            </span>

                            <span class="mtext-110 cl2">
                                Lets Talk
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{ $contact->no_tlp }}
                            </p>
                        </div>

                        <div class="col">
                            <span class="fs-18 cl5 txt-center size-211">
                                <span class="lnr lnr-envelope"></span>
                            </span>

                            <span class="mtext-110 cl2">
                                Email
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{ $contact->email }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-center p-t-25 p-b-25">Our Branch</h4>
            <div class="row">
                @foreach ($sbu as $branch)
                    <div class="col-md-6">
                        <button class="btn btn-hijau btn-block mb-3 hov-cl2" type="button" data-toggle="collapse"
                            data-target="#collapseExample{{ $branch->id }}" aria-expanded="false"
                            aria-controls="collapseExample">
                            {{ $branch->nama_sbu }}
                        </button>
                        <div class="collapse" id="collapseExample{{ $branch->id }}">
                            <div class="card border-0">
                                <div class="card-body">
                                    {{ $branch->alamat }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md" style="width: 100%">
                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-map-marker"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Address
                            </span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                                {{ $contact->address }}
                            </p>

                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-phone-handset"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Lets Talk
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{ $contact->no_tlp }}
                            </p>

                        </div>
                    </div>

                    <div class="flex-w w-full">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-envelope"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Email
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{ $contact->email }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- Map -->
    <div class="card border-0">
        <div class="card-body">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=18WU3lzNbD547KXK8oLzTSGaqKu19hGY&ehbc=2E312F"
                style="width: 100%; height:350px"></iframe>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Page level plugins -->
    <script src="/assets/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="/assets/dashboard/js/demo/datatables-demo.js"></script>

    @if ($errors->any())
        <script>
            $('#addNewRecord').modal('show');
        </script>
    @endif
@endpush
