<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<link href="css/page/applyfor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/page/apply1.js"></script>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/validate-ex.js"></script>
<script type="text/javascript" src="js/page/formtest.js"></script>
<script type="text/javascript">
$(function(){

var selectform2 = $(".form5");
test(selectform2);

});
</script>


<style>
.form1 td p{line-height:16px; color:#999}
label.error{color:#ea5200; margin-left:4px;   background:url(img/unchecked.gif) no-repeat 0px 0px;  padding: 0 20px;}
label.right_mess{margin-left:4px; padding-left:20px; background:url(img/checked.gif) no-repeat 0px 0}
</style>
</head>

<body>
<!---->
	<div class="main">
		<!--header 开始-->
	    <?php
			session_start();
			if(!isset($_SESSION["stu_id"])) 
			{
			print("<script>");
			print ("alert('请先登录');");
			print("history.go(-1)");			
			print("</script>");
					
					
					
				}	
				else
				{
		   include("php/common_header.php");
		   
		   	error_reporting(0);
			require_once('php/connect.php');
			session_start();
			$stu_id=$_SESSION["stu_id"];
			//echo ;
			$stu_id=$_SESSION["stu_id"];
			$sql="select *from student where stu_id=".$stu_id."";
			
			//print $sql;
			$rs=mysql_query($sql);
			$row=mysql_fetch_array($rs);
         ?>
        <!--header 结束-->
        <!--content 开始-->
        <div class="content">
        	<div class="content_resize">

 				<div class="message">
                	<div class="mess">
                    	<h3>基本信息<span ></span></h3>
                        <div class="mess_detial" >
                            <form class="form1">
                     			<table  width="100%">
                                    <tr>
                                    
                                        <td>班级：</td>
                                        <td><input type = 'text' name='stu_class' disabled="disabled" value="<?php echo $row['stu_class']; ?>" ></td> 
                                        <td>专业：</td>
                                        <td><input type = 'text' name='major' disabled="disabled" value="<?php echo $row['stu_major']; ?>" ></td> 

                                    </tr>                                
                                    <tr>
                                        <td  width="" >姓名：</td>
                                        <td ><input type = 'text' name='name'  disabled="disabled" value="<?php echo $row['stu_name']; ?>"></td>  
                                        <td>性别：</td>
                                        <td><input type = 'radio' name='gender' <?php if($row['stu_gender']==1)  ?> { checked="checked"}  disabled="disabled" value="1">男<input type = 'radio' name='gender' <?php if($row['stu_gender']==0)  ?> { checked="checked"} value="0"  disabled="disabled">女</td> 
										<td>出生年月：</td>
   										<td ><input type = 'text' name='name'  disabled="disabled" value="<?php echo trim($row['stu_birthday']); ?>"></td>  
                                    </tr>
                                    <tr>
                                        <td>学号：</td>
                                        <td width="" ><input type = 'text' name='num'  disabled="disabled" value="<?php echo $row['stu_num']; ?>"></td>
                                        <td>民族：</td>
                                        <td><input type = 'text' name='nation' class="input required"   disabled="disabled" value="<?php echo $row['stu_nation']; ?>"></td>
                                        <td>入学时间：</td>
   										<td ><input type = 'text' name='name'  disabled="disabled" value="<?php echo trim($row['stu_periodAtSchool']); ?>"></td>
                                      
                                        
                                    </tr>
                                    <tr>
                                        <td>政治面貌：</td>
   										<td ><input type = 'text' name='name'  disabled="disabled" value="<?php echo trim($row['stu_politicalAppearance']); ?>"></td>
                                        <td>联系电话：</td>
                                        <td><input type = 'text' name='phoneNum' disabled="disabled"  value="<?php echo $row['stu_phoneNum']; ?>"></td>                                        

                                        <td>身份证号：</td>
                                        <td><input type = 'text' name='idCard' disabled="disabled"  value="<?php echo $row['stu_idCard']; ?>"></td>                                                
                                    </tr>                                    
                                     <tr>
                                        <td>家庭户口：</td>

                                        <td><input type = 'text' name='household' disabled="disabled"  <?php  if( $row['aidSch_household']==1)
										 {?> value="城镇" <?php ;}if( $row['aidSch_household']==2) {?>value="农村" <?php ;} ?>></td>
                                        <td>家庭收入来源：</td>
                                        <td><input type = 'text' disabled="disabled" name='sourceOfIncome'  value="<?php echo $row['family_sourceOfIncome']; ?>"></td>                                            
                                        <td>家庭月总收入：</td>
                                        <td><input type = 'text' disabled="disabled" name='totalMonthlyIncome'  value="<?php echo $row['family_totalMonthlyIncome']; ?>"></td>                                                   

                                    </tr>                                                             
                                    <tr>
                                        <td >家庭人口总数：</td>
                                        <td ><input type = 'text' disabled="disabled"  name='familyPopulation'  value="<?php echo $row['family_familyPopulation']; ?>"></td>                              
                                        <td>家庭详细住址：</td>
                                        <td ><textarea  disabled="disabled" ><?php echo $row['family_homeAddress']; ?></textarea></td>                                                                
                                        <td>邮政编码：</td>
                                        <td><input type = 'text' name='postalCode' disabled="disabled" value="<?php echo $row['family_postalCode']; ?>"></td> 
                               
                                    </tr> 
                                                                                                                                                                   		
                                 </table>           
                            
                            </form>
                        </div>
                    </div>
				 <div class="mess">
                    	<h3>完善信息<span ></span></h3>
                        <div class="mess_detial" >
                            <form action="deal_applysclship.php"  class="form5" method="post">
                     			<table  width="100%">
                                    <tr>
                                        <td width="1%">成绩排名：</td>
                                        <td width="10%"><input type = 'text' name='ranking1'  class="input required" />
                                        <p>排名格式如：2/34</p></td> 
                                         <td width="1%">必须课门数：</td>
                                        <td width="10%"><input type = 'text' name='Com_Course' class="input required"   /> </td> 
                                        </tr>
                                        <tr>
                                         <td width="4%">综合排名：</td>
                                        <td width="10%"><input type = 'text' name='ranking2' class="input required"  />   </td>
                                        <td width="4%">通过门数：</td> 
                                        <td width="10%"><input type = 'text' name='pass_num' class="input required"  />   </td> 
                                    </tr> 
                                    <tr>
                                    <td colspan="3">主要获奖情况：</td>
                                    <tr>
                                        <td>日期：</td>

                                         <td>奖项名称：</td>

                                         <td>颁布单位：</td>
                                     </tr>
                                    <tr>

                                        <td><input type = 'text' name='name11'  class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy年M月',minDate:'2008-6',maxDate:'2030-10'})"/>   </td>

                                        <td><input type = 'text' name='name12' class="input required" />   </td> 

                                        <td><input type = 'text' name='name13' class="input required"  />   </td> 
                                    </tr>                                      
                                     <tr>

                                        <td><input type = 'text' name='name21'   class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy年M月',minDate:'2008-6',maxDate:'2030-10'})"/>  </td>

                                        <td><input type = 'text' name='name22' class="input required"  />   </td> 

                                        <td><input type = 'text' name='name23' class="input required" / >   </td> 
                                    </tr>  
                                    <tr>

                                        <td><input type = 'text' name='name31'  class="Wdate"  onfocus="WdatePicker({dateFmt:'yyyy年M月',minDate:'2008-6',maxDate:'2030-10'})" />  </td>

                                        <td><input type = 'text' name='name32'  />   </td> 

                                        <td><input type = 'text' name='name33'   />   </td> 
                                    </tr>  
                                    <tr>

                                        <td><input type = 'text' name='name41'    class="Wdate" onfocus="WdatePicker({dateFmt:'yyyy年M月',minDate:'2008-6',maxDate:'2030-10'})"/>  </td>

                                        <td><input type = 'text' name='name42'  />   </td> 

                                        <td><input type = 'text' name='name43'  / >   </td> 
                                    </tr>                                   
                                     <tr>
                                     <td> 申请理由：</td>
									<td colspan="2"><textarea name="reson"  cols="40" rows="10" class="input required"></textarea></td>
                                    </tr>                                                                                                                 
                                                                                                                  		
                                 </table>           
                            <input type="submit" value="提交" />
                            </form>
                        </div>
                    </div>

                </div>
        	</div>
       </div>
        <!--content 结束-->
        
        <!--footer 开始-->
         <?php
		     include("php/common_foot.php");
			 }
          ?>
        <!--footer 结束-->
        
    </div>
</body>
</html>
