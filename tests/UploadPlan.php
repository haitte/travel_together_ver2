<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
  <link rel="stylesheet" type="text/css" href="UploadPlan.cs">
  
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}
.tab1{width:600px;height:500;border-top:#cccccc solid 1px;border-bottom:#cccccc solid 1px;margin-left:50px;margin-right:50px;margin-top:50px;}
.menu{height:28px;border-right:#cccccc solid 1px;width:600px;}
.menu li{float:left;width:299px;text-align:center;line-height:28px;height:28px;cursor:pointer;border-left:#cccccc solid 1px;color:#666;font-size:14px;overflow:hidden;background:#E0E2EB;}
.menu li.off{background:#FFFFFF;color:#336699;font-weight:bold;}
.menudiv{height:200px;border-left:#cccccc solid 1px;border-right:#cccccc solid 1px;border-top:0;background:#fefefe;}
.menudiv div{padding:15px;line-height:28px;padding-top:0px;}
</style>
  
 
<script type="text/javascript">
function setTab(name,cursel){
 cursel_0=cursel;
 for(var i=1; i<=links_len; i++){
  var menu = document.getElementById(name+i);
  var menudiv = document.getElementById("con_"+name+"_"+i);
  if(i==cursel){
   menu.className="off";
   menudiv.style.display="block";
  }
  else{
   menu.className="";
   menudiv.style.display="none";
  }
 }
}
function Next(){
 cursel_0++;
 if (cursel_0>links_len)cursel_0=1
 setTab(name_0,cursel_0);
}
var name_0='one';
var cursel_0=1;
var links_len,iIntervalId;
onload=function(){
 var links = document.getElementById("tab1").getElementsByTagName('li')
 links_len=links.length;
 for(var i=0; i<links_len; i++){
  links[i].onmouseover=function(){
   clearInterval(iIntervalId);
   this.onmouseout=function(){
    iIntervalId = setInterval(Next,ScrollTime);;
   }
  }
 }
 document.getElementById("con_"+name_0+"_"+links_len).parentNode.onmouseover=function(){
  clearInterval(iIntervalId);
  this.onmouseout=function(){
   iIntervalId = setInterval(Next,ScrollTime);;
  }
 }
 setTab(name_0,cursel_0);
 iIntervalId = setInterval(Next,ScrollTime);
}
</script>  
  
<title>Profile Test</title>
</head>
<body>
  <div id="container" class="container_s">
  <div id=header>
  </div>
  <div id=content_left class=cr_offset1>
    <?php
    echo "<table>";
    echo "<tr><td>User name</td></tr>
          <tr><td>Age</td></tr>
          <tr><td>Gender</td></tr>
          <tr><td>Country</td></tr>";
    echo "</table>";
    ?>    
    
    
  </div>
  <div id=content_right class=cr_offset2>
<div class="tab1" id="tab1">
 <div class="menu">
  <ul>
   <li id="one1" onclick="setTab('one',1)">User's Attended Event</li>
   <li id="one2" onclick="setTab('one',2)">User's Published Plan</li>

  </ul>
 </div>
 <div class="menudiv">
  <div id="con_one_1">
    
    
    <table>
      <tr><th>Plan Name</th><th>Departure</th><th>Destination</th><th>Departure Time</th><th>Release Time</th></tr>
    </table>
  </div>
      
      
  <div id="con_one_2" style="display:none;">
    
    <table>
      <tr><th>Plan Name</th><th>Departure</th><th>Destination</th><th>Departure Time</th><th>Release Time</th></tr>
    </table>    
  
  </div>

 </div>
</div>
<div style="text-align:center;clear:both;"></div>
  </div>
  </div>
</body> 
</html> 
