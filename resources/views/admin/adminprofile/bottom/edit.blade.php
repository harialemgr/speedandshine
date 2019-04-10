@extends('admin.layouts.master')
@include('admin.layouts.header')
@include('admin.layouts.footer')
@include('admin.layouts.sidebar')
@include('admin.layouts.meta')
@section('main-content')
    <div class="content-wrapper">
        <section class="content">
            <div class="card">  
               <div class="card-header">
                    <h3 class="card-title">Footer Setting <a href="{{route('dashboard')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('footersetting.update',$footer->id)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input name="address" type="text" class="form-control" value="{{$footer->address}}" id="address" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phno">Phone Number</label>
                                <input name="phno" type="text" class="form-control" value="{{$footer->phno}}" id="phno" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="googlemap">Google Map Link</label>
                                <input name="googlemap" type="text" class="form-control" value="{{$footer->googlemap}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="instagram">Instagram</label>
                                <input name="instagram" type="text" value="{{$footer->instagram}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="facebook">Facebook</label></label>
                                <input name="facebook" type="text" class="form-control" value="{{$footer->facebook}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gamil">Google Plus</label>
                                <input name="gmail" type="text" value="{{$footer->gmail}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">  
                            <div class="form-group col-md-6">
                                <label for="linkin">LinkedIn</label>
                                <input name="linkin" type="text" value="{{$footer->linkin}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="twitter">Twitter</label>
                                <input name="twitter" type="text" value="{{$footer->twitter}}" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

