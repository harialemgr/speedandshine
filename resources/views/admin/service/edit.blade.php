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
                    <h3 class="card-title">Update<a href="{{route('service.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="/service/{{$service->id}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input name="name" type="text" placeholder="Enter Service Name" class="form-control" id="name" value="{{$service->name}}"> 
                        </div>
                        <div>
                            <img src="{{asset('storage/service/'.$service->image)}}" alt="current picture" height="250px">
                        </div>
                        <div id="image-content" hidden>
                            <img id="blah" src="#" alt="your image" class="img-responsive" width="250" height="200" />
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
        $("#imgInp").change(function(){readURL(this); });
    });
    
    $('.imagechk').change(function () {
        var value = $(this).val();
        $('#imageink').text(value);
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

