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
                    <select id="select-region" class="form-control form-control-sm select2" style="width: 100%;">
                        <option selected="selected" value="0">-- Select Region --</option>
                        <option value="1">Jakarta</option>
                        <option value="2">Surabaya</option>
                        <option value="3">Lampung</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Employee</label>
                <div class="col-sm-10">
                    <select id="select-employee" class="form-control form-control-sm select2" style="width: 100%;" disabled="true">
                        <option selected="selected" value="0">-- Select Employee --</option>
                        <option value="1">John Doe</option>
                        <option value="2">Martin</option>
                        <option value="3">Didit</option>
                        <option value="4">Apoy</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-end">
                <button type="button" id="show-data" class="btn btn-primary mr-2">Show Data</button>
            </div>
        </form>
        <div id="attendance-table" class="table-responsive p-1">
            <table class="table text-nowrap text-center">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Clock In</th>
                    <th>Clock Out</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ date("Y/m/d") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td><a class="btn btn-sm" data-toggle="modal" data-target="#attendance-image"><i class="fas fa-eye"></i> Show Image</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{ date("Y/m/d") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td><a class="btn btn-sm" data-toggle="modal" data-target="#attendance-image"><i class="fas fa-eye"></i> Show Image</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>{{ date("Y/m/d") }}</td>
                        <td>{{ date("H:i") }}</td>
                        <td>{{ date("H:i") }}</td>
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

        $('#select-region').on('change',function(event){
            event.preventDefault()
            let regionValue = this.value

            if(regionValue > 0){
                $('#select-employee').prop('disabled', false)
            }else{
                console.log(regionValue);
                $('#select-employee').val('0').trigger('change');
                $('#select-employee').prop('disabled', true)
            }
        })

        $('#attendance-table').hide()
        $('#show-data').on('click', function(event){
            event.preventDefault()
            let employeeValue = $('#select-employee').val()

            console.log(employeeValue);
            if(employeeValue > 0){
                $('#attendance-table').show()
            }else{
                $('')
            }
        });
    });

</script>
@stop
