@extends('layouts.app')
<style type="text/css">
    .img1{
        border-radius:100%;
        max-width: 100%;
    }
    .profile_pic{
        border-radius:100%;
        max-width:100px;
        max-height:100px;
    }
    .plan_pic{
        max-width:50px;
        max-height:100px;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             
              @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                
                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
                
                
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="col-md-4">Dashboard</div>
                  </div>  
                
                <div class="panel-body">
                    
                <div class="col-md-4">

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
                    
            <div class="col-md-8">
            
               
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
                <td><img src="{{ $plan->plan_image}}" class="plan_pic" alt=""></td>
                <td><p class="lead">{{ $plan->plan_name}}</p></td>
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

        <div class="col-md-8 col-md-offset-2">

        @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                
                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <div class="panel panel-default">
                
                <div class="panel-heading">Add Comment</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/addComment') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                        <label for="comment" class="col-md-4 control-label">Enter Comment </label>

                        <div class="col-md-6">
                            <textarea id="comment" rows="7" type="" class="form-control" name="comment" required></textarea>

                            @if ($errors->has('comment'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('comment') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ADD Comment
                                </button>
                            </div>
                        </div>
                    </form>


        <h3>Comment</h3>
                    
                     @if(count($comment) > 0)
                        @foreach($comment as $comment)
                        <p>{{$comment->comment}}</p>
                        <hr>
                    @endforeach
                    @else
                    <p>No post Avai</p>
                    @endif
        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
