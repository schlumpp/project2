<?php
/**
 * @时间转换函数和输出内容格式化函数
 * @2010 Helloweba.com,All Rights Reserved.
 * -----------------------------------------------------------------------------
 * @author: helloweba
 * @update: 2010-10-16
*/
if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


	function formatSay($say,$dt,$uid,$reply){
	$say=htmlspecialchars(stripslashes($say));
	$uidpic=	rand(0,4);
	if($reply==null)
	{
	$str1 = '<div class="reply">回复(0)</div>';
	$str2 ='';
	}
	else
	{
	$str1 = '<div class="reply"><a>回复(1)</a></div>';
	$str2 ='<div class="reply_cont"><a style=" color:#30C; margin-left:10px;">管理员回复：</a>'.$reply.'</div>';
	}
	return'
	<div>

	<div class="saylist"><a href="#"><img src="images/'.$uidpic.'.jpg" width="50" height="50" alt="demo" /></a>
	<div class="saytxt">
	<p><strong><a href="#">用户：'.$uid.'</a></strong> '. preg_replace('/((?:http|https|ftp):\/\/(?:[A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?[^\s\"\']+)/i','<a href="$1" rel="nofollow" target="blank">$1</a>',$say).'
	</p>
	<div class="date">'.tranTime($dt).'</div>
	'.$str1.'
	</div>
	
	<div class="clear"></div>
	</div>
	'.$str2.'
	</div>
	';

}

/*时间转换函数*/
function tranTime($time) {
	$rtime = date("m-d H:i",$time);
	$htime = date("H:i",$time);
	$time = time() - $time;

	if ($time < 60) {
		$str = '刚刚';
	}
	elseif ($time < 60 * 60) {
		$min = floor($time/60);
		$str = $min.'分钟前';
	}
	elseif ($time < 60 * 60 * 24) {
		$h = floor($time/(60*60));
		$str = $h.'小时前 '.$htime;
	}
	elseif ($time < 60 * 60 * 24 * 3) {
		$d = floor($time/(60*60*24));
		if($d=1)
		   $str = '昨天 '.$rtime;
		else
		   $str = '前天 '.$rtime;
	}
    else {
		$str = $rtime;
	}
	return $str;
}
?>
