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
                                <div id="dest_tim_get">
                                <div class="col-xs-6 col-sm-2 col-md-3">
                                <div class="flr-place">
                                    <div class="ui-widget ui-input _j_go_mdd_list">
                                            <input type="text" id="_j_together_mdd_search" class="tags _j_mdd_input" placeholder="Destination">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-3"> 
                                    <div class="flr-date _j_time_tpl">
                                        <div class="ui-input" >
                                           <input type="text" id="datepicker" class="_j_time_input"  placeholder="mm/dd/yyyy">
                                            <i class="icon-date _j_date"></i>
                                            <input type="text" value="" readonly="readonly" id="together_datepicker" style="width: 30px; height: 30px; border: none; padding: 0; margin: 0;position: absolute;left: 225px;top: 0;opacity: 0">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-6 col-sm-2 col-md-3"> 
                                    <div class="btn-group" data-toggle="buttons">
                                        <!-- <label class="btn btn-primary active">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Popular Plan 
                                        </label> -->
                                        <button type="button" class="btn btn-secondary btn-sm" id="getRequest">Latest Plan</button>
                                    </div>
                                </div>
                                <div class=" col-xs-2 col-sm-2 col-md-3">
                                    <button style="margin-right:3%; margin-left:1%" class="btn btn-secondary btn-sm" id="plansearch">
                                        Search
                                    </button>
                                    <button class="btn btn-default " id="addplan" onclick="location.href='/signin';">
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
        </div>    
    </div>
 

@yield('content')
    <div class="section" id="main_content">
        <div class="container">
            <div id="getRequestData">

            </div>
             <!-- show user plan -->
             <div class="post_plan_main" id="post_plans">
                @include('layouts.partials.plans')
             </div>
            <!-- show recommended plan -->
            <h3> Destinations you will love</h3>
            @foreach($recom_info as $location_plan)
                        <div class="col-xs-12 col-sm-4 post_clo" >
                                <img src="{{$location_plan->url}}" alt="{{$location_plan->location_name}}" >
                                <div class="_1iddsry">{{$location_plan->location_name}}</div>                               
                        </div>
            @endforeach
              
                
           </div>
        </div>
    </div>
@endsection


