@extends('layouts.app')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h1 class="card-title">Order page</h1>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>UnitName</th>
                <th>ClientName</th>
                <th>ClientEmail</th>
                <th>ClientPhone</th>
                <th>show</th>
                
               
              </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
              <tr>
                <td>{{$order->unit->name}}</td>
                <td>{{$order->clients->first_name.$order->clients->last_name}}</td>
                <td>{{$order->clients->email}}</td>
                <td>{{$order->clients->phone}}</td>
                
                <td><a href="{{ route('orders.show' ,$order->id ) }}" class="btn btn-success " tabindex="-1" role="button" aria-disabled="true">Show</a></td>
             
                
              
              
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