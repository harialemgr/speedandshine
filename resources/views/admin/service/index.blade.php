@extends('admin.layouts.master')
@include('admin.layouts.header')
@include('admin.layouts.footer')
@include('admin.layouts.sidebar')
@include('admin.layouts.meta')
@section('main-content')
<style>
p.card-text{
  white-space:nowrap;
  overflow:hidden;
  text-overflow:ellipsis;
}
</style>
<div class="content-wrapper">
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <a href="{{route('service.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp; Add</a>    
          <span style="padding-left:30%;font-size:big ">Services</span>
          <a href="{{route('service.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp;Back</a>
        </h3>
      </div>
      <div class="card-body">
        <div class="row">
          @foreach($services as $service)
            <div class="card column" style="width:200px">
              <div style="height:150px;padding:0;">
                <img class="card-img-top" src="{{asset('storage/service/'.$service->image)}}" alt="Card image" style="width:100%;height:inherit">
              </div>
              <div class="card-body" style="padding:2px;">
                <div class="row">
                  <h4 class="card-title column">{{$service->name}}</h4> <a href="{{route('service.edit',$service->id)}}" class="column" title="edit"><i class="fas fa-edit"></i></a>
                  <form id="delete-item{{$service->id}}"  action="{{route('service.destroy',$service->id)}}" style="display:none"  method="post">
                    @csrf  
                    @method('DELETE')
                  </form>
                  <a href="" onclick="
                    if(confirm('Are you sure, You want to delete this ?')){
                      event.preventDefault();
                      document.getElementById('delete-item{{$service->id}}').submit();
                    }
                    else{
                      event.preventDefault();
                    } " class="column pull-right">
                    <i class="fas fa-trash"></i>
                  </a>
                </div>
            </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
</div>

@endsection

