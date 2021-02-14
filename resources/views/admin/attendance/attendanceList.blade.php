@extends('adminlte::page')

@section('title', 'Attendance')

@section('content_header')
<h1>Attendance</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Attendance List</h3>

    <div class="card-tools">
        <select class="form-control form-control-sm select2" style="width: 250px;">
            <option selected="selected">-- Select Employee --</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
        </select>
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-1">
    <table class="table text-nowrap">
        <thead>
        <tr>
            <th>Employee Name</th>
            <th>Date</th>
            <th>Clock In</th>
            <th>Clock Out</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#" >John Doe</a></td>
            <td>{{ date("Y/m/d") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>TEST</td>
        </tr>
        <tr>
            <td><a href="#" >John Doe</a></td>
            <td>{{ date("Y/m/d") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>TEST</td>
        </tr>
        <tr>
            <td><a href="#" >John Doe</a></td>
            <td>{{ date("Y/m/d") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>TEST</td>
        </tr>
        <tr>
            <td><a href="#" >John Doe</a></td>
            <td>{{ date("Y/m/d") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>TEST</td>
        </tr>
        <tr>
            <td><a href="#" >John Doe</a></td>
            <td>{{ date("Y/m/d") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>{{ date("H:i") }}</td>
            <td>TEST</td>
        </tr>
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
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
