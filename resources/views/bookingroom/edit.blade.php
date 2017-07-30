@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="container">
    <div class="row">


        <div class="col-xs-7">
            <div class="panel panel-success">

            
                <div class="panel-heading">
                    <div class="flex-center position-ref">Edit Borang Tempahan Bilik</div></div>
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

                       
                <div class="panel-body">
                     
                <!-- tambah form kat sini -->
                <!-- form sent as to update data and needs to pass data by id -->
                {!! Form::open(['route' => ['bookingroom.update',$bookingrooms->id], 'method'=>'PUT']) !!}

                <div class="form-group {{ $errors-> has('department_name') ? 'has-error' : false }}">
                    {!! Form::label('department_name', 'Bahagian/Unit:'); !!}
                    {!! Form::select('department_name', $departments , $bookingrooms->department_name, ['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>


                 <div class="form-group {{ $errors-> has('title') ? 'has-error' : false }}">
                    {!! Form::label('title', 'Bilik Mesyuarat:'); !!}
                    {!! Form::select('title', $rooms , $bookingrooms->title, ['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>

                <!-- select date -->
                <div class="form-group {{ $errors-> has('start') ? 'has-error' : false }}">
                    {!! Form::label('start', 'tarikh :'); !!}
                     {!! Form::date('start', Carbon\Carbon::parse($bookingrooms->start)->format('Y-m-d'),['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>
                <!-- time field -->
                <div class="form-group {{ $errors-> has('time') ? 'has-error' : false }}">
                    {!! Form::label('time', 'Masa:'); !!}
                    {!! Form::time('time', $bookingrooms->time, ['class'=>'form-control']); !!}
                </div>
                 
                <!-- <div class="form-group">
                    {!! Form::label('stuff_list', 'Peralatan :'); !!}
                    {!! Form::checkbox('stuff_list', 'laptop', false); !!}Laptop
                    {!! Form::checkbox('stuff_list', 'LCD', false); !!}LCD
                </div> -->

                <div class="form-group {{ $errors-> has('stuff_list') ? 'has-error' : false }}">
                    {!! Form::label('stuff_list', 'Peralatan :'); !!}
                    {!! Form::select('stuff_list', $stuffs , $bookingrooms->stuff_list, ['placeholder' => '--Sila Pilih--', 'class'=>'form-control']); !!}
                </div>

                <div class="form-group {{ $errors-> has('meetingtitle_name') ? 'has-error' : false }}">
                    {!! Form::label('meetingtitle_name', 'Tajuk Mesyuarat/Taklimat :'); !!}
                    {!! Form::text('meetingtitle_name', $bookingrooms->meetingtitle_name, ['class'=>'form-control']); !!}
                </div>

                 <div class="form-group {{ $errors-> has('drink_name') ? 'has-error' : false }}">
                    {!! Form::label('drink_name', 'Minuman :'); !!}
                    {!! Form::text('drink_name', $bookingrooms->drink_name, ['class'=>'form-control']); !!}
                </div>

                <div class="form-group {{ $errors-> has('food_name') ? 'has-error' : false }}">
                    {!! Form::label('food_name', 'Makanan :'); !!}
                    {!! Form::textarea('food_name', $bookingrooms->food_name, ['class'=>'form-control']); !!}
                </div>             

                <!-- button submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Kemaskini Tempahan</button>
                    <a href="{{ route('bookingroom.index') }}" class="btn btn-danger">Kembali</a>
                </div>

            {!! Form::close() !!}
            <!-- tutupform kat sini -->

                </div>
            </div>
        </div>

<!-- button action form-->
        <!-- <div class="col-xs-3"> -->


           <!--  <div class="panel panel-success">
                <div class="panel-heading">
                    <a href="#" class="btn btn-default">Print Tajuk Mesyuarat</a>
                </div>
            </div>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <a href="#" class="btn btn-default">Print Borang Tempahan</a>
                </div>
            </div> -->

          <!--   <div class="panel panel-success">
                <div class="panel-heading">  -->       
                    <!-- <a href="#" class="btn btn-default">Padam Borang Tempahan</a> -->

                     <!-- method post define by id -->
                           
                           <!--  <form method="DELETE" action="{{ route('bookingroom.destroyEvent') }}">
                            <input type="hidden" name="id" value="{{ $bookingrooms->id }}">

                             {{ csrf_field() }}
                            <button type="submit" class="btn btn-default delete">Padam Borang Tempahan</button>
                            </form>                               
                </div>
            </div> -->
        <!-- </div> -->

    </div>
</div>
  </div>


@endsection