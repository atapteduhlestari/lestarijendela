@extends('layouts.visitor.master')
@push('styles')
    <link href="/assets/visitor/vendor/selectize/selectize.css" rel="stylesheet">
@endpush
@section('title', 'Gallery')
@section('content')


@endsection
@push('scripts')
    <script src="/assets/visitor/vendor/selectize/selectize.js"></script>
    <script>
        $("#category").selectize({
            create: false,
            sortField: "text",
        });
    </script>
@endpush
