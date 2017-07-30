@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Senarai peralatan yang telah didaftarkan..</div>
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
                           <th>Peralatan</th>
                           <th>Status</th>
                           <th>Tarikh Daftar</th>
                           <th>Tarikh Kemaskini</th>
                           <th>Action</th>


                        </tr>
                        </thead>
                        <tbody>

                        @foreach($stuffs as $stuff)
                        <tr>
                            <td>{{ $stuff->stuff_name }}</td> 
                            <td>{{ $stuff->status }}</td>
                            <td>{{ $stuff->created_at }}</td>
                            <td>{{ $stuff->updated_at }}</td>
                            <!-- <td>{{ $stuff->deleted_at }}</td> -->
                            <td><div class="btn-group">

                         <!-- method post define by id -->
                          <!-- error.. cannot eccess the route ...,$stuff->id -->
                            <form method="POST" action="{{ route('admin.destroystuff') }}">
                            <input type="hidden" name="id" value="{{ $stuff->id }}">

                             {{ csrf_field() }}
                             <!-- <a href="{{ url('/admin/editstuff/{id}') }}" class="btn btn-success">Edit</a> -->

                            <button type="submit" class="btn btn-danger delete">Delete</button>

                            </form>                      
                            </div></td>
            
                        </tr>
                        @endforeach

                           
                        </tbody>
                    </table>
            
                    <div>{{ $stuffs->appends(Request::except('page'))->links() }}</div>
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