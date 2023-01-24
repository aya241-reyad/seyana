
@extends('layouts/app')
@section('content')
<!-- Content Wrapper. Contains page content -->
 

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          


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
              <div class="row no-print">
                <div class="col-12">
                    <button onclick="display()" id="hiddpr" rel="noopener" target="_blank"
                    class="btn btn-default "><i class="fas fa-print"></i> Print</button>
                   <!--<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>-->
                  <a href="{{url('generate-pdf/'.$order->id)}} "class="btn btn-primary float-right" style="margin-right: 5px;"> <i class="fas fa-download"></i> Generate PDF</a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @push('print')
  <script>
    function display() {

        document.getElementById("hiddpr").style.display = 'none';
        window.print();
    }
</script>
@endpush
 @endsection