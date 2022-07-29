@extends('layouts.dashboard.master')
@section('title', 'Branch')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')

    <div class="container">
        <a href="/branch" class="btn btn-outline-success text-xs mb-3">
            <i class="far fa-arrow-alt-circle-left"></i> Back to Table </a>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-center">Update Branch</h6>
            </div>
            <div class="card-body">
                <form action="/branch/{{ $branch->id }}" method="POST" id="formAdd" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Nama SBU</label>
                            <input type="text" class="form-control @error('nama_sbu') is-invalid @enderror"
                                name="nama_sbu" value="{{ old('nama_sbu', $branch->nama_sbu) }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="category_id">Alamat</label>
                            <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" style="height: 100%" name="alamat">{{ old('alamat', $branch->alamat) }} </textarea>
                        </div>
                    </div>
                    <br>
                    <button type="submit" id="btnSubmit" class="btn btn-primary"> <i class="fas fa-edit"></i>
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
