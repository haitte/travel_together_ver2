
    @foreach(array_chunk($post_plan_info->all(), 3) as $row)
        <div class="row post_row">
            @foreach($row as $location_plan)
                <div class="col-xs-12 col-sm-4 post_clo" >
                    <img src="{{$location_plan->url}}" alt="{{$location_plan->name}}" >
                    <div class="_1iddsry">{{$location_plan->location_name}}</div>
                    <div class="_2iddsry">{{$location_plan->name}}</div>                                
                    <p class="_3iddsry">{{$location_plan->des}}</p>  
                </div>
            @endforeach
        </div>    
    @endforeach
    {{$post_plan_info->links()}}
    <div class="clearfix visible-xs"></div>
