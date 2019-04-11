@extends('frontend.master')
@include('layouts.meta')
@section('main-content')

<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('storage/wallpaper/'.$adminprofile->topwallpaper)}}" style="margin-top:0px" ></div>
  <div class="container-fluid" style="margin:0px;padding:0px;background-color:black !important;">        
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4" style="text-align:center">
        <h1 id="heading2">BEST<span id="hd">  DEALS</span></h1>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: black;color:white;padding-top:50px">
    <div class="row">
      <div class="col-sm-12">
        <div class="owl-carousel owl-theme" id="abcd">
          @foreach($cars as $car)
            <div class=""> 
              <img src="{{ asset('storage/car/'.$car->image)}}" height="250px" weight="300px"> 
              <h3>{{ $car->name}}</h3>
            </div>                                      
          @endforeach
        </div> 
      </div>      
    </div>
  </div>
  <div class="container-fluid" style="background-color:black;color:white">
    <div class="row" style="text-transform:uppercase;position:relative;left:40%;">
      <h1 id="heading2">our <span id="hd">services</span></h1>
    </div>
    <div class="row" style="padding:0;margin:0.1em;">      
      @foreach ($services as $service)
        <div class="col-sm-6">
          <img src="{{asset('storage/service/'.$service->image)}}" width="100%" height="90%">
          <p>{{$service->name}}</p>
        </div>
      @endforeach
      {{-- <div class="col-sm-6">
        <img src="{{asset('storage/car/black.jpg')}}" width="100%" height="90%">
        <p>Software Development</p>
      </div>
       <div class="col-sm-6">
        <img src="{{asset('storage/car/black.jpg')}}" width="100%" height="90%">
        <p>Software Development</p>
      </div>
      <div class="col-sm-6">
        <img src="{{asset('storage/car/black.jpg')}}" width="100%" height="90%">
        <p>Software Development</p>
      </div> --}}
    </div>
  </div>
</div>
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('storage/wallpaper/'.$adminprofile->bottomwallpaper)}}"></div>
</div>
<script>
  $('#abcd').owlCarousel({
    loop:true,
    margin:100,
    nav:false,
    autoplay:true,
    responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
    }
  }) 
</script>
@endsection    

