<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 

  

      
            
              
             
           
                  
             
        
             
          

  

   

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                      <i class="fas fa-globe"></i> Zaradia.
                      <small class="float-right">{{ date('Y-m-d') }}</small>
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
               
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>Order ID:</b>{{$order->id}}<br>
                    <b>Client Name:</b>{{$order->clients->first_name.$order->clients->last_name}}<br>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
  
                <!-- Table row -->
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>UnitName</th>
                        <th>UnitCost</th>
                        <th>UnitQuantity</th>
                        <th>Date</th>
                        <th>Cost</th>
                        <th>TotalCost</th>
                        <th>TotalCostTaxes</th>
                      </tr>
                      </thead>
                      <tbody>
                          
                      <tr>
                        <td>{{$order->unit->name}}</td>
                        <td>{{$order->unit_cost}}</td>
                        <td>{{$order->unit_qty}}</td>
                        <td>{{$order->date}}</td>
                        <td>{{$order->cost}}</td>
                        <td>{{$order->total_cost}}</td>
                        <td>{{$order->total_cost_taxes}}</td>
                      </tr>
                 
                       </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                
                  
  
  
  
  
  
  
  
  
                <div class="row">
                  <!-- /.col -->
                  <div class="col-6">
                      <p class="lead font-weight-bold">services</p>
    
                      <div class="table-responsive">
                        <table class="table">
                            @foreach($order->product as $pro)
                          <tr>
                           
                            <td>{{$pro->title}}</td>
                          </tr>
                          @endforeach
                        
                        </table>
                      </div>
                    </div>
                  <!-- /.col -->
                  <div class="col-6">
                    <p class="lead font-weight-bold">Amount Due: {{$order->date}} </p>
  
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th style="width:50%">Total Cost:</th>
                          <td>{{$order->total_cost}}</td>
                        </tr>
                        <tr>
                          <th>Tax (15%)</th>
                          <td>{{$order->total_cost* 0.15}}</td>
                          
                        </tr>
                        <tr>
                          <th>Total After Taxes:</th>
                          <td>{{$order->total_cost_taxes}}</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
  
                <!-- this row will not appear when printing -->
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/js/demo.js')}}"></script>
</body>
</html>
