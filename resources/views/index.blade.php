@extends('layouts.headerapp')


<!-- 
 -->

@section('header')
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
                                    <!-- <div class="ui-widget">
                                    <label for="tags">Tags: </label> 
                                    <input id="tags">
                                    </div> -->
                                    <div class="ui-widget ui-input _j_go_mdd_list">
                                            <input type="text" id=" _j_together_mdd_search" class="tags _j_mdd_input" placeholder="Destination">
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
                                           <input type="text" id="datepicker" class="_j_time_input"  placeholder="mm/dd/yyyy">
                                            <i class="icon-date _j_date"></i>
                                            <input type="text" value="" readonly="readonly" id="together_datepicker" style="width: 30px; height: 30px; border: none; padding: 0; margin: 0;position: absolute;left: 225px;top: 0;opacity: 0">
                                        </div>
                                        <div class="drop drop-date hide _j_time_list">
                                            <ul>
                                                                        <li class="_j_time_select" data-timeflag="1" data-timeinfo="all time"><a><span class="num _j_show_num"><em>2207</em></span>all time</a></li>
                                                                        <li class="_j_time_select" data-timeflag="2" data-timeinfo="go today"><a><span class="num _j_show_num"><em>25</em></span>go today</a></li>
                                                                        <li class="_j_time_select" data-timeflag="3" data-timeinfo="1 month"><a><span class="num _j_show_num"><em>726</em></span>1 month</a></li>
                                                                        <li class="_j_time_select" data-timeflag="4" data-timeinfo="1-3 months"><a><span class="num _j_show_num"><em>898</em></span>1-3 months</a></li>
                                                                        <li class="_j_time_select" data-timeflag="5" data-timeinfo="3+ months"><a><span class="num _j_show_num"><em>625</em></span>3+ months</a></li>
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
                                        <img src="images/brand/cross-plus.png" width="14px";height="14px"; />my plan
                                    </button>   
                                    
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
 

@yield('content')
    <div class="section">
        <div class="container">
             <!-- show user plan -->
             <div class="post_plan_main">
                @foreach(array_chunk($post_plan_info->all(), 3) as $row)
                     <div class="row post_row">
                         @foreach($row as $location_plan)
                        <div class="col-xs-4 col-sm-4 post_clo" >
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
            </div>
            <!-- show recommended plan -->
            <h3> Destinations you will love</h3>
  
              
                
           </div>
        </div>
    </div>
@endsection


