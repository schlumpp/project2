<?php
/*******************************************************
*陈敏清
*显示招聘岗位的具体信息
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="images/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/manage.css" media="screen"/>
<title>公告信息</title>
	<style>
	body {
	background:#FFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;

}

	</style>
</head>
<body>
 <div id="widget table-widget">
    <div class="pageTitle">查看岗位信息</div>
    <div class="pageColumn">
      <div class="pageButton">	</div>
	<table>
        <thead>

          <th width="">岗位名称</th>
          <th width=""> 岗位类型 </th>
          <th width="">岗位具体信息</th>
          <th width="">岗位信息发布时间</th>
          <th width="">岗位招聘截止时间</th>
          <th width="10%">操作</th>
         </thead>
        <tbody>
<?php
	include("config.php");
	include("conn.php");
	$sid=$_GET["sid"];
	$sql="select *from work where work_id='".$sid."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	switch($row["work_classify"])
	{
		case 1:$cs="院内岗";break;
		case 2:$cs="校内岗";break;
		case 3:$cs="校外岗";break;
	}
	echo"<tr>";
	echo" <td> ".$row['work_name']."</td> ";
	echo"<td> ".$cs." ";
	echo "<td> ".$row['work_content']."</td>  ";
	echo"<td> ". $row['work_publish']."</td>  ";
	echo"<td> ". $row['work_endtime']."</td>  ";
	echo"<td> 无</td>  ";
	echo"</tr>";
?>
  <tr class=" ">

						<td colspan="7" class="checkBox">岗位详情　</td>
						
					  </tr>

          </form>
        </tbody>
      </table>
	</div>
</div>
</body>
</html>