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
    <form method="POST" action="{{ route('update-employee', ['id' => $employeeDetailData['employee_id']]) }}" accept-charset="UTF-8">
    <input type="hidden" id="employee-id" value="{{$employeeDetailData['employee_id']}}">
    @csrf
    @method("PUT")
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
                        <input name="employee-name" type="text" class="form-control" id="employee-name" placeholder="Enter Employee Name" value="{{ isset($employeeDetailData['employee_name']) && $employeeDetailData['employee_name'] ? $employeeDetailData['employee_name'] : ''}}">
                    </div>
                    <div class="form-group">
                        <label for="employee-number">Employee Number</label>
                        <input name="employee-number" type="text" class="form-control" id="employee-number" placeholder="Enter Employee Number" value="{{ isset($employeeDetailData['employee_number']) && $employeeDetailData['employee_number'] ? $employeeDetailData['employee_number'] : ''}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="employee-email">Email</label>
                        <input name="employee-email" type="mail" class="form-control" id="employee-email" placeholder="Enter Employee email" value="{{ isset($employeeDetailData['employee_email']) && $employeeDetailData['employee_email'] ? $employeeDetailData['employee_email'] : ''}}">
                    </div>
                    <div class="form-group">
                        <label for="employee-phone">Phone Number</label>
                        <input name="employee-phone" type="text" class="form-control" id="employee-phone" placeholder="Enter Employee Phone Number" value="{{ isset($employeeDetailData['employee_phone_number']) && $employeeDetailData['employee_phone_number'] ? $employeeDetailData['employee_phone_number'] : ''}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! select("employee-region", "Region", $regionData, $employeeDetailData['employee_region_id']) !!}
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="employee-fingerprint">Fingerprint Data
                        @if(is_null($employeeDetailData['employee_fingerprint_id']))
                        <span class="badge badge-danger">Not Exist</span>
                        @else
                        <span class="badge badge-success">Exist</span>
                        @endif
                    </label>
                    <div class="input-group mb-6">
                        <input name="employee-fingerprint" type="text" class="form-control" placeholder="Fingerprint ID" aria-label="Fingerprint ID" value="{{ $employeeDetailData['employee_fingerprint_id'] }}" disabled>
                        @if(is_null($employeeDetailData['employee_fingerprint_id']))
                        <div class="input-group-append">
                            <button id="generate-fingerprint" class="btn btn-success" type="button">Generate Fingerprint</button>
                        </div>
                        @else
                        <div class="input-group-append">
                            <button id="generate-fingerprint" class="btn btn-warning" type="button">Regenerate Fingerprint</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-end">
                <a class="btn btn-default mr-3" href="{{ route('employee') }}" role="button">Cancel</a>
                <button class="btn btn-success" type="submit">Update</a>
            </div>
        </div>
    </form>
    <!-- /.card-body -->
</div>
@include('modal.attendance.attendance')
@include('support.loading')
@stop

@section('css')
@stop

@section('js')
<script src="{{ asset('vendor/pace-progress/pace.js') }}" defer></script>
<script src="{{ asset('assets/js/employee/fingerprint.js') }}" defer></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: 'resolve'
        })
    });
</script>
<script>
$(document).ready(function() {
    $('#loadingDiv').hide();
});
</script>
@stop

