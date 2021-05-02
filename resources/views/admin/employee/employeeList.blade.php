@extends('adminlte::page')

@section('title', 'Employee')

@section('content_header')
<h1>Employee</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Employee List</h3>

    <div class="card-tools">
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-2">
            <div class="row">
                <div class="col-md-6">
                    <form class="form-inline">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Employee Name" aria-label="Employee Name" style="width: 250px;">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ route('create-employee') }}" role="button">Create New Employee</a>
                </div>
            </div>
        </div>
        <div id="employee-table" class="table-responsive p-1">
            <table class="table text-nowrap text-center">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Employee name</th>
                    <th>Employee number</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Fingerprint Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($employeeData->items() as $key => $item)
                    <tr data-id="{{ $item['employee_id'] }}">
                        <td>{{ $employeeData->firstItem() + $key }}</td>
                        <td>{{ $item['employee_name'] }}</td>
                        <td>{{ $item['employee_number'] }}</td>
                        <td>{{ $item['employee_email'] }}</td>
                        <td>{{ $item['employee_phone_number'] }}</td>
                        <td>
                            @if($item['employee_employee_fingerprint_id'])
                            <span class="badge badge-success">Exist</span>
                            @else
                            <span class="badge badge-danger">Not Exist</span>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm" href="{{route('detail-employee', ['id'=>1])}}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm" data-toggle="modal" data-target="#employee-delete" style="color:red;"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! defaultPagination($employeeData) !!}
        </div>
    </div>
    <!-- /.card-body -->
</div>
@include('modal.employee.employee')
@stop

@section('css')
@stop

@section('js')
@stop
