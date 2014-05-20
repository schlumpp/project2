<?php
include_once('connect.php');

$query=mysql_query("select * from raty2 where id=1");
$rs=mysql_fetch_array($query);
$aver=$rs['total']/$rs['voter'];
$aver=round($aver,1)*10;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>星级评分-helloweba演示平台</title>
<link rel="stylesheet" type="text/css" href="../css/main.css" />
<style type="text/css">
.rate{width:600px; margin:100px auto; color:#51555c; font-size:14px; position:relative; padding:10px 0;}
.rate p {margin:0; padding:0; display:inline; height:40px; overflow:hidden; position:absolute; top:0; left:100px; margin-left:140px;}
.rate p span.s {font-size:36px; line-height:36px; float:left; font-weight:bold; color:#DD5400;}
.rate p span.g {font-size:22px; display:block; float:left; color:#DD5400;}
.big_rate {width:140px; height:28px; text-align:left; position:absolute; top:3px; left:85px; display:inline-block; background:url(star.gif) left bottom repeat-x;}
.big_rate span {display:inline-block; width:24px; height:28px; position:relative; z-index:1000; cursor:pointer; overflow:hidden;}
.big_rate_up {width:140px; height:28px; position:absolute; top:0; left:0; background:url(star.gif) left top;}
#my_rate{ position:absolute; margin-top:40px; margin-left:100px}
#my_rate span{color:#dd5400; font-weight:bold}
</style>
<script type="text/javascript" src="jq.js"></script>
<script type="text/javascript" src = "js2.js"></script>
</head>

<body>
<div id="main">
  <div class="rate">
     <div class="big_rate">
        <span rate="2">&nbsp;</span>
        <span rate="4">&nbsp;</span>
        <span rate="6">&nbsp;</span>
        <span rate="8">&nbsp;</span>
        <span rate="10">&nbsp;</span>
        <div style="width:45px;" class="big_rate_up"></div>
     </div>
     <p><span id="s" class="s"></span><span id="g" class="g"></span></p>
     <div id="my_rate"></div>
  </div>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
</div>

<p id="stat"><script type="text/javascript" src="js.js"></script></p>
</body>
</html>
