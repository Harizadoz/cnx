 $(function() {
    // run the currently selected effect
    function runEffect(tum) {
      // get effect type from
      var selectedEffect = "drop";
	  $("input[name=hiddenbox]").val(tum);
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 100 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 280, height: 185 } };
      }
 
      // run the effect
      $( "#effect" ).show( selectedEffect, options, 500, callback );
    };
 
    //callback function to bring a hidden box back
    function callback() {
      setTimeout(function() {
        $( "#bg1:visible" ).removeAttr( "style" ).fadeOut();
      }, 500 );
	   setTimeout(function() {
        $( "#bg:visible" ).removeAttr( "style" ).fadeOut();
      }, 500 );
	 var tum = $("input[name=hiddenbox]").val();
	  $.ajax({
		  url:"information.php?profile="+tum,
		  dataType:'json',
	 success: function(data){

		 var html = " ";
		 html+="<ul>";
		 html+="<li>";
		 html+="<img src='Image/profile/"+data.album+"' width='300' height='400px'>";
		 html+"</li>";
		 html+="<li> ชื่อ - นามสกุล  " ;
		 html+=data.name;
		 html+="</li>";
		 html+="<li> อายุ ";
		 html+=data.age;
		 html+="</li>";
		 html+="<li> วันเกิด ";
    	html+=data.birth;
		html+="</li>";
		html+="<li>";
		html+=data.hw;
		html+="</li>";
		html+="</ul>";
		$("#information").html(html);
	 }
	 });
	};
 
    // set effect from select menu value
    $( "#bg1" ).click(function() {
      runEffect("tum");
    });
 $( "#bg" ).click(function() {
      runEffect("nick");
    });
	
    $( "#effect" ).hide();
  
  });
  
  
  function backbtn(){
	  $("#bg1").show();
	  $("#bg").show();
	 $("#effect").hide();
  }