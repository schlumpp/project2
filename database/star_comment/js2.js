$(function(){
	get_rate(<?php echo $aver;?>);
});
function get_rate(rate){
	rate=rate.toString();
	var s;
	var g;
	$("#g").show();
	if (rate.length>=3){
		s=10;	
		g=0;
		$("#g").hide();
	}else if(rate=="0"){
		s=0;
		g=0;
	}else{
		s=rate.substr(0,1);
		g=rate.substr(1,1);
	}
	$("#s").text(s);
	$("#g").text("."+ g);
	$(".big_rate_up").animate({width:(parseInt(s)+parseInt(g)/10) * 14,height:26},1000);
	$(".big_rate span").each(function(){
		$(this).mouseover(function(){
			$(".big_rate_up").width($(this).attr("rate") * 14 );
			$("#s").text($(this).attr("rate"));
			$("#g").text("");
		}).click(function(){
			var score = $(this).attr("rate");
			$("#my_rate").html("您的评分：<span>"+score+"</span>");
			$.ajax({
		       type: "POST",
		       url: "action.php",
		       data:"score="+score,
		       success: function(msg){
				   //alert(msg);
				   if(msg==1){
					   $("#my_rate").html("<span>您已经评过分了！</span>");
				   }else if(msg==2){
					   $("#my_rate").html("<span>您评过分了！</span>");
				   }else{
					   get_rate(msg);
				   }
		       }
	        });
		})
	})
	$(".big_rate").mouseout(function(){
		$("#s").text(s);
		$("#g").text("."+ g);
		$(".big_rate_up").width((parseInt(s)+parseInt(g)/10) * 14);
	})
}
