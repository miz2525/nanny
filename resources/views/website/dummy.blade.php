@extends('layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} @endsection

@section('styles') <!-- Style Section --> @endsection

@section('header')
    @include('layouts._include._header')
@endsection

@section('content') <!-- Content Section --> @endsection

@section('footer')
    @include('layouts._include._footer')
@endsection

@section('scripts') <!-- Script Section --> @endsection