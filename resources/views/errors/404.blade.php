@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('image')
    <img src="/assets/dashboard/img/undraw_rocket.svg" alt="">
@endsection
