@section("side-bar-content")
@php $adminprofile = App\Http\Controllers\HomeController::getGeneralSetting() @endphp
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('dashboard')}}" class="brand-link text-center">
           <span class="brand-text font-weight-light"><b>CAR CMS</b    ></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('dashboard') }}"><i class="fa fa fa-bars nav-icon"></i> <p> Dashboard</p></a></li>
                    <li class="nav-item"><a href="{{empty($adminprofile->id) ? route('adminprofile.create') :route('adminprofile.edit',$adminprofile->id) }}" class="nav-link"><i class="nav-icon fas fa-user"></i></i><p>Profile</p></a>
                      
                    </li>                  
                    <li class="nav-item"><a href="{{route('car.index')}}" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Cars Collection {{-- <span class="right badge badge-danger">New</span>--}}</p></a></li>
                  
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection