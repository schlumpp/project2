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
<script type="text/javascript" src="js/jquery.alert.js"></script>
<script type="text/javascript">
$(function(){
var selectform1 = $(".form1");
test(selectform1);
var selectform2 = $(".form2");
test(selectform2);
var selectform3 = $(".form3");
test(selectform3);
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
			$sql2="select *from student where stu_id= '".$stno."'";
			//print $sql;
			$rs=mysql_query($sql2);
			$row=mysql_fetch_array($rs);
         ?>
        <!--header 结束-->
        <!--content 开始-->
        <div class="content">
        	<div class="content_resize">
            <div class="position">
                    	<a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> <a href="applyfor.php">奖助中心</a> >完善基本资料</p></span>
                   	</div>	
                <div class="step">
                <ul>
                	<li class="step1"><a href="apply1.php">第一步：完善基本信息</a></li>
                    <li class="step2"><a href="apply2.php">第二步：选择困难等级</a></li>
                    <li class="step2"><a href="apply3.php">第三步：申请入库完成</a></li>                
                </ul>
                </div>
 		<div class="message">
                	<div class="mess">
                    	<h3>基本信息<span ></span></h3>
                        <div class="mess_detial" >
                            <form class="form1">
                     			<table  width="100%">
                                    <tr>
                                        <td  width="8%" >姓名：</td>
                                        <td width="35%"><input type = 'text' name='name'  disabled="disabled" value="<?php echo $row['stu_name']; ?>"></td>  
                                        <td width="8%" >学号：</td>
                                        <td width="35%" ><input type = 'text' name='num'  disabled="disabled" value="<?php echo $row['stu_num']; ?>"></td>                        
                                    </tr>
                                    <tr>
                                        <td>学院：</td>
                                        <td><input type = 'text' name='college'  disabled="disabled" value="<?php echo $row['stu_college']; ?>"></td> 
                                        <td>身份证号：</td>
                                        <td><input type = 'text' name='idCard' class="input required" value="<?php echo $row['stu_idCard']; ?>"></td>                                        
                                    </tr>
                                    <tr>
                                        <td>班级：</td>
                                        <td><input type = 'text' name='stu_class' class="input required" value="<?php echo $row['stu_class']; ?>" ></td> 
                                        <td>出生年月：</td>
                                        <td>
  										<input type="text" class="Wdate" id="d413"  name="stu_birthday1" value="<?php echo $row['stu_birthday']; ?>"  onfocus="WdatePicker({dateFmt:'yyyy年M月',minDate:'1985-2',maxDate:'2030-10'})"/>                                            
                                        </td>                                                         
                                    </tr>                                    
                                     <tr>
                                        <td>性别：</td>
                                        <td><input type = 'radio' name='gender' <?php if($row['stu_gender']==1) {  ?> checked="checked" <?php } ?> value="1">男<input type = 'radio' name='gender' <?php if($row['stu_gender']==2)  { ?> checked="checked" <?php } ?>value="2">女</td> 
                                        <td>入学时间：</td>
                                        <td><input type="text" class="Wdate" id="d414"  name="period1"   value="<?php echo $row['stu_periodAtSchool']; ?>"  onfocus="WdatePicker({dateFmt:'yyyy年M月',minDate:'2010-6',maxDate:'2030-10'})"/> </td>                                     
                                    </tr>                                                             
                                    <tr>
                                        <td>专业：</td>
                                        <td><input type = 'text' name='major' class="input required" value="<?php echo $row['stu_major']; ?>" ></td> 
                                        <td>民族：</td>
                                        <td><input type = 'text' name='nation' class="input required" value="<?php echo $row['stu_nation']; ?>">
                                        <p>格式如：汉族</p></td>                                         
                                    </tr> 
                                    <tr>
                                        <td>政治面貌：</td>
                                        <td>
                                        	<select name='politicalAppearance'>
                                            	<option <?php  if($row['stu_politicalAppearance']=='中共党员') {?>   selected="selected"    <?php }?>>中共党员 </option>
												<option <?php  if($row['stu_politicalAppearance']=='预备党员') {?>   selected="selected"    <?php }?>>预备党员 </option>
												<option <?php  if($row['stu_politicalAppearance']=='共青团员') {?>   selected="selected"    <?php }?>>共青团员 </option>
												<option <?php  if($row['stu_politicalAppearance']=='群众') {?>   selected="selected"    <?php }?>>群众 </option>                                             
                                            </select>
                                        </td> 
                                        <td>生源地：</td>
                                        <td><input type = 'text' name='hometown'  class="input required" value="<?php echo $row['stu_hometown']; ?>">
                                          <p>格式如：浙江杭州</p></td>  </td>                                         
                                    </tr>    
                                    <tr>
                                  
                                        <td>联系电话：</td>
                                        <td><input type = 'text' name='phoneNum' class="input required" value="<?php echo $row['stu_phoneNum']; ?>"></td>                                         
                                    </tr> 
                                     <tr>                                 
                                       		<td><input type="submit" value="保存修改"  >  </td>                               
                                       		<td> <input type="reset" value="取消"  >   </td>
                                    </tr>                                                                                                                                		
                                 </table>           
                            
                            </form>
                        </div>
                    </div>
				 <div class="mess">
                    	<h3>家庭信息<span ></span></h3>
                        <div class="mess_detial" >
                            <form class="form2">
                     			<table  width="100%">
                                    <tr>
                                        <td width="8%">家庭人口总数：</td>
                                        <td width="35%"><input type = 'text' name='familyPopulation' class="input required" value="<?php echo $row['family_familyPopulation']; ?>"></td>  
                                        <td width="8%">家庭详细住址：</td>
                                        <td width="35%"><input type = 'text' name='homeAddress' class="input required" value="<?php echo $row['family_homeAddress']; ?>"></td>                        
                                    </tr> 
                                    <tr>
                                        <td>家庭户口：</td>
                                        <td>
                             				<select  name="household" class="required">
                                            	<option <?php  if($row['aidSch_household']==1) {?>   selected="selected"    <?php }?>>城镇 </option>

                                            	<option <?php  if($row['aidSch_household']==2) {?>   selected="selected"    <?php }?>>农村 </option>                                             
                                            </select>
                                      	</td>
                                        <td>家庭收入来源：</td>
                                        <td><input type = 'text' name='sourceOfIncome' class="input required" value="<?php echo $row['family_sourceOfIncome']; ?>"></td>                                        
                                    </tr>
                                    <tr>
                                        <td>邮政编码：</td>
                                        <td><input type = 'text' name='postalCode' class="input required" value="<?php echo $row['family_postalCode']; ?>"></td> 
                                        <td>家庭月总收入：</td>
                                        <td><input type = 'text' name='totalMonthlyIncome' class="input required" value="<?php echo $row['family_totalMonthlyIncome']; ?>"></td>                                         
                                    </tr>   
                                    <tr>                                 
                                       		<td><input type="submit" value="保存修改"  >  </td>                               
                                       		<td> <input type="reset" value="取消"  >   </td>
                                    </tr>                                                                                		
                                 </table>           
                            
                            </form>
                        </div>
                    </div>
           
 					<div class="mess">
                    	<h3>家庭成员情况<span ></span></h3>
                        <div class="mess_detial" >
                            <form class="form3">
                     			<table >
                                    <tr>
                                        <td width="26%" >姓名：</td>
                                        <td width="25%">年龄：</td>  
                                        <td width="10%" >与本人关系：</td>
                                        <td width="20%" >工作或学习单位：</td>                                                                                                                                       
                                    </tr>
                                    <?php
									$family_member=explode(";",$row["family_familyMember"]);
									$i=1;
									
									foreach($family_member as $val)
									{   
										if($val!="")
										{ 
											$details = explode("-",$val);
											for($j=0;$j<=3;$j++)
											{
												$name[$i][$j]=$details[$j];
											}
											
										}
										
										$i++;
									}
									?>
                                     <tr>

                                        <td><input type = 'text' name='name11' class="input required" value="<?php echo $name[1][0]; ?>" ></td>  

                                        <td><input type = 'text' name='name12'  class="input required" value="<?php echo $name[1][1]; ?>"></td>    

                                        <td><select name="name13" class="required">
                                        <option <?php  if($name[1][2]=='父子') {?>   selected="selected"    <?php }?>>父子 </option>

                                        <option <?php  if($name[1][2]=='母子') {?>   selected="selected"    <?php }?>>母子</option>
                                        
                                        <option <?php  if($name[1][2]=='父女') {?>   selected="selected"    <?php }?>>父女</option>
                                        
                                        <option <?php  if($name[1][2]=='母女') {?>   selected="selected"    <?php }?>>母女</option>  
                                        
                                        <option <?php  if($name[1][2]=='兄弟') {?>   selected="selected"    <?php }?>>兄弟</option>
                                        
                                        <option <?php  if($name[1][2]=='姐妹') {?>   selected="selected"    <?php }?>>姐妹</option>
                                        
                                        <option <?php  if($name[1][2]=='兄妹') {?>   selected="selected"    <?php }?>>兄妹</option>
                                        
                                        <option <?php  if($name[1][2]=='姐弟') {?>   selected="selected"    <?php }?>>姐弟</option>                                                                          
                                        </select></td>

                                        <td><input type = 'text' name='name14' class="input required" value="<?php echo $name[1][3]; ?>"></td>                                         
                                                                                                       
                                    </tr>            
                                    <tr>

     
                                         <td><input type = 'text' name='name21' class="input required" value="<?php echo $name[2][0]; ?>" ></td>  

                                        <td><input type = 'text' name='name22'  class="input required" value="<?php echo $name[2][1]; ?>"></td>    

                                        <td><select name="name23" class="required">
                                        <option <?php  if($name[2][2]=='父子') {?>   selected="selected"    <?php }?>>父子 </option>

                                        <option <?php  if($name[2][2]=='母子') {?>   selected="selected"    <?php }?>>母子</option>
                                        
                                        <option <?php  if($name[2][2]=='父女') {?>   selected="selected"    <?php }?>>父女</option>
                                        
                                        <option <?php  if($name[2][2]=='母女') {?>   selected="selected"    <?php }?>>母女</option>  
                                        
                                        <option <?php  if($name[2][2]=='兄弟') {?>   selected="selected"    <?php }?>>兄弟</option>
                                        
                                        <option <?php  if($name[2][2]=='姐妹') {?>   selected="selected"    <?php }?>>姐妹</option>
                                        
                                        <option <?php  if($name[2][2]=='兄妹') {?>   selected="selected"    <?php }?>>兄妹</option>
                                        
                                        <option <?php  if($name[2][2]=='姐弟') {?>   selected="selected"    <?php }?>>姐弟</option>                                                                          
                                        </select></td>

                                        <td><input type = 'text' name='name24' class="input required" value="<?php echo $name[2][3]; ?>"></td>                                                                 
                                    </tr>
                                    <tr>

                                        <td><input type = 'text' name='name31'  value="<?php echo $name[3][0]; ?>"></td>  

                                        <td><input type = 'text' name='name32'   value="<?php echo $name[3][1]; ?>"></td>    

                                        <td><select name="name33" >
                                        <option <?php  if($name[3][2]=='父子') {?>   selected="selected"    <?php }?>>父子 </option>

                                        <option <?php  if($name[3][2]=='母子') {?>   selected="selected"    <?php }?>>母子</option>
                                        
                                        <option <?php  if($name[3][2]=='父女') {?>   selected="selected"    <?php }?>>父女</option>
                                        
                                        <option <?php  if($name[3][2]=='母女') {?>   selected="selected"    <?php }?>>母女</option>  
                                        
                                        <option <?php  if($name[3][2]=='兄弟') {?>   selected="selected"    <?php }?>>兄弟</option>
                                        
                                        <option <?php  if($name[3][2]=='姐妹') {?>   selected="selected"    <?php }?>>姐妹</option>
                                        
                                        <option <?php  if($name[3][2]=='兄妹') {?>   selected="selected"    <?php }?>>兄妹</option>
                                        
                                        <option <?php  if($name[3][2]=='姐弟') {?>   selected="selected"    <?php }?>>姐弟</option>                                                                             
                                        </select></td>

                                        <td><input type = 'text' name='name34'  value="<?php echo $name[3][3]; ?>"></td>                                       </tr>
                                    <tr>

    
                                        <td><input type = 'text' name='name41'  value="<?php echo $name[4][0]; ?>" ></td>  

                                        <td><input type = 'text' name='name42'  value="<?php echo $name[4][1]; ?>"></td>    

                                        <td><select name="name43">
                                        <option <?php  if($name[4][2]=='父子') {?>   selected="selected"    <?php }?>>父子 </option>

                                        <option <?php  if($name[4][2]=='母子') {?>   selected="selected"    <?php }?>>母子</option>
                                        
                                        <option <?php  if($name[4][2]=='父女') {?>   selected="selected"    <?php }?>>父女</option>
                                        
                                        <option <?php  if($name[4][2]=='母女') {?>   selected="selected"    <?php }?>>母女</option>  
                                        
                                        <option <?php  if($name[4][2]=='兄弟') {?>   selected="selected"    <?php }?>>兄弟</option>
                                        
                                        <option <?php  if($name[4][2]=='姐妹') {?>   selected="selected"    <?php }?>>姐妹</option>
                                        
                                        <option <?php  if($name[4][2]=='兄妹') {?>   selected="selected"    <?php }?>>兄妹</option>
                                        
                                        <option <?php  if($name[4][2]=='姐弟') {?>   selected="selected"    <?php }?>>姐弟</option>                                                                          
                                        </select></td>

                                        <td><input type = 'text' name='name44'  value="<?php echo $name[4][3]; ?>"></td>                                       </tr>  
                                    <tr>

    
                                          <td><input type = 'text' name='name51' value="<?php echo $name[5][0]; ?>" ></td>  

                                        <td><input type = 'text' name='name52'   value="<?php echo $name[5][1]; ?>"></td>    

                                        <td><select name="name53">
                                        <option <?php  if($name[5][2]=='父子') {?>   selected="selected"    <?php }?>>父子 </option>

                                        <option <?php  if($name[5][2]=='母子') {?>   selected="selected"    <?php }?>>母子</option>
                                        
                                        <option <?php  if($name[5][2]=='父女') {?>   selected="selected"    <?php }?>>父女</option>
                                        
                                        <option <?php  if($name[5][2]=='母女') {?>   selected="selected"    <?php }?>>母女</option>  
                                        
                                        <option <?php  if($name[5][2]=='兄弟') {?>   selected="selected"    <?php }?>>兄弟</option>
                                        
                                        <option <?php  if($name[5][2]=='姐妹') {?>   selected="selected"    <?php }?>>姐妹</option>
                                        
                                        <option <?php  if($name[5][2]=='兄妹') {?>   selected="selected"    <?php }?>>兄妹</option>
                                        
                                        <option <?php  if($name[5][2]=='姐弟') {?>   selected="selected"    <?php }?>>姐弟</option>                                                                        
                                        </select></td>

                                        <td><input type = 'text' name='name54'  value="<?php echo $name[5][3]; ?>"></td>                
                                    </tr>  
                                    <tr>                                 
                                       	<td><input type="submit" value="保存修改"  >  </td>                               
                                        <td> <input type="reset" value="取消"  >   </td>
                                    </tr>   
                                        </table>                                                                                                        
                                   </form>
                        </div>
                    </div> 
                   	 <form  action="apply2.php">               
                     <input type="submit" value="下一步"  class="apply" >
    				</form>
                </div>
        	</div>
       </div>
        <!--content 结束-->
        
        <!--footer 开始-->
         <?php
		     include("php/common_foot.php");
			 
          ?>
        <!--footer 结束-->
        
    </div>
    <?php }?>
</body>
</html>
