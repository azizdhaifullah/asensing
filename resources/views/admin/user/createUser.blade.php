@extends('adminlte::page')

@section('title', 'Create User')

@section('content_header')
<div class="row" class="mb-5">
<a href="{{ route('user') }}" style="font-size: 25px;" class="mr-2 ml-2"><i class="fas fa-arrow-left"></i></a>
<h1>Back to User List</h1>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Create New User</h3>

    <div class="card-tools">
    </div>
    </div>
    <!-- /.card-header -->
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="usernmae">Username</label>
                <input type="text" class="form-control" id="usernmae" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
                <select id="select-role" class="form-control select2" style="width: 100%;">
                    <option selected="selected" value="0">-- Select Role --</option>
                    <option value="1">Administrator</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-end mr-1">
                <button type="submit" class="btn btn-primary">Save</button>
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
