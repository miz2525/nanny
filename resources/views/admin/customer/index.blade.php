@extends('admin.layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - All Customers @endsection

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
                    <li class="breadcrumb-item active">All Customers</li>
                </ol>
            </div>
            <h4 class="page-title">
                All Customers
            </h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Account created</th>
                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td>$Name</td>
                            <td>$Email</td>
                            <td><a href="https://wa.me/971568264577">+971568264577</a></td>
                            <td>21 Apr 2023</td>
                        </tr>
                        <tr>
                            <td>$Name</td>
                            <td>$Lname</td>
                            <td><a href="https://wa.me/971568264577">+971568264577</a></td>
                            <td>21 Apr 2023</td>
                        </tr>
                        <tr>
                            <td>$Name</td>
                            <td>$Lname</td>
                            <td><a href="https://wa.me/971568264577">+971568264577</a></td>
                            <td>21 Apr 2023</td>
                        </tr>
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
