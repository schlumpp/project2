<?php
//获取关于贫困生申请提交的信息
  require_once('../connect.php');
	session_start();
	$stu_id=$_SESSION["stu_id"];
	
/*	$name=$_REQUEST["name"];
	$num=$_REQUEST["num"];
	$college=$_REQUEST["college"];
*/
	if(!empty($_REQUEST["stu_class"]))
	{
		$idCard=$_REQUEST["idCard"];
		$class=$_REQUEST["stu_class"];


		$birthday=$_REQUEST["stu_birthday1"];
		$gender=$_REQUEST["gender"];


		$periodAtSchool=$_REQUEST["period1"];;
		$major=$_REQUEST["major"];
		$nation=$_REQUEST["nation"];

		$politicalAppearance=$_REQUEST["politicalAppearance"];
		$hometown=$_REQUEST["hometown"];

		$phoneNum=$_REQUEST["phoneNum"];

		
		$sql="update student set  stu_class='".$class."', stu_gender=".$gender.", stu_idCard='".$idCard."', stu_major='".$major."', stu_birthday='".$birthday."', stu_periodAtSchool='".$periodAtSchool."', stu_politicalAppearance='".$politicalAppearance."', stu_nation='".$nation."', stu_phoneNum='".$phoneNum."',stu_hometown='".$hometown."' where stu_id=".$stu_id."";

		$rs=mysql_query($sql);
		
		if($rs)	
			print('1');
		else
			print('2');	
		
		}
	if(!empty($_REQUEST["familyPopulation"]))
	{
		$household=$_REQUEST["household"];
		if($household=='城镇')
		$home=1;
		else
		$home=2;
		$sourceOfIncome=$_REQUEST["sourceOfIncome"];
		$totalMonthlyIncome=$_REQUEST["totalMonthlyIncome"];
		$familyPopulation=$_REQUEST["familyPopulation"];
		$homeAddress=$_REQUEST["homeAddress"];
		$postalCode=$_REQUEST["postalCode"];
			$sql="update student set  aidSch_household=".$home.", family_sourceOfIncome='".$sourceOfIncome."', family_totalMonthlyIncome=".$totalMonthlyIncome.", family_familyPopulation=".$familyPopulation.", family_homeAddress='".$homeAddress."', family_postalCode='".$postalCode."' where stu_id=".$stu_id."";
		$rs=mysql_query($sql);		
		if($rs)	
			print('3');
		else
			print('4');	
	
		
	}
	if(!empty($_REQUEST['name11']))
	{
		$time=date('Y-m-d H:i:s');
		//获取家庭信息，需要将每个成员的信息加起来，每条信息用”，“隔开，每个成员用”；“隔开
		$name1=array($_REQUEST["name11"],'-',$_REQUEST["name12"],'-',$_REQUEST["name13"],'-',$_REQUEST["name14"],';');
		$member1=implode($name1);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
		$name2=array($_REQUEST["name21"],'-',$_REQUEST["name22"],'-',$_REQUEST["name23"],'-',$_REQUEST["name24"],';');
		$member2=implode($name2);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
		if($_REQUEST['name31']=="")
			$member3=";";
		else
		{
			$name3=array($_REQUEST["name31"],'-',$_REQUEST["name32"],'-',$_REQUEST["name33"],'-',$_REQUEST["name34"],';');
			$member3=implode($name3);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
		}
		if($_REQUEST['name41']=="")
			$member4=";";
		else
		{
			$name4=array($_REQUEST["name41"],'-',$_REQUEST["name42"],'-',$_REQUEST["name43"],'-',$_REQUEST["name44"],';');
			$member4=implode($name4);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
		}
		if($_REQUEST['name51']=="")
			$member5=";";
		else
		{
			$name5=array($_REQUEST["name51"],'-',$_REQUEST["name52"],'-',$_REQUEST["name53"],'-',$_REQUEST["name54"],';');
			$member5=implode($name5);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
		}
		//最后将五个成员的信息合并到familyMember属性当中去
		$members=array($member1,$member2,$member3,$member4,$member5);
		$familyMember=implode($members);
		
		//将获取的贫困生信息填写到学生表里
		$sql="update student set family_familyMember='".$familyMember."' where stu_id=".$stu_id."";
			//	print $sql;
		$rs=mysql_query($sql);		
		if($rs)	
			print('5');
		else
			print('6');	
	
	
	}

	//将获取的贫困生信息填写到学生表里
	


/*	$type=1;
	$state=1;
	$sql="insert into applyfor(apply_id,stu_time,apply_type,applySch_state) values('".$stu_id."','".$time."',".$type.",".$state.")";
	mysql_query($sql);
	print("<script>");
	print ("alert('等待审核')");
	print("</script>");
	print("<script>");
	//返回上一个页面

	print("</script>");*/
	
	
?>