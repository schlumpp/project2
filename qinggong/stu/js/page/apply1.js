// JavaScript Document

//2013-5-8 修改 by 段瑞
$(document).ready(function() {//伸缩效果
$('.mess h3 span').addClass('addicon1');	
$('.mess_detial').hide();	
$('.mess_detial').eq(0).slideDown('show');
$('.mess h3 span').eq(0).removeClass().addClass('addicon2');
$('.mess h3').click(function(){
	$('.mess h3 span').removeClass().addClass('addicon1');	
	if($(this).siblings().is(':hidden'))
	{
	$(".mess_detial").slideUp('show');
	$(this).siblings().slideDown('show');	
	}	
	else
	{
	}		
	$(this).find('span').removeClass().addClass('addicon2'); 

	})//点击添加或移除selected样式
	;			  			  
});




		
$(document).ready(function() {//表格明暗条纹效果

		$('.tab_detial ul').hide();
		$('.message .tab_top').find("li:first").removeClass('tabclass').addClass('tabclass'); 
		$('.tab_detial ul').eq(0).slideDown();
	
		$('.message .tab_top li').hover(function(){
		  $('.message .tab_top li').removeClass('tabclass'); 
		  $(this).addClass('tabclass');
			var activeindex = $('.message .tab_top li').index(this);
			$('.tab_detial ul').eq(activeindex).slideDown().siblings().slideUp();
			return false;
		});	
});

// JavaScript Document


$(document).ready(function(){
		var strTip="";
		$('input[type="text"]').focus(function(){
			strTip=$(this).val();
			$(this).val("");			
											   })
		.blur(function(){
			if($(this).val()=="")
				$(this).val(strTip);
					   });
		
		
		$('.form1').submit(function(event) {
		event.preventDefault();
		var formValues = $(this).serialize();
	/*	alert(formValues);*/
		$.get('php/apply/applysubmit.php', formValues, function(data) {
	//alert(data);
			switch(parseInt(data)){
				case 1:
					hiOverAlert('提交成功',1500);
					break;		
				case 2:
					hiOverAlert('提交失败',1500);
					break;				
					
				}
		 
		});
	  });
	  
	  	$('.form2').submit(function(event) {
		event.preventDefault();
		var formValues = $(this).serialize();
	/*	alert(formValues);*/
		$.get('php/apply/applysubmit.php', formValues, function(data) {
		//alert(data);
			switch(parseInt(data)){
				case 3:
					hiOverAlert('提交成功',1500);
					break;	
				case 4:
					hiOverAlert('提交失败',1500);
					break;			

				}

		});
	  });
	  
  	$('.form3').submit(function(event) {
		event.preventDefault();
		var formValues = $(this).serialize();
	/*	alert(formValues);*/
		$.get('php/apply/applysubmit.php', formValues, function(data) {
			//alert(data);
			switch(parseInt(data)){
				case 5:
					hiOverAlert('提交成功',1500);
					break;	
				case 6:
					hiOverAlert('提交失败',1500);
					break;							
									
				}

		});
	  });	  
	  
	  
	  
	  
  
});

