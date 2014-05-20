
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭师大教务处</title>
<link rel = "stylesheet" type = "text/css" href = "styles/basic.css"/>
<link rel = "stylesheet" type = "text/css" href = "styles/style2.css"/>
<link rel = "stylesheet" type = "text/css" href = "styles/style3.css"/>
<script type="text/javascript" src = "js/js.js">
<script type="text/javascript" src = "js/table_js.js">

</script>
</head><body onload="MM_preloadImages('images/information_protect/password_md_blue.png','images/information_protect/personal_in_blue.png','images/common_search/search_classroom.png','images/common_search/multi_classroom.png','images/common_search/class_choose_blue.png','images/common_search/recommend_s.png','images/common_search/class_intro_blue.png')">
<div id = "header"><a href =  "index.php"><img src = "images/hznu.png" width="123"></img></a></div>
<div id = "content">
<div id = "pic1"><a href =  "activity.php" ><img  src = "images/activity.png"></img></a></div>
<div id = "pic2"><a href =  "article.php"><img  src = "images/article.png"></img></a></div>
<div id = "pic3"><a href =  "class_choose.php"><img  src = "images/class.png"></img></a></div>
<div id = "pic4"><a href =  "comment.php"><img  src = "images/comment.png"></img></a></div>
<div id = "pic5"><a href =  "information_protect.php"><img  src = "images/information_pro.png"></img></a></div>
<div id = "pic6"><a href =  "information_search.php"><img  src = "images/information_search.png"></img></a></div>
<div id = "pic7"><a href =  "more.php"><img  src = "images/moer.png"></img></a></div>
</div>
<div>
<div id = "classroom"><a href="class_search.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('cr','','images/common_search/search_classroom.png',1)"><img class = "common1" src="images/common_search/class_search.png" width="172" height="67" id="cr" /></a></div>
<div id = "classroom2"><a href="multi_classroom.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ca','','images/common_search/multi_classroom.png',1)"><img class = "common2" src="images/common_search/classroom_mul.png" width="277" height="67" id="ca" /></a></div>
<div id = "classroom3"><a href="choose_class.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('cc3','','images/common_search/class_choose_blue.png',1)"><img class = "common3" src="images/common_search/choose_class.png" width="212" height="67" id="cc3" /></a></div>
<div id = "classroom4"><a href="recomend_c.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('ccc','','images/common_search/recommend_s.png',1)"><img class = "common4" src="images/common_search/recomend_class.png" width="260" height="67" id="ccc" /></a></div>
<div id = "class5"><a href="class_intro.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('cccc','','images/common_search/class_intro_blue.png',1)"><img class = "common5" src="images/common_search/class_intro.png" width="166" height="67" id="cccc" /></a></div>
</div>
<form action = "checked_search.php" method = "post">
<div id = "search_time">
<img class = "time" src = "images/common_search/people.png"><input class = "time" name = "time" value = "" id = "s_time" type = "datetime-local" style = "height:38px;width:255px; position:absolute; left:300px; top:100px; border:0px;"/></img><span id = "usernameResult" style = "width: auto"></span></div>
<div id = "search_people">
<img class = "people" src = "images/common_search/time.png"><input class = "people" name = "people" value = "" id = "s_people" type = "text" style = "text-indent:35px;height:38px;width:255px;position:absolute;left:700px;top:100px; border:0px;"/></img><span id = "pwdResult" style = "height:41px;width: auto"></span></div>
<div id = "search_submit"><input class = "submit" name = "Ssubmit" value = "" id = "s_submit" type = "submit" style = "background:url(images/common_search/class_search_sub.png);height:38px; width:86px;position:absolute;left:975px;top:100px;border:0px; "/></div>
</form>
</div>
<div id = "email"><a href = ""><img class = "email2" src = "images/email.png"></img></a></div>
<div id = "exit"><a href = "logout.php"><img class = "exit2" src = "images/exit.png"></img></a></div>
<div id = "list"></div>
<div id = "main">
<table>
<thead>
<tr>
<th>通知公告</th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody id="tab">
<tr> 
<td><a href = ""><strong>news_title</strong></a></td>
<td><a href = ""><strong>time</strong></a></td>
</tr>
<tr>
<td><a href = ""><strong>news_title</strong></a></td>
<td><a href = ""><strong>time</strong></a></td>
</tr>
<tr>
<td><a href = ""><strong>news_title</strong></a></td>
<td><a href = ""><strong>time</strong></a></td>
</tr>
<tr>
<td><a href = ""><strong>news_title</strong></a></td>
<td><a href = ""><strong>time</strong></a></td>
</tr>
<tr>
<td><a href = ""><strong>news_title</strong></a></td>
<td><a href = ""><strong>time</strong></a></td>
</tr>
</tbody>
<tfoot>
<tr>
</tr>
</tfoot>
</table>
<script type="text/javascript">
<!--
var Ptr=document.getElementById("tab").getElementsByTagName("tr");
function $() {
    for (i=1;i<Ptr.length+1;i++) { 
    Ptr[i-1].className = (i%2>0)?"t1":"t2"; 
    }
}
window.onload=$;
for(var i=0;i<Ptr.length;i++) {
    Ptr[i].onmouseover=function(){
    this.tmpClass=this.className;
    this.className = "t3";
    
    };
    Ptr[i].onmouseout=function(){
    this.className=this.tmpClass;
    };
}
//-->
</script>
</div>
<div id = "footer"></div>
</body>
</html>
