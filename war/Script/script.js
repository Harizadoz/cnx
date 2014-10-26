	$(function(){
		$.ajax({
			url:'Login.php',
			success: function(data){
				$("#login").html(data);
				tooltip();
			}
		});
	});
function tooltip(){
    $(".tool").tooltip();
}

function logIn(){
	$.ajax({
		url:'test.php',
		dataType:"json",
		data:{user:$("input[name=user]").val(),pass:$("input[name=pass]").val()},
		type:'POST',
		success: function(data){
			
$("input[name=user]").val(data.user);
$("input[name=user]").css('color','#FFFFFF');
$("input[name=user]").css('border','none');
$("input[name=user]").css('background','none');

$("input[name=pass]").val(data.pass);
$("input[name=pass]").css('color','#FFFFFF');
$("input[name=pass]").css('border','none');
$("input[name=pass]").css('background','none');

		}
	});
}