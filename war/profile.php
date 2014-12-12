<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จังหวัดเชียงใหม่</title>
<link href="Script/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="Script/jeasyui/themes/default/easyui.css" rel="stylesheet">
<link href="Script/CSS/profile.css" rel="stylesheet">
<script src="Script/jeasyui/jquery.min.js" type="text/javascript"></script>
<script src="Script/jeasyui/jquery.easyui.min.js" type="text/javascript"></script>
<script src="Script/jquery-ui-1.11.2.custom/jquery-ui.min.js"></script>
<script src="Script/profile.js"></script>
</head>

<body >
<div id="container" >
<div class="easyui-layout"
data-options="fit:true"
style=" height:1080px; background-color:#007a48;">
<div data-options="region:'north',border:false"
style="height:200px; width:100%;">
<div style="height:200px; width:960px;">
<img src="Image/main/header.jpg" class="header">
</div>
</div>
<div data-options="region:'center',split:false,border:false,collapsible:false,fit:true" style="width:960px;">
<nav class="navbar navbar-default navbar-inverse">
<div>
<ul class="nav navbar-nav">
<li><a href="index.php"> หน้าแรก </a></li>
<li><a href="travel.html"> สถานที่ท่องเทียว </a></li>
<li  class="active"><a href="profile.php"> คณะผู้จัดทำ </a></li>
</ul>
</div>
</nav>

<div id="nick">
<img src="Image/profile/nick.jpg" id="bg" class="ui-state-default ui-corner-all"></div>

<div id="tum"> <a href="#" onClick="backbtn()" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-chevron-left"></i> Back </a>
<div style="paddding:8px 0px;">
<img src="Image/profile/tum.jpg" id="bg1" class="ui-state-default ui-corner-all"></div>

 </div>
<input type="text" name="hiddenbox" style="display:none;" >
 
<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">
<div id="information" style="margin:0px 250px;">
</div> 
 </div>
</div>


</div>

</div>
</div>
</div>

</body>
</html>