@extends('admin.layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - All Nannies @endsection

@section('styles')
<style>
    .dataTables_filter{float: right;}
</style>
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">All Nannies</li>
                </ol>
            </div>
            <h4 class="page-title">
                All Nannies
            </h4>
            @include( 'admin.layouts.partials.errors-display' )
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row" style="margin-bottom: 1%;">
    <div class="col-12">
        <a href="{{ route('admin.nanny.add') }}" class="btn btn-outline-primary btn-rounded btn-xs waves-effect waves-light" style="float: right;">Add New</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Phone number</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Last updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($nannies as $nanny)
                            <tr>
                                <td>{{ $nanny->id }}</td>
                                <td>{{ $nanny->first_name }}</td>
                                <td>{{ $nanny->family_name }}</td>
                                <td><a href="https://web.whatsapp.com/send?phone={{ str_replace('-', '', str_replace(' ', '', str_replace(')', '', str_replace('(', '', $nanny->phone_number)))) }}&text=Hi, I am contacting you on behalf of NannyGenie" target="_blank">{{ $nanny->phone_number }}</a></td>
                                <td>{!! GetNannyStatusSpan($nanny->status) !!}</td>
                                <td>{{date('d/m/Y', strtotime($nanny->created_at))}}</td>
                                <td>{{date('d/m/Y', strtotime($nanny->updated_at))}}</td>
                                <td><a href="{{ route('admin.nanny.edit', $nanny->id) }}">Edit</a><i class="mdi mdi-circle-small"></i><a href="{{ route('nanny.profile', $nanny->id) }}" target="_blank">View</a></td>
                            </tr>
                        @endforeach
                        
                        {{-- <tr>
                            <td>$Fname</td>
                            <td>$Lname</td>
                            <td><a href="">+971568264577</a></td>
                            <td><span class="badge badge-outline-warning">Under review</span></td>
                            <td>30/03/20023</td>
                            <td><a href="{{ route('admin.nanny.add') }}">Edit</a></td>
                        </tr>
                        <tr>
                            <td>$Fname</td>
                            <td>$Lname</td>
                            <td><a href="">+971568264577</a></td>
                            <td><span class="badge badge-outline-secondary">Not active</span></td>
                            <td>30/03/20023</td>
                            <td><a href="{{ route('admin.nanny.add') }}">Edit</a></td>
                        </tr> --}}
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection

@section('scripts')
<!-- third party js -->
<script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ asset('admin/js/pages/datatables.init.js') }}"></script>
@endsection
