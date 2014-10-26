
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery marquee trick vertical</title>
<style type="text/css">
body{
	font-family:tahoma, "Microsoft Sans Serif", sans-serif, Verdana;
	font-size:12px;	
}
/* css กำหนดพื้นที่ของ div ข้อความเลื่อน   */
.containMarquee{
 	position:relative;
	top:100px;
	width:450px;
	margin:left;
	display:block;
	height:250px;
	border:1px dashed #CCC;
	line-height:20px;
	background-color:#F5F5F5;	
	overflow:hidden;
}
/* css กำหนดข้อความ สำหรับการทำ marquee  */
.obj_marquee{
	position:absolute;
	display:block;
	white-space:nowrap;
}
</style>
</head>

<body>



<div class="containMarquee">
<span class="obj_marquee">
<div align="center" style="margin:0px 10px; float:left;"><h3> ข่าวประชาสัมพันธ์ </h3>วันลอยกระทง 6 พฤศจิกายน 2557  I  จุดโคมลาน ปล่อยโคมลอย ณ บ้านหมี่<br />

 ยี่เป็งอินเตอร์ 8 พ.ย. Yee Peng Lanna International   I   International Loy Krathong
<br />

ประเพณียี่เป็ง 2557 ยี่เป็งสันทรายถวายพุทธบูชา<br />
รวมภาพงานลอยโคมยี่เป็งเชียงใหม่<br />
พิธีทอดกฐิน ณ ธุดงคสถานล้านนา วันเสาร์ที่ 25 ตุลาคม พ.ศ. 2557<br />
 
สอบถามข้อมูลเพิ่มเติม ธุดงคสถานล้านนา โทรศัพท์ 053-353174</div></span>
</div>

<br />
<script src="../JS&CSS/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
var move_marquee;
var marquee_status;
var marquee_move;
var marquee_speed;
var marquee_step;
var marquee_direction;
var newTop;
var obj;
$(function(){
	
	var divCover_h=$(".containMarquee").height(); // หาความสูงพื้นที่ส่วนแสดง marquee
	var divMarquee_h=$(".obj_marquee").height(); //หาความสูงของเนื้อหา marquee
	obj=$(".obj_marquee"); // กำหนดเป็น ตัวแปร jQuery object
	marquee_direction=1; /* กำหนดการเลื่อนซ้ายขวา 1 = ล่างขึ้นบน 2 = บนลงล่าง */
	marquee_speed=30; // กำหนดความเร็วของเวลาในการเคลื่อนที่ ค่ายิ่งมาก จะช้า
	marquee_step=2; // กำหนดระยะการเคลื่อนที่ ค่ายิ่งมาก จะเร็ว
	
	obj.css("top",(marquee_direction==1)?divCover_h:-divMarquee_h);
	marquee_move=function(obj){
		marquee_status=setTimeout(function(){
			move_marquee(obj)
		},marquee_speed);		
	}
	move_marquee=function(obj){
		var condition_mq=(marquee_direction==2)?'newTop<divCover_h':'newTop>-divMarquee_h';
		var initLeft=(marquee_direction==1)?divCover_h:-divMarquee_h;
		newTop=(marquee_direction==1)
		?parseInt(obj.css('top'))-marquee_step
		:parseInt(obj.css('top'))+marquee_step;
		if(eval(condition_mq)){
			obj.css({
				'top':newTop+'px'
			});
		}else{
			obj.css("top",initLeft);
		}				
		marquee_move(obj);
	}	
	marquee_move(obj);


	$(".containMarquee").mouseover(function(){
		clearTimeout(marquee_status);
	}).mouseout(function(){
		marquee_move(obj);
	});

	
});
</script>




</body>
</html>
