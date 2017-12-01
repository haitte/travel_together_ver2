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
    <link href="css/PublishPlan.css" rel="stylesheet" type="text/css">
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
                    <li><a href="userProfile">My Profile</a></li>
                    <li id="signin"><a href="/signin">Sign Up/ Log In</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>   
    </nav>
    <!-- End Navigation -->

    <div class="clearfix"></div>

    <div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-color: #aaa">
            <div class="container-agoda"> 
            <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">It's time to travel together</h1>                 
            </div>
        </div>    
    </div>

    <div class="clearfix"></div>

    <!-- Start Home and filter bar with background photo -->
    <!-- Page Content -->
    <div class="ccontainer">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4">{{ $plan->plan_name}}</h1>
             <div id="container_user"> 
                <div id=content_left class=cr_offset1>
                @if(!empty($profile))
                <img src="{{ $profile->profile_pic  }}" class="profile_pic" alt="">
               @else
               <img src="{{ url('images/img1.jpg') }}" class="img1" alt="">
               @endif
                
                @if(!empty($profile))
                   <p class="lead">{{ $profile->name}}</p>
                @else
                <p></p>
                @endif

             @if(!empty($profile))
                <p class="lead">Age: {{ $profile->age}}</p>
             @else
             <p></p>
             @endif

             @if(!empty($profile))
                <p class="lead">Gender: {{ $profile->gender}}</p>
             @else
             <p></p>
             @endif

             @if(!empty($profile))
                  <p class="lead">Resident: {{ $profile->country}}</p>
             @else
              <p></p>
             @endif
 

        </div>
    
                <div id=content_right class=cr_offset2 style="padding-left:50px;">
            <table>
              <tr><td>Departure Time : {{ $plan->departure_time}}</td></tr>
              <tr><td>Arrive Time : {{ $plan->arrive_time}}</td></tr>
              <tr><td>Departure : {{ $plan->departure_name}}</td></tr>
              <tr><td>Destination : {{ $plan->destination_name}}</td></tr>
              <tr><td>Wish how many people in group : {{ $plan->group_num}}</td></tr>
            </table>

        <br/>
  
            <table>
              <tr><td>Description of the trip : </td></tr>
              <tr><td>{{ $plan->description}}</td></tr>
            </table>


  
                </div>
             </div>
          
 <div style="clear:both;"></div>
          

          <!-- Comments Form -->
          <div class="card my-4">
          @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                
                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <h5 class="card-header" >Leave a Comment:</h5>
            <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ url('/addComment') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
              <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
              <textarea id="comment" rows="5" type="" class="form-control" name="comment" required></textarea>
              @if ($errors->has('comment'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('comment') }}</strong>
                                </span>
                            @endif
                </div>
                <button type="submit1" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Comment1</h5>
              @if(count($comment) > 0)
                        @foreach($comment as $comment)
                        <p>{{$comment->comment}}</p>
                        <hr>
                    @endforeach
                    @else
                    <p>No post Avai</p>
                    @endif
            
              <div class="reply">
                 <script>
                 $(document).ready(function(){
                 $("#myDIV").hide();
                 $("#myDIV2").hide();
                 $("#show").click(function(){
                 $("#myDIV").show();
                   });
                 $("#hide").click(function(){
                 $("#myDIV").hide();
                 $("#myDIV2").show();
                   });
                 });
                 </script>

              <p id="show" style="text-align: left;">Reply</p>           

              <div id="myDIV2" class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0" >Reply</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

                <div id="myDIV" class="card my-4">
                <div class="card-body">
                  <form>
                    <div class="form-group">
                       <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <input type="button" value="Submit" id="hide" class="btn btn-primary">
                  </form>
                </div>
                </div> 


            </div>
          </div>
        </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Comment2</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              <p id="show" style="text-align: left;">Reply</p>
              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Reply</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

         <div class="container1">
         <a href="https://www.opentable.com/"><img src="https://media-cdn.tripadvisor.com/media/photo-s/0a/7b/7b/c6/restaurant-view.jpg" alt="Restaurant" class="image" style="width:100%"></a>
             <div class="middle">
               <a href="https://www.opentable.com/"><div class="text">Find Best Restaurant</div></a>
             </div>
         </div>
         <div class="container2">
         <a href="https://www.booking.com/"><img src="https://images.trvl-media.com/media/content/expus/graphics/launch/hotel1320x742.jpg" alt="Hotel" class="image" style="width:100%"></a>
             <div class="middle">
             <a href="https://www.booking.com/"><div class="text">Find Best Hotel</div></a>
             </div>
         </div>
         <div class="container3">
         <a href="http://www.travelandleisure.com/"><img src="http://seesight-tours.com/wp-content/uploads/2016/02/background-video-seesight.jpg" alt="Sight" class="image" style="width:100%"></a>
             <div class="middle">
             <a href="http://www.travelandleisure.com/"><div class="text">Find Best Sight</div></a>
             </div>
         </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
 <!-- End Content -->

    <div class="clearfix"></div>

    <!-- Start Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>    
    <!-- End Footer -->
    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="js/bootsnav.js"></script>
    

</body>
</html>
