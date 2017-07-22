@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
             <!-- papar validation error -->
                        @if($errors->all())
                        <div class="alert alert-danger" role="alert">
                        <p>Validation error.Please fix this error below: </p>
                            <ul>
                            @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- papar succes noti -->
                        @if ( Session::has('success') )
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif

                <div class="panel-heading">Edit Tambah Nama Bilik</div>
                <div class="panel-body">
                 <!-- tambah form kat sini -->
                <div class="form-group {{ $errors-> has('department_name') ? 'has-error' : false }}">
                    {!! Form::label('department_name', 'Bahagian/Unit:'); !!}
                    {!! Form::select('department_name', $room,'', ['class'=>'form-control']); !!}
                </div>

                <div class="form-group {{ $errors-> has('status') ? 'has-error' : false }}">
                    {!! Form::label('status', 'Status:'); !!}
                    {!! Form::radio('status', 'Aktif', false); !!}Aktif
                    {!! Form::radio('status', 'TakAktif', false); !!}Tak Aktif
                </div>

                <div class="form-group {{ $errors-> has('color') ? 'has-error' : false }}">
                    {!! Form::label('color', 'color :'); !!}
                     {!! Form::color('color'); !!}
                </div>

                 <!-- button submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="{{ url('/admin/showmeetingroom') }}" class="btn btn-danger">Kembali</a>
                </div>
                 <!-- tutupform kat sini -->
           
            </div>
        </div>
    </div>
</div>
</div>
@endsection
