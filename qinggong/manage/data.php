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
    <div class="pageTitle">基本信息更新</div>
    <div class="pageColumn">
      <div class="pageButton">
	<table>
        <thead>

          <th width="">文件名称</th>
          <th width=""> 上传文件 </th>
          <th width="10%">操作</th>
         </thead>
        <tbody>
        
           
        			  <tr>
          <form action="deal_data.php" method="post" enctype="multipart/form-data">
        
     						<td><input type="text" size="30" name="filename" />　</td>
     						<td><input type="file" name="file" /></td>		
       						<td><input type="submit" value="上传" />　</td>
                            </form>                           		                           				
					  </tr>     
        
        
        
        
        			  <tr>
        
     						<td colspan="7" class="checkBox">注意事项：上传文件大小不得超过10M　</td>
						
					  </tr>

          </form>
        </tbody>
      </table>   
        
        
        </div>
    </div>
  </div><!-- #widget -->

</body>
</html>