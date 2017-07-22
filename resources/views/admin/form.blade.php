@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">

        <!-- <div class="panel panel-primary">
        <div class="panel-heading">Search Product</div>         
        <div class="panel-body">
       
        </div>
        </div> -->

                 
                <div class="panel panel-success">
                    <div class="panel-heading">Borang Tempahan Bilik</div>
                    <div class="panel-body">
                     {{ csrf_field() }}

                        <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Tambah Item</th>
                                <th>Daftar/Edit</th>
                            </tr>
                        </thead>
                            <tbody>
                            <tr>
                                <td>Bahagian/Unit</td>
                                <td><a href="{{ url('/admin/adddepartmentname') }}" class="btn btn-primary">Daftar</a>
                                    <a href="{{ route('admin.showdepartmentname') }}" class="btn btn-warning">Show</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bilik Mesyuarat</td>
                                <td><a href="{{ url('/admin/meetingroom') }}" class="btn btn-primary">Daftar</a>
                                <!-- fix url for showing the data -->
                                    <a href="{{ url('/admin/showmeetingroom') }}" class="btn btn-warning">Show</a>
                                </td>
                            </tr> 
                             <tr>
                                <td>Peralatan</td>
                                <td><a href="{{ url('/admin/addstuff') }}" class="btn btn-primary">Daftar</a>
                                    <a href="{{ url('/admin/showstuff') }}" class="btn btn-warning">Show</a>
                                </td>
                            </tr> 
                            </tbody>
                        </table>
                       
                    </div>
            </div>
         
        </div>
    </div>
</div>
@endsection
