<?php
/*******************************************************
该php文件是apply3.php 和 applyfor.php页面中间左边导航的公共文件
author 陈烘
time  2013.4.27
********************************************************
*/
?>
<table>
	<form name="searchinfor" action="goods_search.php" method="post">
		<tr>                       
			<td><input type="text" class="text"></input></td>
			<td><input type="image" src="img/search.png" class="about_search" onClick="document.searchinfor.submit()"> </td>
	</form>
		</tr>
</table>     
<ul>
	<li><a href="applyfor.php">申请入库</a></li>
	<li><a href="applysclship.php">励志奖学金申请</a></li>   
	<li><a href="applynation.php">国家助学金申请</a></li> 
	<li><a href="apply3.php">申请结果查看</a></li>                                      
</ul>
<?php include("common_threeImg.php") ?>