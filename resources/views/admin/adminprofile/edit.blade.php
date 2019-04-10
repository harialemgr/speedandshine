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
                <h3 class="card-title">Update Profile  </h3>

            </div>
            <div class="card-body">



                    <div class="col-md-2">
                   <label style="visibility:hidden">fadfafa</label><br>
                  <a href="{{ route('wallpaper.index') }}" class="btn btn-primary" title="change and manage wallpaper">wallpaper</a></div>
                  
                  <div class="col-md-2">
                   
                   <label style="visibility:hidden">fadfafa</label><br>
                  <a href="{{route('footersetting.edit',1)}}" class="btn btn-primary" title="Change Footer Setting">Footer Setting</a></div>
                  </div>
     

              
              <br>
<br>

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
$('.imagechk1').change(function () {

var value = $(this).val();


$('#imageink1').text(value);
});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.4/sweetalert2.all.js"></script>
    <script>
        const toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
    </script>
    <script>
        @if(session('successMsg'))
            toast({ type: 'success', title: `{{ session('successMsg') }}` })
        @elseif(session('failedMsg'))
            toast({ type: 'success', title: `{{ session('failedMsg') }}` })
        @elseif(session('warningMsg'))
            toast({ type: 'success', title: `{{ session('warningMsg') }}` })
        @endif
    </script>

@endsection

