@extends('admin.layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - Dashboard @endsection

@section('styles') @endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">
                Dashboard
            </h4>
            


        </div>
    </div>
</div>
<!-- end page title -->
@endsection

@section('scripts') @endsection
