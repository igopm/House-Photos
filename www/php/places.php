<?  
session_start();
include ("db.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "">
<html xml:lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<title>Места для фотосессий</title>

<link rel="shortcut icon" href="../logo.png" type="image/x-icon">

<link href="../css/screen.css" rel="stylesheet" type="text/css"/>

<script type='text/javascript' src='../js/jquery-1.7.2.min.js'></script>
<script type='text/javascript' src="../js/scrollup.js"></script>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.validationengine.js"></script>
<script type="text/javascript" src="../js/housePhotos.js"></script>

</head>

<body>
<div id="leng">
             <ul class="leng">
			   <a href="../en/php/places.php"><img src="../../en/en-icon.png" alt="en logo"></a>
			   <a href="places.php"><img src="../../ru-icon.png" alt="ru logo"></a>
            </ul>
   </div>
<div id="admin">
<a href="admin.php">Инструменты управления</a> 
</div>

<div id="header">
      <nav id="head">
            <ul>
               <li><a href="../index.php"title="главная">главная</a></li>
               <li><a href="../subfolder/photogallery.html"title="фотогалерея">фотогалерея</a></li>
               <li><a href="comments.php"title="коментарии">коментарии</a></li>
               <li><a href="../subfolder/about.html"title="О нас">О нас</a></li>
            </ul>
         </nav>
      </div>
	   <nav id="head2">
            <ul>
               <li><a href="comments.php"title="reviews">Отзывы</a></li>
               <li><a href="places.php"title="places">Места для фотосессий</a></li>
            </ul>
         </nav>
		

<table id="basicTable">
  <tr>
    <td><? $com='2'; //идентификатор $com=переменная; например id темы $com=$news_id; можно использовать лат. буквы например nov_11
include("basicTable.php");  ?></td>
  </tr>

</table>


<!-- Низ -->

<div id="footer">&copy; House Photos 2016 <br>Created by - Igor Mashchykevych</div>
 <div id="scrollup"><img alt="Прокрутить вверх" src="../png_1.png"></div>

</body>
</html>