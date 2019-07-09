<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title> SuperAdmin </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/bootstrap.min.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/bootstrap-extend.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/master_style.css') }}">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/_all-skins.css') }}">   
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/linea-icons/linea.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/Ionicons/css/ionicons.css') }}"> 
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/themify-icons/themify-icons.css') }}">
    <!-- dark teamplate  -->
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/master_style_dark.css') }}">
    {{-- datatable  --}}
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/adminTemplate/Css/toastr.min.css') }}">
    @routes()
</head>
<body class="hold-transition skin-info fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo">
              <!-- mini logo -->
                <div class="logo-mini">
                    <span class="light-logo"><img src="{{ asset('bower_components/adminTemplate/Img/logo-light.png') }}" alt="logo"></span>
                </div>
                <div class="logo-lg">
                    <span class="light-logo">Quynh - PHP Team </span>
                    {{-- <span class="dark-logo"><img src="../../images/logo-dark-text.png" alt="logo"></span> --}}
                </div>
            </a>
             <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div>
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                       <span class="sr-only"></span>
                    </a>
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="search-box">
                            <a class="nav-link hidden-sm-down" href="javascript:void(0)">
                                <i class="mdi mdi-magnify"></i>
                            </a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i>
                            </form>
                         
                        </li>   
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <img src="{{ Auth::user()->avatar }}" class="user-image rounded-circle" alt="User Image">
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <!-- User image -->
                                <li class="user-header bg-img"  data-overlay="3">
                                    <div class="flexbox align-self-center">                     
                                        <img src=" {{ Auth::user()->avatar }}" class="float-left rounded-circle" alt="User Image">                   
                                        <h4 class="user-name align-self-center">
                                            <span>{{ Auth::user()->name }}</span>
                                            <small>{{ Auth::user()->email }}</small>
                                        </h4>
                                    </div>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body" style="background-color: #313640">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i>{{ trans('message.MyProfile') }}</a>
                                    <a class="dropdown-item logout" href="{{ route('logout') }}">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    {{--   <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm   btn-rounded btn-success">View Profile</a></div> --}}
                                </li>
                            </ul>
                        </li>       

                        <!-- Messages -->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-open"></i>
                            </a>
                            <ul class="dropdown-menu animated fadeInDown">

                                <li class="header">
                                    <div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
                                        <div class="flexbox">
                                            <div>
                                                <h3 class="mb-0 mt-0">5 New</h3>
                                                <span class="font-light">Messages</span>
                                            </div>
                                            <div class="font-size-40">
                                                <i class="mdi mdi-email-alert"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                  Lorem Ipsum
                                                  <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                                </h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                          </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">               
                                    <a href="#" class="text-white bg-info">See all e-Mails</a>
                                </li>
                            </ul>
                        </li>
                        <li>   
                            <a href="{!! route('user.change-language', ['en']) !!}"  class="dropdown-toggle" >English</a>
                        </li>
                        <li>
                            <a href="{!! route('user.change-language', ['vi']) !!}" class="dropdown-toggle" >Vietnam</a>
                        </li>

                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">

                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="user-profile treeview">
                        <a href="index.html">
                            <img src=" {{ Auth::user()->avatar }}">
                            <span>
                                <span class="d-block font-weight-600 font-size-16">{{ Auth::user()->name }}</span>
                                <span class="email-id">{{ Auth::user()->email }}</span>
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>{{ trans('message.MyProfile') }} </a></li>
                            <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>{{ trans('message.logout') }}</a></li>
                        </ul>
                    </li>
                    <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>{{ trans('message.management') }}</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                            <span>{{ trans('message.MainDashboard')}}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            {{-- <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.MAINDashboard')}}</a></li> --}}
                            <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.general') }}</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.student') }}</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.teacher') }}</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.course') }}</a></li>
                            
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="{{ asset('/admin/teachers')}}">
                            <i class="fa fa-address-book-o" aria-hidden="true"></i>
                            <span> {{ trans('message.techearMangement') }}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ asset('/admin/teachers')}}">
                                     <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                    {{ trans('message.teacherList')}}
                                </a>
                            </li>
                        </ul>
                    </li>  

                    <li class="treeview">
                        <a href=" {{ asset('/admin/students')}} ">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span> {{ trans('message.studentMangement') }}</span>
                        </a>
                    </li> 

                     <li class="treeview">
                        <a href=" {{ asset('/admin/courses')}} ">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <span> {{ trans('message.courseMangement') }}</span>
                        </a>
                    </li> 
                </ul>
            </section>
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content-content')
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/yelloww.strawberry"></a>
                    </li>
               </ul>
            </div>
            &copy; 2019 . Design by <a href="https://www.facebook.com/yelloww.strawberry">Quynh <3 </a>.
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <div class="rpanel-title">
                <span class="btn pull-right"><i class="fa fa-times" aria-hidden="true"  data-toggle="control-sidebar"></i></span> 
            </div>  
            <!-- Create the tabs -->
            <ul class="nav nav-tabs control-sidebar-tabs">

                <li class="nav-item"><a href="#control-sidebar-theme-demo-options-tab" class="active" data-toggle="tab">{{ trans('message.setting') }}</a></li>
                {{-- <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Tasks</a></li> --}}
                <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">{{ trans('message.General') }}</a></li>
                <li class="nav-item"><a href="#control-sidebar-logout-tab" data-toggle="tab">{{ trans('message.logout') }}</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">{{ trans('message.StatsTab') }}</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">{{ trans('message.General') }} {{ trans('message.setting') }}</h3>
                    </form>
                </div>
                <div class="tab-pane" id="control-sidebar-logout-tab">
                    <p>{{ trans('message.setting')}}</p>
                    <a class="dropdown-item logout" href="{{ route('logout') }}">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            <!-- /.tab-pane -->
            </div>
        </aside>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('bower_components/adminTemplate/Js/jquery-3.3.1.min.js') }}"></script>

    <!-- popper -->
    <script src="{{ asset('bower_components/adminTemplate/Js/popper.min.js') }}"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ asset('bower_components/adminTemplate/Js/bootstrap.min.js') }}"></script>

    <!-- SlimScroll -->
    <script src="{{asset('bower_components/adminTemplate/Js/jquery.slimscroll.min.js') }}"></script>

    <!-- FastClick -->
    <script src="{{ asset('bower_components/adminTemplate/Js/fastclick.js') }}"></script>

    <!-- Superieur Admin App -->
    <script src="{{ asset('bower_components/adminTemplate/Js/template.js') }}"></script>

    <!-- Superieur Admin for demo purposes -->
    <script src="{{ asset('bower_components/adminTemplate/Js/demo.js') }}"></script>
    {{-- link datatable --}}
    <script src="{{ asset('bower_components/adminTemplate/Js/jquery.dataTables.min.js') }}"></script>
    {{-- validation  --}}
    <script src="{{ asset('bower_components/adminTemplate/Js/validation.js') }}"></script>
    <script src="{{ asset('bower_components/adminTemplate/Js/form-validation.js') }}"></script>
    <script src="{{ asset('bower_components/adminTemplate/Js/toastr.min.js') }}"></script>
    <script src="{{ asset('bower_components/adminTemplate/Js/ckeditor.js') }}"></script>
    {{-- link js nè  --}}
    <script src="{{ asset('js/admin.js') }}"></script>
    @yield('ajax')

   
</body>
</html>
