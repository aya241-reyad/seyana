@extends('layouts.app')
@section('page_title')
<h1 class="text-secondary">Welcome To Zaradia Dashboard</h1>
@endsection
@inject('services', 'App\Models\Service')
@inject('subsurvices', 'App\Models\SubService')
@inject('category', 'App\Models\Category')
@inject('units', 'App\Models\Unit')
@inject('clients', 'App\Models\Client')
@inject('orders', 'App\Models\Order')
@inject('options', 'App\Models\Option')
@inject('quests', 'App\Models\Quest')
@section('content')
<div class="row">




    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
        <div class="inner">
            
    <h4 class="nav-icon fas fa-recycle"> Services</h4>
        <p>{{$services->count()}}</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
        <div class="inner">
        <h4 class="fas fa-sitemap">SubServices </h4>
        <p>{{$subsurvices->count()}}</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
            <div class="inner">
            <h4 class="fas fa-landmark"> categories</h4>
            <p>{{$category->count()}}</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
            <div class="inner">
            <h4 class="fas fa-magnet"> units</h4>
            <p>{{$units->count()}}</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
    



    </div>
    <div class="row">

        <div class="col-lg-3 col-6">

            <div class="small-box bg-secondary">
            <div class="inner">
            <h4 class="fas fa-user"> clients</h4>
            <p>{{$clients->count()}}</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>


            <div class="col-lg-3 col-6">

                <div class="small-box bg-primary">
                <div class="inner">
                <h4 class="fas fa-store"> Orders</h4>
                <p>{{$orders->count()}}</p>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                </div>

                
    
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-info">
                        <div class="inner">
                        <h4 class="fas fa-link"> Options</h4>
                        <p>{{$options->count()}}</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>



                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success">
                            <div class="inner">
                            <h4 class="fas fa-bell">Quests</h4>
                            <p>{{$quests->count()}}</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            </div>




    </div>







@endsection


