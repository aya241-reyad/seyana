@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> 

@endsection
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h1 class="card-title">Clients page</h1>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Activate</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
                @foreach($clients as $client)
              <tr>
                <td>{{$client->first_name}}</td>
                <td>{{$client->last_name}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
              

            <td>
              <input data-id="{{$client->id}}"  type="checkbox" class="toggle-class" data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $client->is_active ? 'checked' : '' }}>
              
              </td>
              <td><form action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="POST">
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>


<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

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


<script>

  $(function() {

    $('.toggle-class').change(function() {

        var is_active = $(this).prop('checked') == true ? 1 : 0; 

        var client_id = $(this).data('id'); 

        $.ajax({

            type: "GET",

            dataType: "json",

            url: '/changeStatus',

            data: {'is_active': is_active, 'client_id': client_id},

            success: function(data){

              console.log(data.success)

            }

        });
      })

        })

</script>
  @endpush
  @endsection