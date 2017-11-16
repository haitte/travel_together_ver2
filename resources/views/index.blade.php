<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<html lang="en">
<head>
  <title>traveltogether</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

    <title>traveltogether</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <!-- js file -->
    
  <!-- css file -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootsnav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index_main.css" rel="stylesheet">
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
                    <img src="images/brand/logo-white.png" class="logo logo-display" alt="">
                    <img src="images/brand/logo-black.png" class="logo logo-scrolled" alt="">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dropdowns</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Custom Menu</a></li>
                            <li class="dropdown"></li>
                            <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#">My Profile</a></li>
                    <li id="signin"><a href="/signin">Sign Up/ Log In</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>   

        <!-- Start Side Menu -->
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->

    <div class="clearfix"></div>

    <!-- Start Home and filter bar with background photo -->


    <div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-color: #aaa">
            <div class="container-agoda">
                <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">feel the world</h1>
                <h2 id="hero-banner-header2" class=" fade-in " data-selenium="hero-banner-h2">enjoy your holiday with great people</h2>
                <h2 id="hero-banner-header3" class="fade-in" data-selenium="hero-banner-h3"></h2>                      
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="filter-bar _j_filter " style="top: 46px;">
                            <div class="filter-wrapper clearfix">
                                <div class="row">
                                <div class="col-xs-6 col-sm-3">
                                <div class="flr-place">
                                    <div class="ui-input _j_go_mdd_list">
                                            <input type="text" id="_j_together_mdd_search" class="_j_mdd_input" placeholder="Destination">
                                        </div>
                                        <div class="drop drop-place hide _j_mdd_list">
                                            <ul class="all"></ul>
                                            <ul class="col1"></ul>
                                            <ul class="col2"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3"> 
                                    <div class="flr-date _j_time_tpl">
                                        <div class="ui-input">
                                            <input type="text" class="_j_time_input" placeholder="start now">
                                            <i class="icon-date _j_date"></i>
                                            <input type="text" value="" readonly="readonly" id="together_datepicker" style="width: 30px; height: 30px; border: none; padding: 0; margin: 0;position: absolute;left: 225px;top: 0;opacity: 0">
                                        </div>
                                        <div class="drop drop-date hide _j_time_list">
                                            <ul>
                                                                        <li class="_j_time_select" data-timeflag="1" data-timeinfo="全部出发时间"><a><span class="num _j_show_num"><em>2207</em>结伴</span>全部出发时间</a></li>
                                                                        <li class="_j_time_select" data-timeflag="2" data-timeinfo="今天"><a><span class="num _j_show_num"><em>25</em>结伴</span>今天</a></li>
                                                                        <li class="_j_time_select" data-timeflag="3" data-timeinfo="1个月内"><a><span class="num _j_show_num"><em>726</em>结伴</span>1个月内</a></li>
                                                                        <li class="_j_time_select" data-timeflag="4" data-timeinfo="1-3个月内"><a><span class="num _j_show_num"><em>898</em>结伴</span>1-3个月内</a></li>
                                                                        <li class="_j_time_select" data-timeflag="5" data-timeinfo="3个月以上"><a><span class="num _j_show_num"><em>625</em>结伴</span>3个月以上</a></li>
                                                                </ul>
                                        </div>
                                    </div>
                                </div>
                                 <div class="clearfix visible-xs"></div>
                                <div class="col-xs-6 col-sm-3">  
                                    <div class="sort _j_sort_list">
                                        <a class="on" data-flag="3">Most popular <i></i></a>
                                        <a data-flag="2">New plan<i></i></a>
                                    </div>
                                </div>
                                    <button class="btn btn-default  col-xs-4 col-sm-2" id="planbutton" onclick="location.href='/signin';"style=" right: -5%;">
                                        <img src="/images/cross-plus.png" width="14px";height="14px"; />my plan
                                    </button>    
                                    <!-- <a class="btn btn-primary btn-sm col-xs-4 col-sm-2" id="planbutton2" href="/signin" role="button"><i></i>my plan</a> -->
                                    
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!-- End Home and filter -->

    <!-- Start Content -->
    <div class="section">
        <div class="container">
            <p>
                Lorem ipsum dolor sit amet, vix diam nusquam at. Ex usu labitur nostrud invenire, eos option senserit adversarium in. Est id falli debitis, no novum saperet complectitur mei. Id dictas feugiat deserunt sea, nam te possim gubergren vulputate, eu pro discere officiis. Sit legimus erroribus eu, vel numquam reprehendunt signiferumque eu. Te eam aeque maiorum, pri ad dicta vitae. Expetenda repudiare assentior ut eam, usu ea malis possit quaerendum. Eos idque senserit constituto ut.
            </p>
            <p>
                Lorem ipsum dolor sit amet, vix diam nusquam at. Ex usu labitur nostrud invenire, eos option senserit adversarium in. Est id falli debitis, no novum saperet complectitur mei. Id dictas feugiat deserunt sea, nam te possim gubergren vulputate, eu pro discere officiis. Sit legimus erroribus eu, vel numquam reprehendunt signiferumque eu. Te eam aeque maiorum, pri ad dicta vitae. Expetenda repudiare assentior ut eam, usu ea malis possit quaerendum. Eos idque senserit constituto ut.
            </p>
            <!-- show user plan -->
            <div class="row">
                <div class="col-xs-3 col-sm-3"></div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-3 col-sm-3"></div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-3 col-sm-3"></div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>
            <!-- show recommended plan -->
            <h3> Destinations you will love</h3>
           <div class="row">
                <div class="col-xs-3 col-sm-4"><img src="/images/las.jpeg" width="360px";height="200px"; alt="las" /></div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-3 col-sm-4"><img src="/images/thailand.jpeg" width="360px";height="200px"; alt="thailand" /></div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-3 col-sm-4">
                    <img src="/images/greece.jpeg" width="360px";height="200px";  alt="greece"/></div>
                <div class="clearfix visible-xs"></div>
                
           </div>
        </div>
    </div>
    <!-- End Content -->

    <div class="clearfix"></div>

    <!-- Start Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                   ABC © <a href="http://danurstrap.com/about/">adamnurdin01</a> 2015
                </div>
                <div class="col-xs-6 text-right">
                    
                </div>
            </div>
        </div>         
    </footer>
    <!-- End Footer -->
    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="js/bootsnav.js"></script>
    <script src="js/index_main.js"></script>

</body>
</html>
