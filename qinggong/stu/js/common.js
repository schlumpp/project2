/*
这个页面的js是整个网站都公用的js 
author  陈烘
time  2013.4.12
update 2013.5.20
 */
var common_fn = function firstnav()
{
	$('#firstnav li').hover(function(){
		$(this).children('ul').css({ opacity: .4 }).stop(true,true).slideDown('slow');
	},function(){
		$(this).children('ul').stop(true,true).slideUp('slow');
	});
}


//下面这些函数是用来登录的，页面使用的时候，只需调用 popSign(isLogin)即可，若是登录isLogin=1 ,若是修改密码 isLogin=0
/**************author by DuanRui   2013-5-2**************/
/**************author by DuanRui   2013-5-2**************/
function G(id){
    return document.getElementById(id);
};
function GC(t){
   return document.createElement(t);//创建元素
};
String.prototype.trim = function(){
          return this.replace(/(^\s*)|(\s*$)/g, '');
};
function isIE(){
      return (document.all && window.ActiveXObject && !window.opera) ? true : false;//ie给兼容性
} 
var loginDivWidth = 300;
//点击登录按钮弹出的登录对话框
var sign_in_flow = '<div style="background:url(./img/nav_bg.png) repeat-x;list-style-type:none; height:34px; color:#fff; padding-top:7px; font-size:20px; font-weight:bold;">登录</div>'
		//+ '<ul style="list-style-type:none;">'
        + '<p>用&nbsp;户&nbsp;名：<input type="text" id="sign_name" maxlength="64"/></p>'
        + '<p>密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" id="sign_pwd"/></p>'
		//+ '</ul>'
        + '<p><input type="button" value="登录" onclick="signFlow(1);" id="sign_button"/>&nbsp;&nbsp;&nbsp;'
        + '&nbsp;&nbsp;&nbsp;<input type="button" value="取消" onclick="cancelSign();"/></p>';
function loadSignInFlow(){//每次加载错误提示
   G("sign_div").innerHTML = sign_in_flow;
    G("sign_name").focus();
};
//点击取消按钮
function cancelSign(){
    G("sign_div").style.display = 'none';
    G("cover_div").style.display = 'none';
   document.body.style.overflow = '';
};

function popCoverDiv(){
   if (G("cover_div")) {
    G("cover_div").style.display = '';
   } else {
    var coverDiv = GC('div');
    document.body.appendChild(coverDiv);
    coverDiv.id = 'cover_div';
    with(coverDiv.style) {
     position = 'absolute';
     background = '#f3f1f1';
     left = '0px';
     top = '0px';
     var bodySize = getBodySize();
     width = bodySize[0] + 'px'
     height = bodySize[1] + 'px';
     zIndex = 98;
     if (isIE()) {
      filter = "Alpha(Opacity=60)";
     } else {
      opacity = 0.6;
     }
    }
   }
}
function getBodySize(){
   var bodySize = [];
   with(document.documentElement) {
    bodySize[0] = (scrollWidth>clientWidth)?scrollWidth:clientWidth;
    bodySize[1] = (scrollHeight>clientHeight)?scrollHeight:clientHeight;
   }
   return bodySize;
} 
function popSign(isLogin){
   if (G("sign_div")) {
    G("sign_div").style.display = '';
   } else {
    var signDiv = GC('div');
    document.body.appendChild(signDiv);
    signDiv.id = 'sign_div';
    signDiv.align = "center";
    signDiv.onkeypress = function(evt){
          var e = window.event?window.event:evt;
          if (e.keyCode==13 || e.which==13) {
           if (G("sign_button")) {
            G("sign_div").focus();
            G("sign_button").click();
           }
          }
         };
    with (signDiv.style) {
     position = 'absolute';
     left = (document.documentElement.clientWidth - loginDivWidth)/2 + 'px';
     top = (document.documentElement.clientHeight - 300)/2 + 'px';
     width = loginDivWidth + 'px';
     zIndex = 99;
     background = '#FFFFFF';
     border = '#66CCFF solid 1px';
    }
   }
   if(isLogin) {
    G("sign_div").innerHTML = sign_in_flow;
   } else {
    G("sign_div").innerHTML = change_pwd_flow;
   }
  
}
//核对两次输入密码是否一致
function checkRePwd(){
   if(G("sign_pwd").value.trim() != G("sign_repwd").value.trim()){
    return '<div style="color:#FF0000";">和上次输入的密码不匹配！</div>';
   }
   return '';
}
//登录处理，检查用户名和密码
function signFlow(isSignIn){
    var error = checkName();
    var htmlText = null;
    if (isSignIn == 1)
	 {
		 if (error == ''){
		  error = checkPwd();
			if (error == '')
			{
			error = Connect();
			//alert(error);	
			}
			else
			 {
			 dealError(error);
			 }
		} 
	else
	 {
	 dealError(error);
	 }
	
	}

			
  
};
//重新绘制窗口，显示错误提示
function dealError(error){
	 htmlText = sign_in_flow;

    G("sign_div").innerHTML = error + htmlText;
   // G("sign_email").value = eMailValue; 

	}

function popSignFlow(isLogin) {
   popCoverDiv();  
   popSign(isLogin);  
   document.body.style.overflow = "hidden";
     
      if(isLogin) {
       G("sign_name").focus();
      } else {
       G("old_pwd").focus();
      }
}
//检查用户名是否为空
function checkName(){
   if((G("sign_name").value.trim()=='')){
    return '<div style="color:#FF0000";" >用户名不能为空！</div>';
   }
   return '';
}
//检查密码是否为空
function checkPwd(){
   if(G("sign_pwd").value.trim() == ''){
    return '<div style="color:#FF0000";">密码不能为空.</div>';
   }
   return '';
}
//连接数据库，检查密码和用户名
function Connect(){
	var name = G("sign_name").value.trim();
	var pwd  =  G("sign_pwd").value.trim();
   // window.error ='';
	htmlText = sign_in_flow;
//(function($){


	 $.get('php/load.php', {'name':name,'pwd':pwd}, function(data) {
		//alert(data);
		if(parseInt(data)==1){
			
				       error= '<div style="color:#FF0000";">用户名不存在.</div>';
					   dealError(error);
					   return;
					 
		}
		else if(parseInt(data)==2){
					 	error= '<div style="color:#FF0000";">密码错误.</div>';
						dealError(error);
						return;
		}
		else{

						window.location.href = 'main.php';
				}


	});	
	
	//return window.error;	
//})(jQuery);

	}

function changePwd(){
    var error = checkOldPwd();
    if (error == ''){
     error = checkPwd();
	 if (error == ''){
   		 error = checkRePwd();
		 
	   if (error == '') {
    	 error  = pwdConnect();
    } 
   }
	 
    }
   


    dealpwdError(error);
  
};

function dealpwdError(error){
	 htmlText = sign_in_flow;

    G("sign_div").innerHTML = error + change_pwd_flow;

	}


function pwdConnect(){
	var oldpwd  =  G("old_pwd").value.trim();
	var newpwd  =  G("sign_pwd").value.trim();


	 $.get('php/pwdcheck.php', {'old_pwd':oldpwd,'new_pwd':newpwd}, function(data) {
		//alert(data);
		if(parseInt(data)==1){
			
				       error= '<div style="color:#FF0000";">旧密码输入错误.</div>';
					   dealpwdError(error);
					   return;
					 
		}
		 if(parseInt(data)==2){
					 	error= '<div style="color:#0F6";">修改成功.</div>';
						dealpwdError(error);
						return;
		}
		if(parseInt(data)==3){
					 	error= '<div style="color:#FF0000";">修改失败.</div>';
						dealError(error);
						return;
		}
		 if(parseInt(data)==4){
					 	error= '<div style="color:#FF0000";">请先登录再修改.</div>';
						dealpwdError(error);
						return;
		}

	});	
	

	}


	
	
//核对旧密码是否输入
function checkOldPwd(){
   if(G("old_pwd").value.trim() == ''){
    return '<div style="color:#FF0000";">请输入旧密码！</div>';
   }
   return '';
}
//修改密码
var change_pwd_flow = '<div style="background:url(./img/nav_bg.png) repeat-x;list-style-type:none; height:34px; color:#fff; padding-top:7px; font-size:20px; font-weight:bold;">修改密码</div>'
       + '<p>旧&nbsp;密&nbsp;码：<input type="password" id="old_pwd"/></p>'
       + '<p>新&nbsp;密&nbsp;码：<input type="password" id="sign_pwd"/></p>'
       + '<p>再次输入：<input type="password" id="sign_repwd"/></p>'
       + '</div><div><input type="button" value="确定" onclick="changePwd();" id="sign_button"/> '
       + '<input type="button" value="取消" onclick="cancelSign();"/></div>';
