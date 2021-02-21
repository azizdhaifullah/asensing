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
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form class="mb-4 col-sm-4">
            <div class="form-group row">
                <label for="Region" class="col-sm-2 col-form-label">Region</label>
                <div class="col-sm-10">
                    <select class="form-control form-control-sm select2" style="width: 100%;">
                        <option selected="selected">-- Select Region --</option>
                        <option>Jakarta</option>
                        <option>Surabaya</option>
                        <option>Lampung</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Employee</label>
                <div class="col-sm-10">
                    <select class="form-control form-control-sm select2" style="width: 100%;" disabled>
                        <option selected="selected">-- Select Employee --</option>
                        <option>John Doe</option>
                        <option>Martin</option>
                        <option>Didit</option>
                        <option>Apoy</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-end">
                <button type="button" id="show-data" class="btn btn-primary mr-2">Show Data</button>
            </div>
        </form>
        <div id="attendance-table" class="table-responsive p-1">
            <table class="table text-nowrap">
                <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Date</th>
                    <th>Clock In</th>
                    <th>Clock Out</th>
                    <th>Region</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#" >John Doe</a></td>
                        <td>{{ date("Y/m/d") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>Jakarta</td>
                        <td><a class="btn btn-sm" data-toggle="modal" data-target="#attendance-image"><i class="fas fa-eye"></i> Show Image</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" >John Doe</a></td>
                        <td>{{ date("Y/m/d") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>Jakarta</td>
                        <td><a class="btn btn-sm" data-toggle="modal" data-target="#attendance-image"><i class="fas fa-eye"></i> Show Image</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" >John Doe</a></td>
                        <td>{{ date("Y/m/d") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>Jakarta</td>
                        <td><a class="btn btn-sm" data-toggle="modal" data-target="#attendance-image"><i class="fas fa-eye"></i> Show Image</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" >John Doe</a></td>
                        <td>{{ date("Y/m/d") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>Jakarta</td>
                        <td><a class="btn btn-sm" data-toggle="modal" data-target="#attendance-image"><i class="fas fa-eye"></i> Show Image</a></td>
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
<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: 'resolve'
        })

        $('#attendance-table').hide()
        $('#show-data').on('click', function(){
            $('#attendance-table').show()
        });
    });

</script>
@stop
