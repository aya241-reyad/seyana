<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Notification;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::all();
        return view('orders.index',compact('orders')); 
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $order=Order::find($id);
            $notificaton=auth()->user()->notifications()->where('data->id',$id)->first();
            if($notificaton){
                $notificaton->markAsRead();
            }
        
        
        return view('orders.invoice',compact('order')); 
       



    }
    public function read(Request $request){

        $notifications=auth()->user()->unreadNotifications;
        if($notifications){
            $notifications->markAsRead();
            return back();
}}

public function readOne(Request $request){

    $notification=auth()->user()->unreadNotifications->where('id',$request->id);
    if($notification){
        $notification->markAsRead();
        return back();

}
}

}