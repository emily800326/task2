<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
<title>科學探索城市</title>


<link rel="stylesheet" href="./css/style.css" type="text/css" charset="utf-8" />
<link type="text/css" href="./css/interfacestyle.css" rel="stylesheet"  />
<script type="text/javascript" src="./js/pic.js"></script>
<script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="./js/interface.js"></script>

</head>

<body>

<?php

include('top.php');

?>

<wrapper onload="MM_preloadImages('./img/gym2.png','./img/friend2.png','./img/task2.png','./img/shop2.png','./img/race2.png')">


  <div id="wrapper">
    <div id="postion">
      <div id="gym"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('gym','','./img/gym2.png',1)"><img src="./img/gym.png" alt="gym" name="gym" width="201" height="175" id="gym" align="left" /></a></div>
      <div id="friend"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('friend','','./img/friend2.png',1)"><img src="./img/friend.png" alt="friend" name="friend" width="208" height="181" id="friend2" align="right" /></a></div>
      <div id="task"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('task','','./img/task2.png',1)"><img src="./img/task.png" alt="task" name="task" width="357" height="309" id="task" align="absmiddle" /></a></div>
      <div id="shop"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('shop','','./img/shop2.png',1)"><img src="./img/shop.png" alt="shop" name="shop" width="208" height="181" id="shop" align="left" /></a></div>
      <div id="rank"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('rank','','./img/race2.png',1)"><img src="./img/race.png" alt="rank" name="rank" width="200" height="177" id="rank2" align="right" /></a></div>
	  <div id="news"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('news','','./img/news2.png',1)"><img src="./img/news.png" alt="news" name="news" width="200" height="177" id="news2" align="right" /></a></div>

    </div>
 </div>


 <?php

include('footer.php');

?>


</body>


</html>