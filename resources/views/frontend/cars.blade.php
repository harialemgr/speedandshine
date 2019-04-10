@extends('frontend.master')
@section('main-content')
<div class="container-fluid" style="background-color:black;padding-top:50px;color:white;" id="car_collection">
    <div class="row"> 
        <section class="banner-bottom-wthree py-5 px-4">
            @php $cnt=0; @endphp
                @foreach($cars1 as $car)
                    <div class="row banner-grids">
                        @if($cnt%2==0)
                            <div class="col-md-6 content-right-bottom text-right py-3">
                                <img src="{{asset('storage/car/'.$car->image)}}" alt="news image" id="carimage" class="img-fluid">
                            </div>
                        @endif
                        <div class="col-md-6 content-left-bottom text-left pr-lg-5 py-3 first_div">
                            <h4>{{$car->name}}</h4>
                            <p class="mt-2 text-left" id="car_description">{{$car->description}}</p>
                        </div>
                        @if($cnt%2!=0)
                            <div class="col-md-6 content-right-bottom text-right py-3 second_div">
                                <img src="{{asset('storage/car/'.$car->image)}}" alt="news image" id="carimage" class="img-fluid">
                            </div>
                        @endif
                        @php $cnt++; @endphp
                    </div>
                @endforeach
        </section>
    </div>    
</div>
@endsection