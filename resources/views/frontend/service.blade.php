@extends('frontend.master')
@section('main-content')
<div class="container-fluid" id="car_collection" style="color:white;padding:0">
    <div id="z">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="text-align:center;text-transform:uppercase;">
            <h1 id="heading2">our <span id="hd">services</span></h1>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row" style="padding:0;margin:3em;">      
        @foreach ($services as $service)
            <div class="col-sm-6 service">
                <img src="{{asset('storage/service/'.$service->image)}}" width="80%" height="80%">
                <p>{{$service->name}}</p>
            </div>
            <div class="col-sm-6">
                <p>{!! $service->text !!}</p>
            </div>
        @endforeach
    </div>
    </div>
</div>
@endsection