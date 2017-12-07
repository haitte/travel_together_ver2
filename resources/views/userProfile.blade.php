@extends('layouts.headerapp')


<!-- 
 -->

@section('header')

    <div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-image: url(images/map.jpg);background-color: #aaa">
            <div class="container-agoda"> 
            <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">Manage your Plan</h1>                 
            </div>
        </div>    
    </div>

    <div class="clearfix"></div>

    <!-- Start Home and filter bar with background photo -->
    <!-- Page Content -->

@yield('content')
<div class="container" style="width:100%;">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4">User Profile</h1>
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
                   <ul class="nav nav-pills nav-justified" style="width:900px;">
                      <li class="active"><a data-toggle="tab" href="#Published">User's Published Event</a></li>
                      <li ><a data-toggle="tab" href="#Attended">User's Attended Plan</a></li>
                   </ul>

                   <div class="tab-content">
                      <div id="Published" class="tab-pane fade in active" style="width:900px;">
                      <table>
                      <tr>
                      <th>Plan Image</th>
                      <th>Plan Name</th>
                      <th>Departure</th>
                      <th>Destination</th>
                      <th>Departure Time</th>
                      <th>Arrive Time</th>
                      </tr>
                  @if(count($plan) > 0)    
                      @foreach($plan as $plan)
                      <tr>
                      <td><a href="{{url ('/publishPlan')}}"><img src="{{ $plan->plan_image}}" class="plan_pic" alt=""></a></td>
                      <td><p class="lead"><a href="{{url ('/publishPlan')}}">{{ $plan->plan_name}}</a></p></td>
                      <td><p class="lead">{{ $plan->departure_name}}</p></td>
                      <td><p class="lead">{{ $plan->destination_name}}</p></td>
                      <td><p class="lead">{{ $plan->departure_time}}</p></td>
                      <td><p class="lead">{{ $plan->arrive_time}}</p></td>
                      </tr>
                      @endforeach
                      </table>
                  @else
                  <p>No Plan avaiable</p>
                  @endif
                   </div>
                   <div id="Attended" class="tab-pane fade" style="width:900px;">
                     <table>
                   <tr>
                   <th>Plan Image</th>
                   <th>Plan Name</th>
                   <th>Departure</th>
                   <th>Destination</th>
                   <th>Departure Time</th>
                   <th>Arrive Time</th>
                   </tr>
                   
                     </table>
                   </div>
                </div>

                </div>
              </div>
        </div>
    </div>
    <!-- /.row -->    
    </div>

    <div class="clearfix"></div>

    <div class="col-4">
        <table>
          <tr>
             <td>
             <div class="container1">
             <a href="https://www.opentable.com/"><img src="https://media-cdn.tripadvisor.com/media/photo-s/0a/7b/7b/c6/restaurant-view.jpg" alt="Restaurant" class="image" style="width:100%"></a>
                 <div class="middle">
                   <a href="https://www.opentable.com/"><div class="text">Find Best Restaurant</div></a>
                 </div>
             </div>
             </td>
             <td>
             <div class="container2">
             <a href="https://www.booking.com/"><img src="https://images.trvl-media.com/media/content/expus/graphics/launch/hotel1320x742.jpg" alt="Hotel" class="image" style="width:100%"></a>
                 <div class="middle">
                 <a href="https://www.booking.com/"><div class="text">Find Best Hotel</div></a>
                 </div>
             </div>
             </td>
             <td>
             <div class="container3">
             <a href="http://www.travelandleisure.com/"><img src="http://seesight-tours.com/wp-content/uploads/2016/02/background-video-seesight.jpg" alt="Sight" class="image" style="width:100%"></a>
                 <div class="middle">
                 <a href="http://www.travelandleisure.com/"><div class="text">Find Best Sight</div></a>
                 </div>
             </div>
             </td>
           </tr>
       </table>
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
