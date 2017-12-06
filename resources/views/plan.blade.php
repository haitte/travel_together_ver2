@extends('layouts.app')

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
                
                <div class="panel-heading">Plan</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/addPlan') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('plan_name') ? ' has-error' : '' }}">
                            <label for="plan_name" class="col-md-4 control-label">Enter Plan Name</label>

                            <div class="col-md-6">
                                <input id="plan_name" type="plan_name" class="form-control" name="plan_name" value="{{ old('plan_name') }}" required autofocus>

                                @if ($errors->has('plan_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plan_name') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('departure_name') ? ' has-error' : '' }}">
                            <label for="departure_name" class="col-md-4 control-label">Enter Departure Name</label>

                            <div class="col-md-6">
                                <input id="departure_name" type="" class="form-control" name="departure_name" required>

                                @if ($errors->has('departure_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departure_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('departure_time') ? ' has-error' : '' }}">
                            <label for="departure_time" class="col-md-4 control-label">Enter Departure Time</label>

                            <div class="col-md-6">
                                <input id="departure_time" type="" class="form-control" name="departure_time" placeholder="yyyy/mm/dd" required>
                                @if ($errors->has('departure_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departure_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('destination_name') ? ' has-error' : '' }}">
                            <label for="destination_name" class="col-md-4 control-label">Enter Destination Name</label>

                            <div class="col-md-6">
                                <input id="destination_name" type="" class="form-control" name="destination_name" required>

                                @if ($errors->has('destination_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('destination_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('arrive_time') ? ' has-error' : '' }}">
                            <label for="arrive_time" class="col-md-4 control-label">Enter Arrive Time</label>

                            <div class="col-md-6">
                                <input id="arrive_time" type="" class="form-control" name="arrive_time" placeholder="yyyy/mm/dd" required>

                                @if ($errors->has('arrive_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('arrive_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('group_num') ? ' has-error' : '' }}">
                            <label for="group_num" class="col-md-4 control-label">Enter Number of people</label>

                            <div class="col-md-6">
                                <input id="group_num" type="" class="form-control" name="group_num" required>

                                @if ($errors->has('group_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Enter Description of trip</label>

                            <div class="col-md-6">
                                <textarea id="description" rows="7" type="" class="form-control" name="description" required></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                    
                          <div class="form-group{{ $errors->has('plan_image') ? ' has-error' : '' }}">
                            <label for="plan_image" class="col-md-4 control-label">Plan Image</label>

                            <div class="col-md-6">
                                <input id="plan_image" type="file" class="form-control" name="plan_image" required>

                                @if ($errors->has('plan_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plan_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ADD Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection