<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;

class BannerController extends Controller
{
    public function create(){
        return view('banner.create');
    }


public function store(BannerRequest $request){
  

    $banner=Banner::create($request->all());
    return redirect('/home');


}


}
