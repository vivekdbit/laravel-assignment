@extends('master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">    
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered" id="users-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Company</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Job Title</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Postal Code</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@stop


@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url('grid') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'company', name: 'company' },
            { data: 'first_name', name: 'first_name' },
            { data: 'last_name', name: 'last_name' },
            { data: 'email_address', name: 'email_address' },
            { data: 'job_title', name: 'job_title' },
            { data: 'business_phone', name: 'business_phone' },
            { data: 'address', name: 'address' },
            { data: 'city', name: 'city' },
            { data: 'zip_postal_code', name: 'zip_postal_code' },
            { data: 'country_region', name: 'country_region' },
        ]
    });
});
</script>
@endpush