@extends('admin.layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} @endsection

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
                            <th style="display: none;">ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Account created</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td style="display: none;">{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>@if($customer->status=='approved') <span class="badge badge-soft-success">Approved</span>  @else <span class="badge badge-soft-secondary">New</span> @endif</td>
                            <td>{{$customer->email}}</td>
                            <td><a href="https://wa.me/{{$customer->phone}}" target="_blank">{{$customer->phone}}</a></td>
                            {{-- <td><a href="javascript:;">N/A</a></td> --}}
                            <td>{{date('d M Y', strtotime($customer->created_at))}}</td>
                            <td>
                                <a href="javascript:;" onclick="ChangeStatus({{$customer->id}}, '{{$customer->status}}')">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<div id="editCustomer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editCustomer" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.customer.change-status') }}" method="POST">
                @csrf
                <input type="hidden" name="customer_id" id="customer_id">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Edit customer</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Customer status</h5>
                    <div class="form-check mb-2">
                        <input class="form-check-input" id="statusNew" type="radio" name="status" value="new">
                        <label class="form-check-label" for="statusNew">New</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" id="statusApproved" type="radio" name="status" value="approved">
                        <label class="form-check-label" for="statusApproved">Approved</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
<script>
    function ChangeStatus(id, status) {
        $('#customer_id').val(id);
        $(`input[name=status][value=${status}]`).prop('checked', true);
        $('#editCustomer').modal('show');
    }
</script>
@endsection
