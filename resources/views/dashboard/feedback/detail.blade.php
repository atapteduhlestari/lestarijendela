@extends('layouts.dashboard.master')
@section('title', 'Feedback-detail | Lestari Jendela')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')

<div class="container-fluid">

    <a href="/feedback" class="btn btn-outline-success text-xs mb-3"> 
        <i class="far fa-arrow-alt-circle-left"></i> Back to Table </a>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h6 class="text-center"> <strong>Detail Feedback</strong> </h6>
        </div>

        <div class="card-body">
            <form>
                <div class="row">
                  <div class="col-md-6">
                    <label for=""> <strong>From :</strong> </label>
                    <input type="text" class="form-control" value="{{$feedback->email}}"  readonly>
                  </div>
                 
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <label for=""> <strong>Description</strong> </label>
                      <textarea type="text" class="form-control" style="height: 18rem" readonly> {{$feedback->description}} </textarea>
                    </div>
                  </div>
              </form>
        </div>
    </div>
</div>

@endsection