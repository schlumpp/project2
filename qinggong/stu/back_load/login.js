// JavaScript Document
$(document).ready(function(){
	
	//判断用户名
	$('#admin_name').focus(function(){
		if($(this).val()=="")
			$('#usernameResult').html("请输入用户名");		
	})
	.blur(function(){	
		$('#usernameResult').empty();//清空其内容	
		var admin_name={"admin_name":$(this).val()};//获取用户名
		$.post('userChecked.php',admin_name,function(data){
			
			$('#usernameResult').html(data);
		});
	});
	
	//判断密码
	$('#admin_pwd').focus(function(){
		if($(this).val()=="")
			$('#passwordResult').html("请输入密码");		
	})
	.blur(function(){	
		$('#passwordResult').empty();//清空其内容	
		var pwd={"admin_pwd":$(this).val()};//获取密码
		$.post('pwdCheck.php',pwd,function(data){
			$('#passwordResult').html(data);						   
			//data=parseInt(data);
			/*switch(data)
			{
				case 1:$('#passwordResult').html('<div style="color:#8ff8ea;">密码错误</div>');
				case 2:$('#passwordResult').html('<div style="color:#8ff8ea;">密码正确</div>');
			}*/
		});
	});
	
	
	

	//判断表单
	$('form').submit(function(event){
		event.preventDefault();
		var formValues=$(this).serialize();
		$.post('loginCheck.php',formValues,function(data){
			$('#formResult').html(data);		
		})
	});				   
});