@extends('layouts.headerapp')

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
                                        <img src="images/brand/cross-plus.png" width="14px";height="14px"; />my plan
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


@yield('content')
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
@endsection


