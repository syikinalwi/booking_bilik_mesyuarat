@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <div>
                    {!! Form::label('department_name', 'Bahagian/Unit:'); !!}
                    <!-- whatever department name inserted,needs to add it into the dropdown list which user can viewed-->
                    {!! Form::text('department_name', '', ['class'=>'form-control']); !!}
                </div>
<!-- needs to be filtered. if active mode, the department name will come out... if inactive mode, the department name doesn't come out in dropdown list -->
                <div class="form-group">
                    {!! Form::label('room', 'Status:'); !!}
                    {!! Form::radio('room', 'Aktif', false); !!}Aktif
                    {!! Form::radio('room', 'TakAktif', false); !!}Tak Aktif
                </div>

                 <!-- button submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="{{ url('/admin/form') }}" class="btn btn-danger">Batal</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
