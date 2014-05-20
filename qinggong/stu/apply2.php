<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<link href="css/page/applyfor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/page/apply1.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/validate-ex.js"></script>
<script type="text/javascript" src="js/page/formtest.js"></script>
<script type="text/javascript">
$(function(){

var selectform4 = $(".define");
test(selectform4);
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
		   include("php/common_header.php");
         ?>
        <!--header 结束-->
        <!--content 开始-->
        <div class="content">
        	<div class="content_resize">
                <div class="step">
                <ul>
                	<li class="step2"><a href="apply1.php">第一步：完善基本信息</a></li>
                    <li class="step1"><a href="apply2.php">第二步：选择困难等级</a></li>
                    <li class="step2"><a href="apply3.php">第三步：申请入库完成</a></li>                
                </ul>
                </div>
        		
                <div class="message">
                     <form action="php/apply/deal_apply2.php" method="post" class="define">
                      <div class="mess">
                    	<h3>困难等级<span ></span></h3>
                        <div class="mess_detial" >
                            <div class="tab_top">
                                 <ul>
                                      <li class="orden_poor"><a>一般困难</a></li>         
                                      <li class="poor"><a>困难</a></li> 
                                      <li class="special_poor"><a>特别困难</a></li> 
                                 </ul>
                             </div>
                             <div class="tab_detial">
                               
                                    <ul >
                                        <li><input type="radio" name="apply_grade" value="1" class="required" >单亲，且直系亲属无固定收入 </li>
                                        
                                        <li><input type="radio"  name="apply_grade" value="2" class="required" > 父母一方或双方下岗，家庭年收入在5000元以上、7000元（含）以下</li>
                                        
                                        <li><input type="radio"  name="apply_grade" value="3" class="required" > 父母中有一方常年卧病，需长期治疗 </li>
                                        
                                        <li><input type="radio"  name="apply_grade" value="4" class="required" >发生其他异常变故或不可抗力致使家庭经济临时困难  </li>
                                        
                                        <li><input type="radio"  name="apply_grade" value="5" class="required" >发生其他异常变故或不可抗力致使家庭经济临时困难  </li>            
                                    </ul>

                                    <ul >
                                        <li><input type="radio"  name="apply_grade" value="6" class="required" >孤儿，其亲属有一定的资助能力，但不足以支付学杂费用</li>
                                        <li><input type="radio"  name="apply_grade" value="7"  class="required"> 父母一方或双方失业且残疾、年迈等原因导致收入微薄，家庭年收入在3500元以上，5000元（含）以下</li>
                                        <li><input type="radio"  name="apply_grade" value="8"  class="required"> 父母中有一方常年卧病，需长期治疗，且另一方无经济收入或收入微薄，不足以支付学杂费用的</li>
                                        <li><input type="radio"  name="apply_grade" value="9"  class="required">家庭属一般困难，且其家中有两个或两个以上兄弟姐妹同时在校就读（不违反国家计划生育法的） </li>
                                        <li><input type="radio"  name="apply_grade" value="10"  class="required">家庭属一般困难，因发生其他异常变故或不可抗力致使家庭特别困难，短期内造成巨大债务  </li>            
                                    </ul> 

                                    <ul >
                                        <li><input type="radio"  name="apply_grade" value="11"  class="required">孤儿、且其亲属无资助能力的 </li>
                                        <li><input type="radio"  name="apply_grade" value="12"  class="required"> 父母双方年迈体弱，或因不可抗力丧失劳动能力的</li>
                                        <li><input type="radio"  name="apply_grade" value="13"  class="required"> 家庭所在地区属于贫困山区且当年遭受严重自然灾害或来自国家确定的老、少、边、穷地区，本人家庭无经济收入或收入微薄，不足以支付学杂费用的</li>
                                        <li><input type="radio"  name="apply_grade" value="14"  class="required">属于生源地所在地的低保家庭、烈士家庭、由社会福利机构监护（可视实际情况而定）和列入农村五保户家庭子女 </li>
                                        <li><input type="radio"  name="apply_grade" value="15"  class="required">持有学生生源地地方民政部门所发放的《特困家庭证明》或《最低生活保障救助证》的学生 </li>                                    	
                                    </ul>       
                                              
                             </div>
                       </div>
                    </div>
                   <div class="mess">
                    	<h3>家庭情况说明<span ></span></h3>
                        <div class="mess_detial" >
							 <textarea name="family_intro"  class="fontintro" cols="300"  rows="15"></textarea>
                        </div>
                   </div>
           
                     <input type="submit" value="提交申请"  class="apply" >
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
</body>
</html>
