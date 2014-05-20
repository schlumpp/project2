<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
              
              <?php
              $messid=$_REQUEST["mid"];
              include("config.php");
              include("conn.php");
              $sql="select * from move where mno='".$messid."'";
              $rs=mysql_query($sql);
              $row=mysql_fetch_array($rs);
              ?>
          <div id="content">
			 <?php	                   
              if($row==null)
              {
              print("<script>");
              print("alert('内容不存在！');");
              print("window.history.back(-1);");
              print("</script>");	
              }
              else
              {
                  print("<table border='border' align='center'>");
                  print("<tr>");	
                  print("<th>".$row['mname']."</th>");
                  print("</tr>");	
                  print("<tr>");	
                  print("<th>".$row['mcontent']."</th>");
                  print("</tr>");	
                  print("</table>");
                  
              }
          	?>
              </div>
</body>
</html>