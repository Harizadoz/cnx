$(function(){
	loginFrom();
});
function loginFrom(){
	$.ajax({
		url:"login.html",
		success: function(data){
			$("#login").html(data);
		}
	});
}

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