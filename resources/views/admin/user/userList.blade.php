@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
<h1>User</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">User List</h3>

    <div class="card-tools">
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="mb-2">
            <div class="row justify-content-end">
                <a class="btn btn-primary" href="{{ route('create-user') }}" role="button">Create New User</a>
            </div>
        </div>
        <div id="attendance-table" class="table-responsive p-1">
            <table class="table text-nowrap text-center">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr data-id="1234">
                        <td>1</td>
                        <td>admin</td>
                        <td>administrator</td>
                        <td><span class="badge badge-success">active</span></td>
                        <td><a class="btn btn-sm" href="{{route('detail-user', ['id'=>1])}}"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>admin2</td>
                        <td>administrator</td>
                        <td><span class="badge badge-danger">not active</span></td>
                        <td><a class="btn btn-sm" href="{{route('detail-user', ['id'=>1])}}"><i class="fas fa-eye"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination justify-content-start">
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
@include('modal.attendance.attendance')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
