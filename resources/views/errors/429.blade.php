@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@section('image')
    <img src="/assets/dashboard/img/undraw_rocket.svg" alt="">
@endsection
