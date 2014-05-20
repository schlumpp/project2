<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传照片</title>
</head>

<body>
 <?php
  $filearray=explode(".",$_FILES["file"]["name"]);
  $today=idate("Y").idate("m").idate("d").idate("H").idate("i").idate("s");
  $filename=$today.".".$filearray[1]; 
  iconv('UTF-8','gb2312',$filename);
  $bool = ($filearray[1] == "png"|| $filearray[1] == "jpg"||$filearray[1] == "JPG"||$filearray[1] == "PNG");
  if (!$bool )
  {
    print("<script>");
    print("alert('您上传的图片格式错误，请重新上传！！');");
  //  print("window.parent.location.href='uploadpic.php'");	
  print("window.top.location='uploadpic.php'");
    print("</script>");
  }


  if (file_exists("images/" .$filename))
  {
    echo $_FILES["file"]["name"] . " already exists. ";
  }

  else
  {
     move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$filename);
     //echo "上传成功" . "images/".$filename;
  }


	
	// 获取图片宽高 
	list($width_orig, $height_orig) = getimagesize("images/".$filename); 
	if($width_orig<300||$height_orig<200)
	{
		unlink("images/".$filename);
		print("<script>");
		print("alert('您上传的照片像素太小，请重新上传！！');");
		//print("window.parent.location.href='uploadpic.php'");	
		print("</script>");
		
	}
	if($width_orig>550||$height_orig>500)
	{
		print("<script>");
		print("alert('您上传的照片像素太大，需要进行剪切！');");
		print("</script>");
		
	}
	// 最大宽高 
	$width = 550; 
	$height =500; 
	if ($width && ($width_orig < $height_orig)) 
	{ //高比宽，宽按比例缩小 
	$width = ($height / $height_orig) * $width_orig; 
	}
	else 
	{ 
	$height = ($width / $width_orig) * $height_orig; 
	} 
	// 改变大小。和上例一样。 
	$image_p = imagecreatetruecolor($width, $height); 
	$type=$filearray[1];


	switch ($type){//判断图像类型
	case 'JPG':
		$image=imagecreatefromjpeg("images/".$filename);
			break; 
	case 'jpg':
		$image=imagecreatefromjpeg("images/".$filename);
		   break; 
	break;
	case 'png':
		$image=imagecreatefrompng("images/".$filename);
 		break; 
	case 'PNG':
		$image=imagecreatefrompng("images/".$filename);
 		break; 
	}

	imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig); 

	switch ($type){//判断图像类型
		case 'JPG':
		imagejpeg($image_p,"images/".$filename);	
			break; 
		case 'jpg':
		imagejpeg($image_p,"images/".$filename);	
			break;
		case 'png':
		imagepng($image_p,"images/".$filename);
			break;  
		case 'PNG':
		imagepng($image_p,"images/".$filename);
			break; 
	}

  session_start();
  $_SESSION["picpath"]="images/".$filename;
  $_SESSION["picname"]=$filename;
  echo "<img src='".$_SESSION["picpath"]."'>";
  ?>

</body>
</html>