<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
</head>
<body>
<?php 
session_start();
if(isset($_SESSION["stno"]))


//注销用

unset($_SESSION["stno"]);

if(isset($_SESSION["stu_id"]))

unset($_SESSION["stu_id"]);
print("<script>");
print("alert('退出成功！！');");
print("window.location='main.php'");
print("</script>");


?>

</body>
</html>