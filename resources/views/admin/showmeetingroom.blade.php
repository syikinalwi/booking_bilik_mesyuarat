@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Senarai nama Bilik Mesyuarat yang telah didaftarkan..</div>
                <div class="panel-body">

                <!-- search method -->

<!--             <form id="searchForm" name="searchForm" method="GET" class="form-horizontal"> 

              {{ csrf_field() }}

                <div class="row">
                  <div class="col-md-12 input-group">
                 

                    <div class="col-md-3">
                    <input type="text" name="search_user" class="form-control" placeholder="User Name." value="{{ Request::get('search_user') }}">
                    </div>

                  <div class="col-md-3">
                    <span class="input-group-btn">
                    <button class="btn btn-warning" type="submit">Go!</button></span>
                  </div>
                  </div>
                </div>
            </form>
 -->
                    <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Bahagian/Unit</th>
                           <th>Status</th>
                           <th>Warna</th>
                           <th>Tarikh Daftar</th>
                           <th>Tarikh Kemaskini</th>
                           <th>Action</th>
                        </tr>
                    </thead>
                        <tbody>

                        @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->title }}</td> 
                            <td>{{ $room->status }}</td>
                            <td>{{ $room->color }}</td>
                            <td>{{ $room->created_at }}</td>
                            <td>{{ $room->updated_at }}</td>
                            <td><div class="btn-group">

                            <!-- method post define by id -->
                           
                            <form method="POST" action="{{ route('admin.destroymeetingroom') }}">
                            <input type="hidden" name="id" value="{{ $room->id }}">

                             {{ csrf_field() }}
                             <!-- <a href="{{ url('/admin/editmeetingroom', '$room->id') }}" class="btn btn-success">Edit</a> -->


                            <button type="submit" class="btn btn-danger delete">Delete</button>
                            </form>                            
                            </div></td>        
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div>{{ $rooms->appends(Request::except('page'))->links() }}</div>
                    <a href="{{ url('/admin/form') }}" class="btn btn-primary">Kembali</a>
             
           </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function () {
   $('.delete').click(function () {

              var closest_form = $(this).closest('form');

              swal({
            title: "Are you sure?",
            text: "You will not be able to recover this product!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function(){
          closest_form.submit();
        });
            })
 });
</script>
@endsection