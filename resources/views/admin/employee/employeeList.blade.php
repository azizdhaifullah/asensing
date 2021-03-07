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
                    <tr data-id="1234">
                        <td>1</td>
                        <td>Didit</td>
                        <td>213-312-3333</td>
                        <td>didit@mail.com</td>
                        <td>08128767898</td>
                        <td><span class="badge badge-danger">Not Exist</span></td>
                        <td>
                            <a class="btn btn-sm" href="{{route('detail-employee', ['id'=>1])}}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm" data-toggle="modal" data-target="#employee-delete" style="color:red;"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    <tr data-id="1234">
                        <td>3</td>
                        <td>Nabil</td>
                        <td>213-312-3334</td>
                        <td>nabil@mail.com</td>
                        <td>08138767788</td>
                        <td><span class="badge badge-success">Exist</span></td>
                        <td>
                            <a class="btn btn-sm" href="{{route('detail-employee', ['id'=>2])}}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm" data-toggle="modal" data-target="#employee-delete" style="color:red;"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination justify-content-end">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@include('modal.employee.employee')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
