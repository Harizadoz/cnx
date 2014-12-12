$(function(){
	
		$.ajax({
		url:'json.php',
		dataType:"json",
		success: function(data){
		var html=" "
			$.each(data,function(k,v){
				html+="<img src='Image/travel/"+v.img+"' width='320' height='250'>";
				html+="<div  style='color:red; font-size:20px;'>"+v.name+"</div>";
				html +="<div align='left'>";
				html +=v.detail;
				html+="</div>";
				html +="<br><br>";
			});
			$("#test").html(html);
			
		}
	});
});// JavaScript Document