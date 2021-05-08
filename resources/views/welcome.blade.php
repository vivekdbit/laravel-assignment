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
                <div class="box-header with-border">
                    <button class="btn btn-info btn-sm" type="button" data-toggle="modal"
                        data-target="#CreateCustomerModal" id="createCustomerId">New</button>
                </div>

                <div class="box-body">
                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Total Orders </th>
                                <th>Total Order Amount</th>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<!-- Create Customer Modal -->
<div class="modal" id="CreateCustomerModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Customer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="" id="createCustomerForm" class="form-horizontal form-label-left" method="POST">
           
            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible" role="alert"
                    style="display: none">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible" role="alert"
                    style="display: none">
                    <strong>Success! </strong><span id="message-id"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Company: *</label>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" name="company" id="company" class="form-control required"
                            placeholder="Company Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name: *</label>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="first_name" id="first_name"
                            placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name: *</label>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="email_address" id="email_address"
                            placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Job Title:</label>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone:</label>

                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="business_phone" id="business_phone" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address:</label>

                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">City:</label>

                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="city" id="city" placeholder="City">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Postal Code:</label>

                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="zip_postal_code" id="zip_postal_code" placeholder="Postal Code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Country:</label>

                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="country_region" id="country_region" placeholder="Country"> 
                    </div>
                </div>

            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="SubmitCreateCustomerForm" style="display: none">Create</button>
                <button type="button" class="btn btn-success" id="SubmitUpdateCustomerForm" style="display: none">Update</button>

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Customer Modal -->
<div class="modal" id="DeleteCustomerModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Customer Delete</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-success alert-dismissible" role="alert"
                        style="display: none">
                        <strong>Success!</strong>Customer was added successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <h4>Are you sure want to delete this Customer?</h4>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="SubmitDeleteCustomerForm">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop


@push('scripts')
<script>
    $(function () {

        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '{{ url('grid') }}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'orders_total',
                    name: 'orders_total'
                },
                {
                    data: 'orders_amount_total',
                    name: 'orders_amount_total'
                },
                {
                    data: 'company',
                    name: 'company'
                },
                {
                    data: 'first_name',
                    name: 'first_name'
                },
                {
                    data: 'last_name',
                    name: 'last_name'
                },
                {
                    data: 'email_address',
                    name: 'email_address'
                },
                {
                    data: 'job_title',
                    name: 'job_title'
                },
                {
                    data: 'business_phone',
                    name: 'business_phone'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'city',
                    name: 'city'
                },
                {
                    data: 'zip_postal_code',
                    name: 'zip_postal_code'
                },
                {
                    data: 'country_region',
                    name: 'country_region'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });

        $('body').on('click', '#createCustomerId', function(){
            $('.alert-danger').hide();
            $('.alert-success').hide();
            $('#SubmitCreateCustomerForm').show();
            $('#SubmitUpdateCustomerForm').hide();
        })

        // Create Customer Ajax request.
        $('#SubmitCreateCustomerForm').click(function(e) {
            
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('customer') }}",
                method: 'post',
                data: {
                    company: $('#company').val(),
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    email_address: $('#email_address').val(),
                    job_title: $('#job_title').val(),
                    business_phone: $('#business_phone').val(),
                    address: $('#address').val(),
                    city: $('#city').val(),
                    zip_postal_code: $('#zip_postal_code').val(),
                    country_region: $('#country_region').val(),
                },
                success: function(result) {
                    if(result.errors) {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                        });
                    } else {
                        $('.alert-danger').hide();
                        $('.alert-success').show();
                        $('#users-table').DataTable().ajax.reload();
                        setInterval(function(){ 
                            $('.alert-success').hide();
                            $('#CreateCustomerModal').modal('hide');
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });

        // Delete Customer Ajax request.
        var deleteID;
        $('body').on('click', '#getDeleteId', function(){
            deleteID = $(this).data('id');
        })
        $('#SubmitDeleteCustomerForm').click(function(e) {
            e.preventDefault();
            var id = deleteID;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                }
            });
            $.ajax({
                url: "customer/"+id,
                method: 'DELETE',
                success: function(result) {
                    $('.alert-success').show();
                    $('#users-table').DataTable().ajax.reload();
                    $('#DeleteCustomerModal').modal('hide');
                }
            });
        });

        // Edit
        $( '#CreateCustomerModal' ).on('show.bs.modal', function (e) {

            //$('#CreateCustomerModal').modal('show');
            var target = e.relatedTarget;
            // get values for particular rows
            var tr = $( target ).closest( 'tr' );
            var tds = tr.find( 'td' );

            $( '#company' ).val( tds.eq(3).text() );
            $( '#first_name' ).val( tds.eq(4).text() );
            $( '#last_name' ).val( tds.eq(5).text() );
            $( '#email_address' ).val( tds.eq(6).text() );
            $( '#job_title' ).val( tds.eq(7).text() );
            $( '#business_phone' ).val( tds.eq(8).text() );
            $( '#address' ).val( tds.eq(9).text() );
            $( '#city' ).val( tds.eq(10).text() );
            $( '#zip_postal_code' ).val( tds.eq(11).text() );
            $( '#country_region' ).val( tds.eq(12).text() );

        });
        var updateID;
        $('body').on('click', '#getEditCustomerData', function(){
            updateID = $(this).data('id');
            $('.alert-danger').hide();
            $('.alert-success').hide();
            $('#SubmitUpdateCustomerForm').show();
            $('#SubmitCreateCustomerForm').hide();
        })
        $('#SubmitUpdateCustomerForm').click(function(e) {
            e.preventDefault();
            var id = updateID;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                }
            });
            $.ajax({
                url: "customer/"+id,
                method: 'PUT',
                data: {
                    company: $('#company').val(),
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    email_address: $('#email_address').val(),
                    job_title: $('#job_title').val(),
                    business_phone: $('#business_phone').val(),
                    address: $('#address').val(),
                    city: $('#city').val(),
                    zip_postal_code: $('#zip_postal_code').val(),
                    country_region: $('#country_region').val(),
                },
                success: function(result) {
                    if(result.errors) {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                        });
                    } else {
                        $('.alert-danger').hide();
                        $('#message-id').append(result.success);
                        $('.alert-success').show();
                        $('#users-table').DataTable().ajax.reload();
                        setInterval(function(){ 
                            $('.alert-success').hide();
                            $('#CreateCustomerModal').modal('hide');
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });
       

    });

</script>
@endpush
