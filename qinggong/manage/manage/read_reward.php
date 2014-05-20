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
</head>

<body>
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	$sid=$_GET["sid"];
	$year=date('Y');
	$sql="	select * from student left join applyfor on   student.stu_id= applyfor.apply_id left join national_scholarship  on  national_scholarship.stu_id=apply_id   where student.type=2 and applyfor.applyfor_year ='".$year."' and applyfor.apply_type =2 and applyfor.applySch_state=2;";

	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	
	$main_award=explode(";",$row["main_award"]);
		$i=1;
		foreach($main_award as $val)
		{   
  			if($val!="")
  			{ 
				$details = explode("-",$val);
	  		    echo $details[0];
				  echo $details[1];
				    echo $details[2];
					  echo $details[3];
	  		}
  			
  			$i++;
		}
	
	echo"学号: ".$row['stu_num']."<br/>";
	echo"姓名: ".$row['stu_name']."<br/>";
	echo"学院: ".$row['stu_college']."<br/>";
	echo"班级: ".$row['stu_class']."<br/>";
	echo"性别: ".$row['stu_gender']."<br/>";
	echo"成绩排名：".$row['ranking1']."<br/>";
	echo"综合排名：".$row['ranking2']."<br/>";
	echo"主修课程门数：".$row['Com_Course']."<br/>";
	echo"通过课程门数：".$row['pass_num']."<br/>";
	echo"申请理由: ".$row['nationalSch_applyReason']."<br/>";
	echo"身份证: ".$row['stu_idCard']."<br/>";
	echo"专业: ".$row['stu_major']."<br/>";
	echo"政治面貌: ".$row['stu_politicalAppearance']."<br/>";
	echo"民族: ".$row['stu_nation']."<br/>";
	echo"联系电话: ".$row['stu_phoneNum']."<br/>";
	echo"家庭户口: ".$row['aidSch_household']."<br/>";
	echo"家庭收入来源: ".$row['family_sourceOfIncome']."<br/>";
	echo"家庭住址: ".$row['family_totalMonthlyIncome']."<br/>";
	echo"家庭人口总数: ".$row['family_familyPopulation']."<br/>";
	echo"家庭住址: ".$row['family_homeAddress']."<br/>";
	echo"邮政编码: ".$row['family_postalCode']."<br/>";
	echo"生源地: ".$row['stu_hometown']."<br/>";
	echo"出生年月: ".$row['stu_birthday']."<br/>";
	echo"开学日期: ".$row['stu_periodAtSchool']."<br/>";
	
?>
</body>
</html>