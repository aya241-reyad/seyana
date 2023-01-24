@extends('layouts/app')
@section('content')
<div class="card">
    <h1 class="card-header">Order Details</h1>
    <div class="table-responsive text-nowrap">
        <div class="card" style="width: 100%">
            <div class="card-body">
              <h3 class="card-title mb-3">UnitName</h3>
              <p class="card-text text-primary">{{$order->unit->name}}</p>
              <h3 class="card-title mb-3">UnitCost</h3>
              <p class="card-text text-primary">{{$order->unit_cost}}</p>
              <h3 class="card-title mb-3">UnitQuantity</h3>
              <p class="card-text text-primary">{{$order->unit_qty}}</p>
              <h3 class="card-title mb-3">Date</h3>
              <p class="card-text text-primary">{{$order->date}}</p>
              <h3 class="card-title mb-3">Cost</h3>
              <p class="card-text text-primary">{{$order->cost}}</p>
              <h3 class="card-title mb-3">TotalCost</h3>
              <p class="card-text text-primary">{{$order->total_cost}}</p>
              <h3 class="card-title mb-3">TotalCostTaxes</h3>
              <p class="card-text text-primary">{{$order->total_cost_taxes}}</p>
              <h3 class="card-title mb-3">ClientName</h3>
              <p class="card-text text-primary">{{$order->clients->first_name.$order->clients->last_name}}</p>
              <h3 class="card-title mb-3">CartNotes</h3>
              <p class="card-text text-primary">{{$order->cart_notes}}</p>
              <h3 class="card-title mb-3">Time</h3>
              <p class="card-text text-primary">{{$order->time}}</p>
              <h3 class="card-title mb-3">OrderNotes</h3>
              <p class="card-text text-primary">{{$order->order_notes}}</p>
              <h3 class="card-title mb-3">Voucher</h3>
              <p class="card-text text-primary">{{$order->voucher}}</p>

              


              
           </div>
        </div>
    </div>
</div>

@endsection