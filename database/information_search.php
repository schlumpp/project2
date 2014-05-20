<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭师大教务处</title>
<link rel = "stylesheet" type = "text/css" href = "styles/basic.css"/>
<link rel = "stylesheet" type = "text/css" href = "styles/style2.css"/>
<link rel = "stylesheet" type = "text/css" href = "styles/style3.css"/>
<script type="text/javascript" src = "js/js.js">
</script>

<script type="text/javascript" src="js/table_js.js"></script>
</head>
<body onload="MM_preloadImages('images/activity/subject_blue.png')">
<div id = "header"><a href =  "index.php"><img src = "images/hznu.png"></img></a></div>
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
<div id = "bukao"><a href="bukao.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('bk','','images/information_search/bukao.png',1)"><img class = "search1" src="images/information_search/bukao_grey.png" width="249" height="67" id="bk" /></a></div>
<div id = "class_choose"><a href="information_search.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('cc','','images/information_search/class_choose.png',1)"><img class= "search2" src="images/information_search/class_choose_blue.png" width="265" height="67" id="cc" /></a></div>
<div id = "grade_search"><a href="grade_search.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('gs','','images/information_search/grade_search.png',1)"><img class = "search3" src="images/information_search/grade_search_grey.png" width="150" height="67" id="gs" /></a></div>
<div id = "grade_test_s"><a href="grade_test_s.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('gts','','images/information_search/grade_test_s.png',1)"><img class = "search4" src="images/information_search/grade_test_s_grey.png" width="211" height="67" id="gts" /></a></div>
<div id = "stu_per_class"><a href="stu_per_class.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('stp','','images/information_search/stu_per_class.png',1)"><img class = "search5"src="images/information_search/stu_per_class_grey.png" width="210" height="67" id="stp" /></a></div>
</div>

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
<div id = "email"><a href = ""><img class = "email2" src = "images/email.png"></img></a></div>
<div id = "exit"><a href = "logout.php"><img class = "exit2" src = "images/exit.png"></img></a></div>
<div id = "list"></div>
<div id = "main"></div>
<div id = "footer"></div>
</body>
</html>
