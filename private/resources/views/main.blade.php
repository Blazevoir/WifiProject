<?php get_header() ?>
<!DOCTYPE html>


<body class="hold-transition sidebar-mini" @isset($CpuntosAcceso,$Cfechas,$Cmonths,$Cmacs,$Clocations) onload='graficas( {{$CpuntosAcceso}},{{$Cfechas}}, {{$Cmonths}},{{$Cmacs}},{{$Clocations}} )'@endisset>
   <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="{{ url('/adminarea') }}" class="nav-link">Admin area</a>
            </li>
         </ul>

         <!-- SEARCH FORM -->
         <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
               <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
               <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                  </button>
               </div>
            </div>
         </form>

         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">
            <li><?php echo do_shortcode('[gtranslate]'); ?></li>
            @if(!isset(Auth::user()->id))      
            <a href="{{ url('login') }}" class="nav-link">Login</a>
            @endif
            @if(isset(Auth::user()->id))     
            <a href="{{ url('home') }}" class="nav-link">Hola, {{ Auth::user()->name}}</a>
            <form class="formulario" action="{{ url('logout') }}" method="POST">
                @csrf
            </form>
            <a class="nav-link submitform" href="#">Log out</a>
            @endif
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-comments"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                        <div class="media-body">
                           <h3 class="dropdown-item-title">
                              Brad Diesel
                              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                           </h3>
                           <p class="text-sm">Call me whenever you can...</p>
                           <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                     </div>
                     <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                        <div class="media-body">
                           <h3 class="dropdown-item-title">
                              John Pierce
                              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                           </h3>
                           <p class="text-sm">I got your message bro</p>
                           <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                     </div>
                     <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                        <div class="media-body">
                           <h3 class="dropdown-item-title">
                              Nora Silvester
                              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                           </h3>
                           <p class="text-sm">The subject goes here</p>
                           <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                     </div>
                     <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
               </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                     <i class="fas fa-envelope mr-2"></i> 4 new messages
                     <span class="float-right text-muted text-sm">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                     <i class="fas fa-users mr-2"></i> 8 friend requests
                     <span class="float-right text-muted text-sm">12 hours</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                     <i class="fas fa-file mr-2"></i> 3 new reports
                     <span class="float-right text-muted text-sm">2 days</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                     class="fas fa-th-large"></i></a>
            </li>
         </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->


         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="{{ url('public/assets/img/logo.png') }}" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                  <a href="#" class="d-block">M-I-G</a>
               </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  
                  @if(!isset(Auth::user()->id))  
                  <li>
                     <ul class="navbar-nav ml-2">
                        <li class="nav-link">Global Functions</li>
                        <li class="nav-link">
                           <a href="{{ url('register') }}" class="nav-link ml-3">
                              <p>Register</p>
                           </a>
                        </li>
                        <li>
                              <a href="{{ url('login') }}" class="nav-link ml-3">
                                 <p>Login</p>
                              </a>
                        </li>
                     </ul>
                  </li>
                  @endif
                  @if(isset(Auth::user()->id))    
                  <li>
                     <ul class="navbar-nav ml-2">
                        <li class="nav-link">User functions</li>
                        <form class="formulario" action="{{ url('logout') }}" method="POST">
                            @csrf
                        </form>
                        <a class="nav-link submitform ml-3" href="#">Log out</a>
                     </ul>
               </li>
                  @if(Auth::user()->tipo === 'admin')
                  <ul class="navbar-nav ml-2">
                     <li class="nav-link">Admin functions</li>
                     <li class="nav-item ml-3">
                        <form method="post" action="{{ url('veractivo') }}" class="formactivo2">
                           @csrf
                        </form>
                        <a href="{{ url('/activo') }}" class="nav-link linkformactivo2">
                           <p>Active period list</p>
                        </a>
                     </li>                    
                     <li class="nav-item ml-3">
                        <form method="post" action="{{ url('activo/create') }}" class="formactivo">
                           @csrf
                        </form>
                        <a href="#" class="nav-link linkformactivo">
                           <p>Create active period</p>
                        </a>
                     </li>
                     <li class="nav-item ml-3">
                        <form method="post" action="{{ url('verusers') }}" class="formuser">
                           @csrf
                        </form>
                        <a href="#" class="nav-link linkformuser">
                           <p>User list</p>
                        </a>
                     </li>                     
                  </ul>
                  @endif
                  
                  @unless (Auth::user()->id === null)
                   <ul class="navbar-nav ml-2">
                   <li class="nav-link">Technician functions</li>
                    <li class="nav-item ml-3">
                     <form method="post" action="{{ url('verpuntoacceso') }}" class="formpuntoacceso2">
                        @csrf
                     </form>
                     <a href="#" class="nav-link linkformpuntoacceso2">
                        <p>Access point list</p>
                     </a>
                  </li>
                  <li class="nav-item ml-3">
                     <form method="post" action="{{ url('puntoacceso/create') }}" class="formpuntoacceso">
                        @csrf
                     </form>
                     <a href="{{ url('puntoacceso/create') }}" class="nav-link linkformpuntoacceso">
                        <p>Create access point</p>
                     </a>
                  </li>                   

                  @endunless
                  @endif
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Admin Area</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">Admin area</li>
                     </ol>
                  </div><!-- /.col -->
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

      <!-- Main content -->
      @isset($result)
     <div class="card card-primary card-outline col-lg-8 ml-auto mr-auto">
        <div class="card-body">
           <p class="card-text alert alert-success">
               {{$result}}
           </p>
        </div>
     </div>
     @endisset
     
     @yield('content')
   
      <!-- Control Sidebar -->
      <!--<aside class="control-sidebar control-sidebar-dark">-->
         <!-- Control sidebar content goes here -->
      <!--   <div class="p-3">-->
      <!--      <h5>Title</h5>-->
      <!--      <p>Sidebar content</p>-->
      <!--   </div>-->
      <!--</aside>-->
      <!-- /.control-sidebar --></div>

      <?php get_footer() ?>