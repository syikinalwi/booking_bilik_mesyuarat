@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
            <!-- papar validation error -->
                     
            <!-- papar succes noti -->
                     

                <div class="panel-heading">Edit Peralatan</div>
                <div class="panel-body">
                 <!-- tambah form kat sini -->
                
             
                <div class="form-group {{ $errors-> has('stuff_name') ? 'has-error' : false }}">
        
                <div>
                    {!! Form::label('stuff_name', 'Peralatan:'); !!}
                    <!-- whatever department name inserted,needs to add it into the dropdown list which user can viewed-->
                    {!! Form::select('stuff_name', $stuffs, '',['class'=>'form-control']); !!}
                </div>

                <div class="form-group {{ $errors-> has('status') ? 'has-error' : false }}">
                    {!! Form::label('status', 'Status:'); !!}
                    {!! Form::radio('status', 'Aktif', false); !!}Aktif
                    {!! Form::radio('status', 'TakAktif', false); !!}Tak Aktif
                </div>

                 <!-- button submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="{{ url('/admin/showstuff') }}" class="btn btn-danger">Kembali</a>
                </div>
                 <!-- tutupform kat sini -->
           
            </div>
        </div>
    </div>
</div>
@endsection
