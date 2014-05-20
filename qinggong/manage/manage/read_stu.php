<?php
/*******************************************************
*陈敏清
*显示学生的具体信息
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
	$sql="select *from student where stu_id='".$sid."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	
	$family_member=explode(";",$row["family_familyMember"]);
		$i=1;
		foreach($family_member as $val)
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