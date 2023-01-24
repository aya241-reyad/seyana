<?php

namespace App\Http\Controllers\api;

use App\Models\Rate;
use App\Models\Unit;
use App\Models\User;
use App\Models\Order;
use App\Models\Banner;
use App\Models\Option;
use App\Models\Service;
use App\Models\Category;
use App\Models\SubService;
use Illuminate\Http\Request;
use App\Notifications\New_order;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class MainController extends Controller
{

public function index(Request $request){

$banner=Banner::take(1)->get();
$categories=Category::all();

$data=[
                
    'banner'=>$banner,
    'categories'=>$categories
    
    
    ];
    
    return ResponseJson(1,'success',$data);
}

   public function getService(Request $request){

 $services=Service::where(function($query) use($request){
            //get
            if($request->has('category_id')){
            
                $query->where('category_id',$request->category_id);
            }
         })->with('SubService')->get();
         
          
            return ResponseJson(1,'success',$services);
        
        }

      public function getSunServices(Request $request){
       $services=SubService::where(function($query) use($request){
        if($request->has('service_id')){
        
            $query->where('service_id',$request->service_id);
        }
     })->get();
      
        return ResponseJson(1,'success',$services);
    
    }



    public function order(Request $request){

        $validator=validator()->make($request->all(),[
            'unit_id'=>'required|exists:units,id',
            'unit_qty'=>'required',
            'cart_notes' => 'nullable',
            'products.*' => 'required|exists:sub_services,id',
            
            ]);
            if($validator->fails()){
            return ResponseJson(0,$validator->errors()->first(),$validator->errors());
            }
           $unit=Unit::findOrFail($request->unit_id);
           DB::beginTransaction();
           $order=$request->user()->order()->create([
            'unit_id'=>$request->unit_id,
            'unit_qty'=>$request->unit_qty,
            'cart_notes' =>$request->cart_notes,
            'client_id' => auth()->user()->id,
           ]);
           $order->save();
           
           $cost = 0;

if($request->has('products')){
    $counter = 0;
    $subservices=$request->products;
    foreach($subservices as $id){
        $service=SubService::findOrFail($id);
        $order->product()->attach([$id => [
            'price' => $service->price,
        ]]);

        
        $cost += ($service->price);
        $counter++;
        }
}
$option_cost = 0;

if($request->has('option')){
    $sec_counter = 0;
    $options=$request->option;
    foreach($options as $id){
        $option=Option::findOrFail($id);
        $order->option()->attach([$id => [
            'price' => $option->price,
        ]]);

        
        $cost += ($option->price);
        $sec_counter++;
        }
}

$total=$cost+$option_cost;
$unit_cost = $unit->price * $request->unit_qty;
$total_cost_taxes = ($total + $unit_cost) + (($total + $unit_cost) * 0.15);

$order->update([
    'cost' => $cost,
    'total_cost' => $total+$unit_cost,
    'unit_cost' => $unit_cost,
    'total_cost_taxes' => $total_cost_taxes,
]);



$admin = User::where('id',502)->first();
$client=auth()->user()->first_name;
//$client->notify(new New_order($order) );
Notification::send($admin, new New_order($order->id , $client));

DB::commit();
return ResponseJson('1', 'تم الطلب بنجاح', $order->fresh()->load('product', 'option'));


 }

public function appointment(Request $request){

    $validator=validator()->make($request->all(),[
        'order_id' => 'required|exists:orders,id',
        'date' => 'required',
        'time' => 'required',
        'payment_method' => 'required',
        
        ]);
        if($validator->fails()){
        return ResponseJson(0,$validator->errors()->first(),$validator->errors());
        }
        $order=Order::findOrFail($request->order_id);

        $order->update([
            'date' =>$request->date,
            'time' =>$request->time,
            'payment_method'=>$request->payment_method,
            'order_notes' => $request->order_notes,
            'voucher' => $request->voucher,
]);

return ResponseJson('1', 'order completed successfully' , $order->fresh()->load('product', 'option'));




}
public function listOrders(Request $request){
    $validator=validator()->make($request->all(),[
        'order_id' => 'required|exists:orders,id',
    ]);
    if($validator->fails()){
    return ResponseJson(0,$validator->errors()->first(),$validator->errors());
    }
$orders=Order::where('client_id', auth()->user()->id)->whereNotNull('date')->findOrFail($request->order_id);

return ResponseJson('1', 'success' ,$orders);

}

public function rate(Request $request){
    $validator=validator()->make($request->all(),[
        'rate' => 'required|numeric|min:0|max:5',
        'description' => 'required',
        'client_id' => 'required|exists:clients,id',
        ]);
        if($validator->fails()){
        return ResponseJson(0,$validator->errors()->first(),$validator->errors());
        }
        $rate=Rate::create($request->all());
        return ResponseJson('1', 'success' ,$rate);

}

     public function notifications(Request $request){






     }










}





