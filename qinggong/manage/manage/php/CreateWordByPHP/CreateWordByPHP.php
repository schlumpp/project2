<?php
/*
这个文件是通过PHP来生成word文档的类
	Create_aid用来生成助学金word
	Create_nation用来生成国家奖学金word
作者:陈烘
时间:2013.3.30
最近更新:2013.5.13
若出现乱码:
      要将PHPWord\PHPWord\Template.php中的setValue方法下的
      编码改成$replace = iconv('gbk', 'utf-8',$replace);
	  其他的文件也要改成这种样式的。
	  
	  如果还有乱码,在Section.php中，将
	  $givenText= utf8_encode($text);
	  改成
	  $givenText=iconv('gbk','utf-8',$text)
	  然后用section->addText (iconv('utf-8', 'gbk', 'your string') 就可以了
	
	  php iconv() 编码转换出错 Detected an illegal character 
	  将Cell.php的   $text = utf8_encode($text); 去掉
	  
	  若Template的setValue()方法对一些变量起作用，对一些变量不起作用。
	  重写Template方法,在Template.php中添加方法
	  	private static function striptags($matches)
		{
			return strip_tags($matches[1]);
		}
	  然后在 __construct方法的最后添加
	  $this->_documentXML = preg_replace_callback('/(\$\{.*\})/U',"self::striptags", $this->_documentXML );
	  
*/

//require_once 已经导入的话就不再重复导入，而require如果已经导入的话可能会引发错误
require_once 'PHPWord.php';  //引用PHPWrod框架
error_reporting(5);   //忽略php的notic警告
class CreateWordByPHP 
{
	var $PHPWord ;
	var $template ;
	var $saveRoot =  "D:\wamp\www\hznu\manage\php\CreateWordByPHP";
	function CreateWordByPHP() 
	{

	}
	function Create($sql,$conn)
	{
		$PHPWord = new PHPWord(); //创建实例
		if($sql['3']=='3') //申请的是助学金,调用助学金模版,然后调用Create_aid方法
		{
			$template = $PHPWord->loadTemplate('Template_aid.docx');
			$this->Create_aid($sql,$conn,$template);		
		}
		else if($sql['3']=='2') //申请的是奖学金，调用奖学金模版，然后调用Create_nation方法
		{
  			$template = $PHPWord->loadTemplate('Template_nation.docx');
  			$this->Create_nation($sql,$conn,$template);		
  		}
		else return ;  //否则，结束程序 
	}
	function Create_nation($sql,$conn,$template)  //创建奖学金
	{  
	    //查询奖学金表中的信息
		$sq="select * from national_scholarship where nationalSch_year=".$sql[0]." and stu_id=".$sql[1]; 
		$result = mysql_query($sq,$conn); 
		$row = mysql_num_rows($result); 
		//若记录有错,打印出错信息，结束程序
		if($row!=1  )
		{
  		   echo "记录有 ".$row." 条或少于一条，有错误:".$sq;
		  $template->save("D:\wamp\www\hznu\manage\php\CreateWordByPHP\\error\\".$sql[1].".docx");
  			return;
		}
		//记录正确，读取信息，生成word
		$myrow = mysql_fetch_row($result);  
		$template->setValue('ApplyReason',iconv('utf-8','gbk',$myrow[2]));//申请理由
		$template->setValue('ranking',iconv('utf-8','gbk',$myrow[5])); //排名1
		$template->setValue('ranking2',iconv('utf-8','gbk',$myrow[6]));//排名2
		$template->setValue('Com_Course',iconv('utf-8','gbk',$myrow[7]));//必修课
		$template->setValue('Pass_Num',iconv('utf-8','gbk',$myrow[8]));//通过课程

		//主要获奖情况
		$awards = explode(";",$myrow[9]);
		$i=1;
		foreach($awards as $val)
		{
  			if($val!="")
	 		{
		 		$details = explode("-",$val);
		 		$template->setValue("time".$i,iconv('utf-8','gbk',$details[0]));
		 		$template->setValue("award".$i,iconv('utf-8','gbk',$details[1]));
		 		$template->setValue('unit'.$i,iconv('utf-8','gbk',$details[2]));
	 		}
  			else
  			{
				$template->setValue("time".$i,iconv('utf-8','gbk',""));
				$template->setValue("award".$i,iconv('utf-8','gbk',""));
				$template->setValue('unit'.$i,iconv('utf-8','gbk',""));
	  		}
  		$i++;
		}
	   //学生基本信息,查询学生表
		$sq="select * from student where stu_id =".$myrow[1]."";
		$result = mysql_query($sq,$conn); 
		$row = mysql_num_rows($result);
		//若记录有错,打印出错信息，结束程
		if($row!=1 )
		{
  			echo "记录多余或少于一条，有错误:".$sq;  
			$template->save("D:\wamp\www\hznu\manage\php\CreateWordByPHP\\error\\".$myrow[1].".docx");
  			return ;
		}
		//记录正确，读取信息，生成word
		$myrow = mysql_fetch_row($result); //正常情况下，该记录只有一条，因此此处不用
		$template->setValue('Name',iconv('utf-8','gbk',$myrow[4])); //姓名
		if($myrow[6]==1)	  //性别
			$template->setValue("Sex",iconv('utf-8','gbk','男'));
		else if($myrow[6]==2)
			$template->setValue("Sex",iconv('utf-8','gbk','女'));
		else
		{
	 		echo "性别有误";
	        $template->save("D:\wamp\www\hznu\manage\php\CreateWordByPHP\\error\\".$myrow[1].".docx");
	 		return ;
		}
		$template->setValue("Birthday",iconv('utf-8','gbk',$myrow[21])); //出生年月
		$template->setValue("studentNumber",iconv('utf-8','gbk',$myrow[1])); //学号
		$template->setValue("Nation",iconv('utf-8','gbk',$myrow[11]));//民族
		$template->setValue("PeriodAtSchool",iconv('utf-8','gbk',$myrow[22]));//入学时间
		$template->setValue("Political",iconv('utf-8','gbk',$myrow[10]));//政治面貌
		$template->setValue("PhoneNumber",iconv('utf-8','gbk',$myrow[12]));//联系电话
		$template->setValue("SourceOfIncome",iconv('utf-8','gbk',$myrow[14]));//收入来源
		$template->setValue("MonthlyIncome",iconv('utf-8','gbk',$myrow[15])); //月收入
		$template->setValue("Family",iconv('utf-8','gbk',$myrow[16]));//家庭人口数
		$template->setValue("Address",iconv('utf-8','gbk',$myrow[17]));//家庭地址
		$template->setValue("Postlcode",iconv('utf-8','gbk',$myrow[18]));//邮政编码
		$template->setValue("Class",iconv('utf-8','gbk',$myrow[5]));  //班级
		$str =$myrow[7];  //身份证
		$char_c = str_split($str);
		for($i=1 ;$i<=18;$i++)   
		{
			$template->setValue('c'.$i, iconv('utf-8','gbk',$char_c[$i-1]));
		}	 
		//存储
		$t=time();
		$year = date("Y",$t);
		$template->save("D:\wamp\www\hznu\manage\php\CreateWordByPHP\\nation\\".$year.$myrow[1].".docx");
	}
	function Create_aid($sql,$conn,$template) //创建助学金
	{   //记录正确，读取信息，生成word
		$sq = "select * from aid_scholarship where aidSch_time=".$sql[0]." and stu_id=".$sql[1]; //从助学金表中得到id为$sql[0]的记录
		$result = mysql_query($sq,$conn); 
		$row = mysql_num_rows($result);
		//若记录有错,打印出错信息，结束程序
		if($row!=1  )
		{
  			echo "记录多余或少于一条，有错误";
			$template->save("D:\wamp\www\hznu\manage\php\CreateWordByPHP\\error\\".$sql[1].".docx");
  			return ;
		}
		$myrow = mysql_fetch_row($result); //正常情况下，该记录只有一条，因此此处不用循环
		$template->setValue('ApplyReason', iconv('utf-8','gbk',$myrow[2]));//申请理由
		//查询学生表中信息
		$sq="select *from student where stu_id = '".$myrow[1]."'";
		$result = mysql_query($sq,$conn); 
		$row = mysql_num_rows($result);
		//若记录有错,打印出错信息，结束程序
		if($row!=1  )
		{
  			echo "记录多余或少于一条，有错误:".$sq;
			$template->save("D:\wamp\www\hznu\manage\php\CreateWordByPHP\\error\\".$myrow[1].".docx");
  			return ;
		}
		$myrow = mysql_fetch_row($result); //正常情况下，该记录只有一条，因此此处不用
		$template->setValue('Major', iconv('utf-8','gbk',$myrow[8])); //专业
		$template->setValue('Class', iconv('utf-8','gbk',$myrow[5])); //班级
		$template->setValue('Name', iconv('utf-8','gbk',$myrow[4]));//姓名
		$template->setValue('Birthday', iconv('utf-8','gbk',$myrow[21]));//出生日期
		$template->setValue('StudentNumber', iconv('utf-8','gbk',$myrow[1])); //学号
		$template->setValue('Nation', iconv('utf-8','gbk',$myrow[11]));//民族
		$template->setValue('PeriodAtSchool', iconv('utf-8','gbk',$myrow[22]));//入学时间
		$template->setValue('Political', iconv('utf-8','gbk',$myrow[10]));//政治面貌
		$template->setValue('PhoneNumber', iconv('utf-8','gbk',$myrow[12]));//联系电话
		$template->setValue('SourceOfIncome', iconv('utf-8','gbk',$myrow[14]));//收入来源
		$template->setValue('MonthlyIncome', iconv('utf-8','gbk',$myrow[15]));//月总收入
		$template->setValue('Family', iconv('utf-8','gbk',$myrow[16]));//家庭人口
		$template->setValue('Address', iconv('utf-8','gbk',$myrow[17]));//家庭住址
		$template->setValue('Postalcode', iconv('utf-8','gbk',$myrow[18]));//邮政编码
		 //性别
		if($myrow[6]!=1 && $myrow[6]!=2 ) 
		{
 			echo "性别有误:".$myrow[6];
		    $template->save("D:\wamp\www\hznu\manage\php\CreateWordByPHP\\error\\".$myrow[1].".docx");
			return ;
		}
		else if($myrow[6]==1)
		{
  			$template->setValue('Sex', iconv('utf-8','gbk','男'));
  		}
		else
		{
  			$template->setValue('Sex', iconv('utf-8','gbk','女'));
  		}
		 //身份证
		$str =$myrow[7]; 
		$char_c = str_split($str);
		for($i=1 ;$i<=18;$i++)   
		{
			$template->setValue('c'.$i, iconv('utf-8','gbk',$char_c[$i-1]));
		}	
		//家庭成员
		$family_member=explode(";",$myrow[19]);
		$i=1;
		foreach($family_member as $val)
		{   
  			if($val!="")
  			{ 
				$details = explode("-",$val);
	  			$template->setValue("Name".$i,iconv('utf-8','gbk',$details[0]));
	  			$template->setValue("Age".$i,iconv('utf-8','gbk',$details[1]));
	  			$template->setValue("Relation".$i,iconv('utf-8','gbk',$details[2]));
	  			$template->setValue("Work".$i,iconv('utf-8','gbk',$details[3]));
	  		}
  			else
  			{
	  			$template->setValue("Name".$i,iconv('utf-8','gbk',""));
	  			$template->setValue("Age".$i,iconv('utf-8','gbk',""));
	  			$template->setValue("Relation".$i,iconv('utf-8','gbk',""));
	  			$template->setValue("Work".$i,iconv('utf-8','gbk',""));
	  		}
  			$i++;
		}
//家庭户口
//认定情况
//存储
		$t=time();
		$year = date("Y",$t);
		$template->save("D:\wamp\www\hznu\manage\php\CreateWordByPHP\\aid\\".$year.$myrow[1].".docx");
	}
}




?>