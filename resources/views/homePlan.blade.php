@extends('layouts.headerapp')


<!-- 
 -->

@section('header')

    <div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-image: url(/images/travel.jpg);background-color: #aaa">
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

 <div class="signup">
        <div class="card my-4">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                
                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <div class="panel panel-default">
                
                <div class="panel-heading"><center>Join In Form</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/addSignUp') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">User Name :</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact_num') ? ' has-error' : '' }}">
                            <label for="contact_num" class="col-md-4 control-label">Contact Number :</label>

                            <div class="col-md-6">
                                <input id="contact_num" type="contact_num" class="form-control" name="contact_num" value="{{ old('contact_num') }}" required autofocus>

                                @if ($errors->has('contact_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_num') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                            <label for="date_of_birth" class="col-md-4 control-label">Date of Birth :</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="" class="form-control" name="date_of_birth" placeholder="yyyy/mm/dd" required>
                                @if ($errors->has('date_of_birth'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                     </span>
                               @endif
                        </div>
                    </div>


                        <div class="form-group{{ $errors->has('male_num') ? ' has-error' : '' }}">
                            <label for="male_num" class="col-md-4 control-label">Enter Number of people : </label>

                            <div class="col-md-6">
                                <input id="male_num" type="" class="form-control" name="male_num" required>Male
                                @if ($errors->has('male_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('male_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('female_num') ? ' has-error' : '' }}">
                        <label for="female_num" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <input id="female_num" type="" class="form-control" name="female_num" required>Female
                                @if ($errors->has('female_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('female_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                            <script>
                               $(document).ready(function(){
                               $("button").click(function(){
                               alert("Successfully!");
                             });
                            });
                            </script>
                                <button type="submit" class="btn btn-primary" style="background-color:#f43438">
                                    Sign up
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
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
                <button type="submit1" class="btn btn-primary" style="background-color:#f43438">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <div class="media-body">
              @if(count($comment) > 0)
                        @foreach($comment as $comment)
                        <img align="left" class="d-flex mr-3 rounded-circle" src="{{ $profile->profile_pic}}" style="width:50px;height:50px" alt="">
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
