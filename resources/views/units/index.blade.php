@extends('layouts.app')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h1 class="card-title">Unit page</h1>
          </div>
          <div class="pull-right">
        <a class="btn btn-success ml-3 mt-3" href="{{ route('units.create') }}"> Create New Unit</a>
        </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
               
              </tr>
              </thead>
              <tbody>
                @foreach($units as $unit)
              <tr>
                <td>{{$unit->name}}</td>
                <td>{{$unit->price}}</td>
                
                
             
                <td><a href="{{route('units.edit',$unit->id)}}" class="btn btn-primary">edit</a></td>
                <td><form action="{{ route('units.destroy', ['unit' => $unit->id]) }}" method="POST">
                    @csrf
                
                    @method('DELETE')
        
                    <form action="abc" method="POST">
                    <button class="btn btn-danger" name="archive" type="submit" onclick="archiveFunction()">
                        <i class="fa fa-archive"></i>
                            Delete
                    </button>
            </form>
               
            @push('scripts')
            
            @include('layouts.dashboard.script')
               
            @endpush   
                
           
                    
                </form></td>
              
              
              </tr>
              
              @endforeach
              </tbody>
             
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
  @push('datatable')
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  @endpush
  @endsection