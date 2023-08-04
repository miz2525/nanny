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
    <div class="col-6">
        <b>Statuses:</b>
        {{$nannies->where('status', 'active')->count()}} active
        <i class="mdi mdi-circle-small"></i>
        {{$nannies->where('status', 'under_review')->count()}} under review
        <i class="mdi mdi-circle-small"></i>
        {{$nannies->where('status', 'not_active')->count()}} not active
    </div>
    <div class="col-6">
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
                                <td>
                                    <a href="{{ route('admin.nanny.edit', $nanny->id) }}">Edit</a>
                                    <i class="mdi mdi-circle-small"></i>
                                    <a href="{{ route('nanny.profile', $nanny->id) }}" target="_blank">View</a>
                                    <i class="mdi mdi-circle-small"></i>
                                    <a href="javascript:;" onclick="LoadNannyProfile({{$nanny->id}})">WhatsApp</a>
                                </td>
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
<!-- Standard modal content -->
<div id="whatsapp-messages" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">WhatsApp messages</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="whatsapp-messages-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
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
    function send_whatsapp_message(type) {
        var phone_number = $('#nanny_phone_number').val();
        var message = `https://wa.me/${phone_number}?text=`;
        console.log(type, $('#message-one-text').text());
        if(type==1){
            message += $('#message-one-text').val();
        }

        if(type==2){
            message += $('#message-two-text').val();
        }
        // console.log(message);
        window.open(message);
    }
    function LoadNannyProfile(nanny_id) {
        http('GET', 'load-nanny-profile/'+nanny_id, {}).then((data)=>{
            $('#whatsapp-messages-body').html(data);
            $('#whatsapp-messages').modal('show');
        });
    }

    var http = function(type, url, formData){
        var self = this;
        return new Promise(function (resolve, reject) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url: url,
                type: type,
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(e){
                    resolve(e);
                },
                error: function(err) {
                    console.log(err);
                    if (err.status == 422 || err.status == 500) {
                        // self.notification('error', 'Some Error Occured, please try again.');
                    }
                }
            });
        });
    }
</script>
@endsection
