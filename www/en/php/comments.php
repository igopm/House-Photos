<?  
session_start();
include ("../../php/db.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "">
<html xml:lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>comments</title>
<link rel="shortcut icon" href="../../logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../../css/screen.css"/>
<script type='text/javascript' src='../../js/jquery-1.7.2.min.js'></script>
<script type='text/javascript' src="../../js/scrollup.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery.validationengine.js"></script>
<script type="text/javascript" src="../../js/housePhotos.js"></script>
</head>

<body>
<div id="leng">
             <ul class="leng">
			   <a href="comments.php"><img src="../en-icon.png" alt="en logo"></a>
			   <a href="../../php/comments.php"><img src="../../ru-icon.png" alt="ru logo"></a>
            </ul>
   </div>
<div id="admin">
<a href="../../php/admin.php">Administrative tools</a> 
</div>

 <div id="header">
      <nav id="head">
           <ul>
               <li><a href="../index.php"title="home">home</a></li>
               <li><a href="../subfolder/photogallery.html"title="photogallery">photogallery</a></li>
               <li><a href="comments.php"title="comments">comments</a></li>
               <li><a href="../subfolder/about.html"title="about as">about as</a></li>
            </ul>
         </nav>
      </div>
	  <nav id="head2">
            <ul>
               <li><a href="comments.php"title="reviews">reviews</a></li>
               <li><a href="places.php"title="places">Designated for photo shoots</a></li>
            </ul>
         </nav>
		

<table id="basicTable">
  <tr>
    <td><? $com='1';//идентификатор $com=переменная;
include("../../php/basicTable.php");  ?></td>
  </tr>
</table>

<!-- Низ -->
<div id="footer">&copy; House Photos 2016 <br>Created by - Igor Mashchykevych</div>
 <div id="scrollup"><img alt="up-phg" src="../../png_1.png"></div>
</body>
</html>