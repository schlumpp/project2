$(function(){ 

//目前评分状况 
var spoint = parseInt($("#showpf").text()); 
var avarankstr = ''; 
if(spoint <= 4){ 
avarankstr="(垃圾中的战斗机)"; 
}else if(spoint <= 7){ 
avarankstr="(凑合着过日子吧,可以试试)"; 
}else if(spoint <= 9){ 
avarankstr="(很好,强烈推荐)"; 
}else{ 
avarankstr="(非常完美,绝世佳作)"; 
} 
//显示根据评分得出的中文描述 
$("#rate_span").html(avarankstr); 

//循环出目前的星级 
$("#pfnum img").each(function(i){ 
if(i <= spoint-1){ 
$(this).attr("src","http://inncache.soso.com/xsoso/images/newxw/full_star.gif"); 
} 
//缓存一个星星数据,添加鼠标经过和离开动作,鼠标离开则还原到原有评分星级 
$(this).data("point",(i+1)); 
$(this).hover(function(){ 
var point=$(this).data("point"); 
$.fn.drawpoint(point); 
$("#bigrate_span").html(point); 
},function(){ 
$.fn.drawpoint(spoint); 
$("#bigrate_span").html(spoint); 
$("#rate_span").html(avarankstr); 
}); 
}); 

//点击进行评分 
$("#pfnum img").click(function(){ 
var indexpf = $(this).index()+1; 
var gid = $(this).attr("title"); 

//这个地方大家注意下,因为我之前是要跨域，所以用了getJSON，如果没跨域的话就直接 .get 就可以了。 
$.getJSON('http://m.bbb.com/countdown.php?action=pingfen&pdid=1&field_id='+gid+'&pf='+indexpf+'&callback=?',function(data){ 
if(data.pf=='a'){ 
alert("这个游戏你已经评分过了"); 
}else if(data.pf=='b'){ 
alert("五分钟内只允许评分一次"); 
}else if(data.pf=='c'){ 
alert("网络发生未知错误,请稍后再试"); 
}else{ 
$("#showpf").text(data.pf);
spoint = data.pf;  
$.fn.drawpoint(data.pf); 
alert("您成功的评分了一个游戏"); 
alert(data.pf); 
} 
}); 
}); 

//星级处理方法 
$.fn.drawpoint=function(point){ 
if(point <= 4){ 
avarankstr="(垃圾中的战斗机)"; 
}else if(point <= 7){ 
avarankstr="(凑合着过日子吧,可以试试)"; 
}else if(point <= 9){ 
avarankstr="(很好,强烈推荐)"; 
}else{ 
avarankstr="(非常完美,绝世佳作)"; 
} 
$("#rate_span").html(avarankstr); 

$("#pfnum img").each(function(i){ 
if(i <= point-1){ 
$(this).attr("src","http://inncache.soso.com/xsoso/images/newxw/full_star.gif"); 
}else{ 
$(this).attr("src","http://inncache.soso.com/xsoso/images/newxw/empty_star.gif"); 
} 
}); 
} 
}); 
