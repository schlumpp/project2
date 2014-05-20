<?php
/*******************************************************
*陈敏清
*显示贫困生申请奖学金信息
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
	<style>
	body {background:#FFF; margin-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px;}
	</style>
 <link href="images/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="widget table-widget">
    <div class="pageTitle">查看申请奖学金学生信息</div>
    <div class="pageColumn">
      <div class="pageButton">	</div>
<table>
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	$sid=$_GET["sid"];
	$year=date('Y');
	$sql="select * from  aid_scholarship left   join  student  on  aid_scholarship.stu_id=student.stu_id   where  aid_scholarship.aidSch_time   ='".$year."' and  student.stu_id =".$sid."";

	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	


	
	echo "<tr>" ;
	echo"<th>学号:</th>";
	echo"<td> ".$row['stu_num']."</td> ";
	echo"<th> 姓名:</th> ";
	echo"<td> ".$row['stu_name']."</td>";
	echo" <th>学院:</th>";
	echo"<td> ".$row['stu_college']."</td>";
	echo "</tr>" ;	
	echo "<tr>" ;
	echo"<th> 班级:</th>";
	echo" <td>".$row['stu_class']."</td>";
	echo"<th> 性别:</th>";
	echo"<td> ".$row['stu_gender']."</td>";
	echo" <th>身份证:</th>";
	echo"<td> ".$row['stu_idCard']."</td>";
	
	echo "</tr>" ;
	echo "<tr>" ;
		
	echo"<th> 专业:</th>";
	echo"<td> ".$row['stu_major']."</td>";

	echo"<th> 政治面貌:</th>";
	echo"<td> ".$row['stu_politicalAppearance']."</td>";
	echo"<th> 民族:</th> ";
	echo"<td> ".$row['stu_nation']."</td>";
	
	echo "</tr>" ;
	echo "<tr>" ;
		
	echo" <th>联系电话:</th>";
	echo"<td> ".$row['stu_phoneNum']."</td>";

	echo" <th>家庭户口:</th>";
	echo"<td> ".$row['aidSch_household']."</td>";
	echo" <th>家庭收入来源:</th>";
	echo"<td> ".$row['family_sourceOfIncome']."</td>";
	echo "</tr>" ;
	echo "<tr>" ;
		
	echo"<th> 家庭住址:</th>";

	echo"<td> ".$row['family_totalMonthlyIncome']."</td>";

	echo "<th> 家庭人口总数:</th>";
	echo" <td> ".$row['family_familyPopulation']."</td>";
	echo"<th>  家庭住址:</th>";
	echo"<td> ".$row['family_homeAddress']."</td>";
	echo "</tr>" ;
	echo "<tr>" ;
		
	echo"  <th>邮政编码:</th>";
	echo"<td> ".$row['family_postalCode']."</td>";

	echo" <th> 生源地:</th>";
	echo"<td> ".$row['stu_hometown']."</td>";
	echo"<th>  出生年月:</th>";
	echo"<td> ".$row['stu_birthday']."</td>";
	echo "</tr>" ;
	echo "<tr>" ;
	
	echo" <th> 开学日期:</th>";
	echo"<td> ".$row['stu_periodAtSchool']."</td>";

	echo" <th> 申请理由:</th>";
	echo"<td> ".$row['aidSch_applyReason']."</td>";
	echo "</tr>" ;	
	
?>
	</table>
</div>
</div>
</body>
</html>