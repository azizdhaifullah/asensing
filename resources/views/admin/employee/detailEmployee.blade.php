@extends('adminlte::page')

@section('title', 'Detail Employee')

@section('content_header')
<div class="row" class="mb-5">
<a href="{{ route('employee') }}" style="font-size: 25px;" class="mr-2 ml-2"><i class="fas fa-arrow-left"></i></a>
<h1>Back to Employee List</h1>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Employee Detail</h3>

    <div class="card-tools">
    </div>
    </div>
    <!-- /.card-header -->
    <form>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="employee-name">Employee Name</label>
                        <input type="text" class="form-control" id="employee-name" placeholder="Enter Employee Name" value="Didit">
                    </div>
                    <div class="form-group">
                        <label for="employee-number">Employee Number</label>
                        <input type="text" class="form-control" id="employee-number" placeholder="Enter Employee Number" value="22222222">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="employee-email">Email</label>
                        <input type="mail" class="form-control" id="employee-email" placeholder="Enter Employee email" value="didit@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="employee-phone">Phone Number</label>
                        <input type="text" class="form-control" id="employee-phone" placeholder="Enter Employee Phone Number" value="089767889986">
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="employee-fingerprint">Fingerprint Data <span class="badge badge-danger">Not Exist</span></label>
                    <div class="input-group mb-6">
                        <input type="text" class="form-control" placeholder="Fingerprint ID" aria-label="Fingerprint ID">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button">Generate Fingerprint</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-end">
                <a class="btn btn-default mr-3" href="{{ route('employee') }}" role="button">Cancel</a>
                <a class="btn btn-success" href="#" role="button">Update</a>
            </div>
        </div>
    </form>
    <!-- /.card-body -->
</div>
@include('modal.attendance.attendance')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: 'resolve'
        })
    });

</script>
@stop
