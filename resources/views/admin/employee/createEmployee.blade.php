@extends('adminlte::page')

@section('title', 'Create Employee')

@section('content_header')
<div class="row" class="mb-5">
<a href="{{ route('employee') }}" style="font-size: 25px;" class="mr-2 ml-2"><i class="fas fa-arrow-left"></i></a>
<h1>Back to Employee List</h1>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Create New Employee</h3>

    <div class="card-tools">
    </div>
    </div>
    <!-- /.card-header -->
    <form method="post" action="{{ route('store-employee') }}" accept-charset="UTF-8">
        @csrf
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="employee-name">Employee Name</label>
                        <input type="text" class="form-control" id="employee-name" name="employee-name" placeholder="Enter Employee Name">
                    </div>
                    <div class="form-group">
                        <label for="employee-number">Employee Number</label>
                        <input type="text" class="form-control" id="employee-number" name="employee-number" placeholder="Enter Employee Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="employee-email">Email</label>
                        <input type="mail" class="form-control" id="employee-email" name="employee-email" placeholder="Enter Employee email">
                    </div>
                    <div class="form-group">
                        <label for="employee-phone">Phone Number</label>
                        <input type="text" class="form-control" id="employee-phone" name="employee-phone" placeholder="Enter Employee Phone Number">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! select("employee-region", "Region", $regionData) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-end">
                <button id="register-employee" class="btn btn-primary" type="submit">Save</button>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: 'resolve'
        })
    });

</script>
@stop
