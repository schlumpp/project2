
<?php
/*******************************************************
*陈敏清
*后台管理系统
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/lanrentuku.css" type="text/css" rel="stylesheet" />
<link href="css/base.css" type="text/css" rel="stylesheet" />
<link href="css/common.css" type="text/css" rel="stylesheet" />

<title>后台管理</title>
</head>
<body>
<?php
  include("php/common_header.php");
?>


<div style='width:100%; margin:auto;'>
  <iframe height='50px' name='top' align='top' width='100%' scrolling='no' frameborder='0' marginheight='-10px'></iframe>  
<iframe width='15%' name='menu' height='600px' src='menu.php' scrolling='no' frameborder='0'  marginheight='-10px'></iframe>
<iframe width='84%' name='body' height='600px' src='seeproduction.php' scrolling='no' frameborder='0'  marginheight='-10px'></iframe>

</div>;






 


<?php
   include("php/common_foot.php");
?>

</body>
</html>