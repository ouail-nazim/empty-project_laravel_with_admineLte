@extends('adminlte::page')

@section('css')
  <link rel="shortcut icon" href="{{ asset('images/avatar.svg') }}" type="image/x-icon"/>
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('title')
  {{_('admin pannel')}} | {{setting("app_name")}}
@endsection
{{-- content_top_nav_left --}}
@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route("admin.home")}}" class="nav-link">
          {{__('Dashboard')}} 
        </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route("home")}}" class="nav-link">
        {{__('Web Site Home')}} 
      </a>
    </li>
@endsection
{{-- content_top_nav_right --}}
@section('content_top_nav_right')
    <form class="form-inline ml-3">
        {{-- @csrf --}}
        <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
            </button>
        </div>
        </div>
  </form>
@endsection
@section('usermenu_header')
  <a href="#" class="dropdown-item docs-creator m-1">
    <i class="fas fa-user mr-2"></i> Profile
  </a>
  <a href="#" class="dropdown-item docs-creator m-1">
    <i class="fas fa-cogs mr-2"></i> Modifier mon profile
  </a>
@endsection


@section('left-side-bar')
    <!-- Brand Logo -->
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif
    
      <!-- Sidebar -->
      <div class="sidebar">
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">     
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Etudiantes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/" class="nav-link">
                    <i class="fas fa-user-check nav-icon"></i>
                    <p>Choix de Etudiantes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/" class="nav-link">
                    <i class="fas fa-chart-pie nav-icon"></i>
                    <p>Repartition</p>
                  </a>
                </li>
              </ul>
            </li> 
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                  List des enseignants
                </p>
              </a>
            </li>          
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
@endsection

@yield('main-content')

@section('footer')
    <strong>Copyright &copy; 2020-2021 <a href="#" class="text-success" >{{setting('app_name')}}</a>.</strong>
        All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> {{setting('app_version')}}
    </div>
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@stop