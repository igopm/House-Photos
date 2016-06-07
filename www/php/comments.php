<?  
session_start();
include ("db.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "">
<html xml:lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>коментарии</title>

<link rel="shortcut icon" href="../logo.png" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="../css/screen.css"/>



<script type='text/javascript' src='../js/jquery-1.7.2.min.js'></script>
<script type='text/javascript' src="../js/scrollup.js"></script>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.validationengine.js"></script>
<script type="text/javascript" src="../js/housePhotos.js"></script>

</head>

<body>
 <div id="leng">
             <ul class="leng">
			   <a href="../en/php/comments.php"><img src="../en/en-icon.png" alt="en logo"></a>
			   <a href="comments.php"><img src="../../ru-icon.png" alt="ru logo"></a>
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
    <td><? $com='1'; //Р С‘Р Т‘Р ВµР Р…РЎвЂљР С‘РЎвЂћР С‘Р С”Р В°РЎвЂљР С•РЎР‚ $com=Р С—Р ВµРЎР‚Р ВµР СР ВµР Р…Р Р…Р В°РЎРЏ; Р Р…Р В°Р С—РЎР‚Р С‘Р СР ВµРЎР‚ id РЎвЂљР ВµР СРЎвЂ№ $com=$news_id; Р СР С•Р В¶Р Р…Р С• Р С‘РЎРѓР С—Р С•Р В»РЎРЉР В·Р С•Р Р†Р В°РЎвЂљРЎРЉ Р В»Р В°РЎвЂљ. Р В±РЎС“Р С”Р Р†РЎвЂ№ Р Р…Р В°Р С—РЎР‚Р С‘Р СР ВµРЎР‚ nov_11
include("basicTable.php");  ?></td>
  </tr>

</table>


<!-- Р СњР С‘Р В· -->

<div id="footer">&copy; House Photos 2016 <br>Created by - Igor Mashchykevych</div>
 <div id="scrollup"><img alt="Р СџРЎР‚Р С•Р С”РЎР‚РЎС“РЎвЂљР С‘РЎвЂљРЎРЉ Р Р†Р Р†Р ВµРЎР‚РЎвЂ¦" src="../png_1.png"></div>

</body>
</html>