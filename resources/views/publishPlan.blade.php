@extends('layouts.headerapp')


<!-- 
 -->

@section('header')

    <div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-image:url('{{ asset('images/travel.jpg') }}');background-color: #aaa">
            <div class="container-agoda"> 
            <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">It's time to travel together</h1>                 
            </div>
        </div>    
    </div>

    <div class="clearfix"></div>

    <!-- Start Home and filter bar with background photo -->
    <!-- Page Content -->

@yield('content')
    <div class="ccontainer">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->

             <div id="container_user"> 
                <div id=content_left class=cr_offset1>
                @if(!empty($user))
                <img src="{{ $user->profile_pic  }}" class="profile_pic" alt="">
               @else
               <img src="{{ url('images/img1.jpg') }}" class="img1" alt="">
               @endif
                
                @if(!empty($user))
                   <p class="lead">{{ $user->name}}</p>
                @else
                <p></p>
                @endif

             @if(!empty($user))
                <p class="lead">Age: {{ $user->age}}</p>
             @else
             <p></p>
             @endif

             @if(!empty($user))
                <p class="lead">Gender: {{ $user->gender}}</p>
             @else
             <p></p>
             @endif

             @if(!empty($user))
                  <p class="lead">Resident: {{ $user->country}}</p>
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
              <textarea id="comment" rows="5" class="form-control" name="comment" required></textarea>
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
            <div class="media-body">
              @if(count($comment) > 0)
                        @foreach($comment as $comment)
                        <img align="left" class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <h5 class="mt-0">Comment</h5>
                        <p>{{$comment->comment}}</p>
                <hr>
                    @endforeach
                    @else
                    <p>No post Avai</p>
                    @endif
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

@yield('footer')
    <!-- Start Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>    
    <!-- End Footer -->
@endsection
