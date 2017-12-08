<!DOCTYPE html>
<html class="no-js" lang="de"> 
<html lang="{{ app()->getLocale() }}">
<head>
  <title>{{ config('app.name', 'traveltogether') }}</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
   <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- style -->
      <style>
  .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  /* * html .ui-autocomplete {
    height: 100px;
  } */
  ._1iddsry {
    font-weight: 700 !important;
    font-family: Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
    font-size: 12px !important;
    line-height: 16px !important;
    letter-spacing: 0.4px !important;
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    color: #484848 !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
    text-transform: uppercase !important;
    white-space: nowrap !important;
    margin-bottom: 2px !important;
}
._2iddsry{
    font-weight: 700 !important;
    font-family: Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
    font-size: 19px !important;
    line-height: 22px !important;
    letter-spacing: undefined !important;
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    color: #484848 !important;
    max-height: 44px !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
    display: -webkit-box !important;
    -webkit-line-clamp: 2 !important;
    -webkit-box-orient: vertical !important;
    margin-bottom: 4px !important;
}
._3iddsry{
    font-weight: 300 !important;
    font-family: Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
    font-size: 15px !important;
    line-height: 18px !important;
    letter-spacing: 0.2px !important;
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    color: #484748 !important;
}
.post_plan_main{
    padding-left:8%;
    padding-right: 8%;
}
.post_row{

}
.post_clo{

}
  </style>

  <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/bootsnav.css') }}" /> 
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" /> 
    <link rel="stylesheet" href="{{ URL::asset('css/index_main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/UserProfile.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/PublishPlan.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />  


      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
  <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
  <body class="critical newhome">     
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#brand">
                    <img src="{{ asset('images/brand/logo-white.png')}}" class="logo logo-display" alt="logo">
                    <img src="{{ asset('images/brand/logo-black.png')}}" class="logo logo-scrolled" alt="">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="/mytrips">My Trips</a></li>
                    <li><a href="/trips">All Trips</a></li>
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Edit</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url ('/profile')}}">Edit Profile</a></li>
                            <li class="dropdown"></li>
                            <li><a href="{{url ('/plan')}}">Create Plan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url ('/userProfile')}}">My Profile</a></li>

                     @guest
                            <li id="signin"><a href="{{ route('login') }}">Login</a></li>
                            <li id="signin2"><a href="{{ route('register') }}">Register</a></li>
                    @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>   
    </nav>
    <!-- End Navigation -->

    <div class="clearfix"></div>

    <!-- Start Home and filter bar with background photo -->
    @yield('header')
    <!-- End Home and filter -->

    <!-- Start Content -->
    @yield('content')
    <!-- End Content -->

    <div class="clearfix"></div>

    <!-- Start Footer -->
    @yield('footer')
    <!-- End Footer -->
    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/index.js')}}></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>  
    <!-- <script type="text/javascript" src="js/index.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery.js"></script>     -->
    <script type="text/javascript">
       
        
   </script>   
    
    <!-- Bootsnavs -->
    <script type="text/javascript" src={{asset('js/bootsnav.js')}}></script>
    <!-- <script src="js/bootsnav.js"></script> -->

</body>
</html>
