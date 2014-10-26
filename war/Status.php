<?php session_start();
include("user.php");
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จังหวัดเชียงใหม่</title>
<link href="Script/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="Script/jeasyui/themes/default/easyui.css" rel="stylesheet">
<link href="Script/CSS/main.css" rel="stylesheet">
<link href="Script/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="Script/CSS/login.css" rel="stylesheet">
<script src="Script/jeasyui/jquery.min.js" type="text/javascript"></script>
<script src="Script/jeasyui/jquery.easyui.min.js" type="text/javascript"></script>
<script src="Script/Login.js" type="text/javascript"></script>

</head>

<body style="margin:auto; width:960px;">
<div class="easyui-layout" data-options="fit:true">
<div data-options="region:'north',split:false,border:false,collapsible:false" style="height:300px;">
<img src="Image/main/header.jpg" >
</div>
<div data-options="region:'center',border:false,collapsible:false" style="height:100%;">
<div class="easyui-layout" data-options="fit:true">
<div data-options="region:'north',border:false,collapsible:false" style="height:100%;" >
<nav class="navbar navbar-default navbar-inverse">
<div>
<ul class="nav navbar-nav">
<li class="active"><a href="index.php"> หน้าแรก </a></li>
<li><a href="#"> สถานที่ท่องเทียว </a></li>
<li><a href="#"> สถานที่หน้าสนใจ </a></li>
<li><a href="profile.php"> คณะผู้จัดทำ </a></li>
 <li style="margin:10px 130px; float:right;"><form action="index.php">
<label style="color:#FFFFFF;"> Username :: </label>
<input disabled type="text" style="border:none; width:50px; background:none; color:#FFFFFF;" name="user" value="<?php echo $_SESSION['user'];?>">
<label style="color:#FFFFFF;"> สถานะ ::</label>
<input disabled type="text" style="border:none;width:50px;color:#FFFFFF; background:none" name="status" value="<?php echo $_SESSION['status'];?>">
<input type="submit" value="Logout">
</form></li>
</ul>
</div>
</nav>

</div>
<div data-options="region:'center',split:false,border:false,collapsible:false" style="height:100%;" >

<div id="container"><img id="main_container" src="Image/main/640px-3_kings_monument.JPG"></div>
<h3><p class="p">
ม่อมแจ่ม  ตั้งอยู่บนสันเขาบริเวณหมู่บ้านม้งหนองหอย อำเภอแม่ริม อยู่ห่างจากตัวเมืองเชียงใหม่ประมาณ 40 นาที  เดิมที่บริเวณนี้ชาวบ้านเรียกว่ากิ่วเสือเป็นป่ารกร้าง ต่อมาชาวบ้านเข้ามาแผ้วถางและปลูกผิ่น จนในท้ายที่สุดโครงการหลวงมาขอซื้อพื้นที่เข้าโครงการหลวงหนองหอย   เมื่อเข้าเป็นส่วนหนึ่งของโครงการหลวง คุณแจ่ม-แจ่มจรัส สุชีวะ หลานตาของ ม.จ. ภีศเดช รัชนี ประธานมูลนิธิโครงการหลวง ได้เข้ามาพัฒนาและปรับปรุงบริเวณม่อนแจ่มให้กลายเป็นสถานที่ท่องเที่ยวโดยเฉพาะในลักษณะของม่อนแจ่มแค้มปิ้งรีสอร์ท ซึ่งม่อนแจ่มเพิ่งจะเปิดตัวอย่างเป็นทางการ เมื่อเดือน พ.ย. 2552
</p>
<p class="p">
ม่อนแจ่มมีอากาศเย็นสบายตลอดปี มีหมอกยามเช้า ช่วงที่เหมาะสำหรับท่องเที่ยวคือ เดือนตุลาคม -กุมภาพันธ์  มีจุดชมวิวสามารถมองเห็นวิวทิวทัศน์ทิวภูเขาสลับกันไกลสุดลูกหูลูกตา อีกด้านเป็นแปลงปลูกพืชและไม้เมืองหนาวของโครงการหลวง 
ยอดเขาทางทิศตะวันออกมีจุดชมวิวม่อนล่อง เหมาะสำหรับชมทิวทัศน์ของพื้นที่โครงการหลวง เป็นจุดชมทะเลหมอกบนหน้าผา มองเห็นทิวทัศน์ได้กว้างไกล ชมพรรณไม้และดอกไม้ป่า เส้นทางขึ้นไม่ได้ลาดยางหรือเทปูน เป็นทางดินลูกรัง ควรใช้รถขับเคลื่อนสี่ล้อ
ทางด้านทิศใต้เป็นไหล่เขามองลงไปจะเห็นหมู่บ้านม้งหนองหอยและพื้นที่ศูนย์พัฒนาโครงการหลวงหนองหอยโดยรอบ ซึ่งเป็นแปลงปลูกผักและวิจัยพืชผักเมืองหนาว เช่น อาติโช๊ค แปลงสมุนไพรเลมอนทาร์ม มิ้น คาร์โมมายด์ โรสแมรี่ ไม้ผล เช่น พลัม องุ่นไร้เมล็ด สตรอเบอรี่พันธุ์ 80 แปลงผักไฮโดรโพนิค การปลูกพืชโดยไม่ใช้ดิน เช่น โอ้คลีฟแดง และผักตระกูลสลัด มะเขือเทศดอยคำ ฯลฯ  

 </p></h3>
</div>


</div>

</div>

</div>
</body>
</html>