$(function(){ 

//Ŀǰ����״�� 
var spoint = parseInt($("#showpf").text()); 
var avarankstr = ''; 
if(spoint <= 4){ 
avarankstr="(�����е�ս����)"; 
}else if(spoint <= 7){ 
avarankstr="(�պ��Ź����Ӱ�,��������)"; 
}else if(spoint <= 9){ 
avarankstr="(�ܺ�,ǿ���Ƽ�)"; 
}else{ 
avarankstr="(�ǳ�����,��������)"; 
} 
//��ʾ�������ֵó����������� 
$("#rate_span").html(avarankstr); 

//ѭ����Ŀǰ���Ǽ� 
$("#pfnum img").each(function(i){ 
if(i <= spoint-1){ 
$(this).attr("src","http://inncache.soso.com/xsoso/images/newxw/full_star.gif"); 
} 
//����һ����������,�����꾭�����뿪����,����뿪��ԭ��ԭ�������Ǽ� 
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

//����������� 
$("#pfnum img").click(function(){ 
var indexpf = $(this).index()+1; 
var gid = $(this).attr("title"); 

//����ط����ע����,��Ϊ��֮ǰ��Ҫ������������getJSON�����û����Ļ���ֱ�� .get �Ϳ����ˡ� 
$.getJSON('http://m.bbb.com/countdown.php?action=pingfen&pdid=1&field_id='+gid+'&pf='+indexpf+'&callback=?',function(data){ 
if(data.pf=='a'){ 
alert("�����Ϸ���Ѿ����ֹ���"); 
}else if(data.pf=='b'){ 
alert("�������ֻ��������һ��"); 
}else if(data.pf=='c'){ 
alert("���緢��δ֪����,���Ժ�����"); 
}else{ 
$("#showpf").text(data.pf);
spoint = data.pf;  
$.fn.drawpoint(data.pf); 
alert("���ɹ���������һ����Ϸ"); 
alert(data.pf); 
} 
}); 
}); 

//�Ǽ������� 
$.fn.drawpoint=function(point){ 
if(point <= 4){ 
avarankstr="(�����е�ս����)"; 
}else if(point <= 7){ 
avarankstr="(�պ��Ź����Ӱ�,��������)"; 
}else if(point <= 9){ 
avarankstr="(�ܺ�,ǿ���Ƽ�)"; 
}else{ 
avarankstr="(�ǳ�����,��������)"; 
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
