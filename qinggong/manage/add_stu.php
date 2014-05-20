<?php
/*******************************************************
*陈敏清
*资料上传
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>资料上传</title>
	<link href="images/style.css" rel="stylesheet" type="text/css" />	
<style>table td{ font:14px; font-weight:bold; border:none; }		
body {
	background:#FFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;

	}</style>
</head>
<body>

	 <div id="widget table-widget">
    <div class="pageTitle">资料上传</div>
    <div class="pageColumn">
      <div class="pageButton">
	<table>
        <thead>

          <th width="">学号</th>
          <th width=""> 姓名 </th>
          <th width="">班级</th>
          <th width="10%">操作</th>
         </thead>
        <tbody>
        
           
        			  <tr>
                      		<form  name= "addstu" action="del_add.php" method="post">
        
     						<td><input type="text" name="sno" >　</td>
     						<td><input type="text" name="sname" >　</td>		
      						<td><input type="text" name="sclass" >　</td>
       						<td><img src="images/icon/save.png" onClick="document.addstu.submit()" >　</td>
                            </form>                           		                           				
					  </tr>     
        
        
        
        
        			  <tr>
        
     						<td colspan="7" class="checkBox">添加学生　</td>
						
					  </tr>

          </form>
        </tbody>
      </table>   
        
        
        </div>
    </div>
  </div><!-- #widget -->

</body>
</html>