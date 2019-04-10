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
                <h3 class="card-title">Add Wallpapers<a href="{{route('wallpaper.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                </h3>
            </div>
            <div class="card-body">
      <form action="{{route('wallpaper.update',$wallpaper->id)}}" method="post"  enctype="multipart/form-data">
         @csrf
        @method('PATCH')
                  <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input name="name" type="text" placeholder="Enter Name" class="form-control" value="{{$wallpaper->name}}" id="status">
                     
                  </div>
    


                  <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Update</button>
              </form>


          </div>
        </div>
    </section>
  </div>
<script>
$(document).ready(function() {
 function readURL(input) {
 $('#image-content').show("slow");
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

});

$('.imagechk').change(function () {

    var value = $(this).val();


    $('#imageink').text(value);
});

</script>
@endsection

