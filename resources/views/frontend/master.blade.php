@extends('layouts.app')
@include('layouts.meta')
@include('layouts.header')
@section('navbar')

<style>
  .footer_heading{
    color:white;
    text-transform:uppercase;
    text-align:center;
    padding-bottom:20px;
    font-weight:900;
  }
  .navbar{
    background-color:darkred;
  }
  .navbar-light .navbar-nav .nav-link{
    color:white;
    font-weight:400;
    font-family:sans-serif;
    font-size:0.9em;
  letter-spacing:1px;
  }
</style>
  <nav class="navbar navbar-expand-sm navbar-light sticky-top">
    <span>      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
      </button>
      <img src="{{asset('storage/logo/logo.jpg')}}" height="70px" style="margin-left:25px">
      <a class="navbar-brand" href="{{route('home')}}" id="l"> </a>
    </span>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav  ml-auto" id="l1">       
        <li class="nav-item dropdown">
          <a href="{{route('home')}}" class="nav-link"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
            HOME
          </a> 
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{route('cars')}}">CARS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">CONTACT</a>
        </li>
      </ul>
    </div>  
  </nav>
@endsection
{{-- @include('inc.footer') --}}
{{-- footer starts --}}
@section('footer')
<div class="container-fluid" style="background-color:black; padding-top:30px; padding-bottom:100px;" id="contact">
  <div class="footer_heading">
    <h1>speed & shine autozone pvt.ltd.</h1>
  </div>
  <div class="row footer">
    <div class="col-md-4">
      <div class="footer-icons">
        <p><i class="fas fa-map-marker-alt"></i> &nbsp;Address</p>
      </div>
      <div class="footer-text">
        <p>
          @if(isset($footer->address))
            {{ $footer->address }}
          @else
            Butwal,Nepal
          @endif
                
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="footer-icons">
        <p><i class="fas fa-phone fa-flip-horizontal"></i> &nbsp;Telephones</p>
      </div>
      <div class="footer-text">
        <p>
          @if(isset($footer->phno))
            {{ $footer->phno }}
          @else
            +9779847000000
          @endif
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="footer-icons">
        <p>&nbsp;Follow us</p>
      </div>
      <div class="footer-text">
        <div>
          <a class="fab fa-facebook" style="text-decoration: none;" href="
            @if(isset($footer->facebook))
              {{ $footer->facebook }}
            @else
              www.facebook.com
            @endif ">
          </a>
          <a class="fab fa-twitter" style="text-decoration: none;" href="
            @if(isset($footer->twitter))
              {{ $footer->twitter }}
            @else
              www.twitter.com
            @endif ">
          </a>
          <a class="fab fa-google-plus" style="text-decoration: none;" href="
            @if(isset($footer->gmail))
              {{ $footer->gmail }}
            @else
              no address
            @endif ">
          </a>
          <a class="fab fa-linkedin" style="text-decoration: none;" href="
            @if(isset($footer->linkin))
              {{ $footer->linkin }}      
            @else
              no address     
            @endif ">
          </a>
          <a class="fab fa-instagram" style="text-decoration: none;" href="
            @if(isset($footer->instagram))
              {{ $footer->instagram }}
            @else
              no address
            @endif ">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row map" style="align:center;margin-top:0px;">
    <iframe src="{{$footer->googlemap}}" width="100%" height="250px" frameborder="0" id="map" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<div class="container-fluid w-100" style="background-color:#f4f4f4;">
  <div class="row">
    <div class="col-md-12 text-center" style="padding-top:20px;">
      <p>&copy; Internet Provider</p>
    </div>
  </div>
</div>
@endsection