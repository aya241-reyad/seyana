<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;
use App\Http\Requests\SubServiceRequest;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=SubService::all();
        return view('subservice.index',compact('services')); 
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $services=Service::all();
        return view('subservice.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubServiceRequest $request)
    {
        $service=SubService::create($request->all());
        return redirect('/subservices');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub=SubService::find($id);
        $services=Service::all();
        return view('subservice.edit',compact('services','sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubServiceRequest $request, $id)
    {
        $service=SubService::find($id);
        $service->update($request->all());
          return redirect('/subservices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=SubService::findOrFail($id);
        $service->delete();
        return redirect('subservices');
    }
}
