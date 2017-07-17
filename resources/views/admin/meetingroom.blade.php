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
                <div class="panel-heading">Tambah Nama Bilik</div>
                <div class="panel-body">

                <!-- tambah form kat sini -->
                {!! Form::open(['route' => 'admin.form.store']) !!}
                <div class="form-group {{ $errors-> has('title') ? 'has-error' : false }}">
                    {!! Form::label('title', 'Nama Bilik:'); !!}
                    <!-- whatever department name inserted,needs to add it into the dropdown list which user can viewed-->
                    {!! Form::text('title', '', ['class'=>'form-control']); !!}
                </div>
                <!-- needs to be filtered. if active mode, the department name will come out... if inactive mode, the department name doesn't come out in dropdown list -->
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
                    <a href="{{ url('/admin/form') }}" class="btn btn-danger">Kembali</a>
                </div>
                
            <!-- tutupform kat sini -->
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
