<? session_start();
#	....................... ..........................................................
#
#		Скрипт:	skycom, версия: 1.0
#		Автор:	Sky (http://skystudio.ru http://skyscript.ru)
#
#	.................................................................................
include ("db.php"); 
unset($prava);

//выход
if (isset($_GET['logout']))
{	if (isset($_SESSION['ses_user'])) { unset($_SESSION['ses_user']); }
	if (isset($_SESSION['pass'])) { unset($_SESSION['pass']); }
	setcookie('user_id', '', 0, "/");
	setcookie('user_pass', '', 0, "/");
	header('Location: admin.php');
	exit;
}

//вход
if (!empty($_POST) && $act=="login")
{	$user_email = (isset($_POST['user_email'])) ? mysql_real_escape_string($_POST['user_email']) : '';
	$user_email =  trim($user_email);
	$user_pass = (isset($_POST['user_pass'])) ? mysql_real_escape_string($_POST['user_pass']) : '';
	$skybaselogin = mysql_query("SELECT `user_sol` FROM `skyusers` WHERE `user_email`='{$user_email}' LIMIT 1",$db) or die(mysql_error());
	if (mysql_num_rows($skybaselogin) == 1)
	{
		$skyrowlogin = mysql_fetch_assoc($skybaselogin);
		$user_sol = $skyrowlogin['user_sol'];
		$user_pass = md5(md5($_POST['user_pass']) . $user_sol);
		$skybaselogin = mysql_query("SELECT `user_id`,`user_login`,`user_pass`,`user_prava` FROM `skyusers` 
									WHERE `user_email`='{$user_email}' 
						   			AND `user_pass`='{$user_pass}' LIMIT 1",$db) or die(mysql_error());
		if (mysql_num_rows($skybaselogin) == 1)
		{
			$skyrowlogin = mysql_fetch_assoc($skybaselogin);
			$_SESSION['ses_user'] = $skyrowlogin['user_id'];
			$_SESSION['pass'] = $skyrowlogin['user_pass'];
			$name =  $skyrowlogin['user_login'];
			$prava = $skyrowlogin['user_prava'];
			if (isset($_POST['zapomnit']))
			{	$time = 12960000;
				setcookie('user_id', $skyrowlogin['user_id'], time()+$time, "/");
				setcookie('user_pass', $user_pass, time()+$time, "/");
			}
		if (isset ($cat_id) && !empty($cat_id)) {$act = "cat";}
		else {unset($act);}
		if (isset ($acton) && !empty($acton)) {$act = "pod";}
		}
		else { $oshibka = "Пароль для данного электронного адреса не верен"; }
	}
	else { $oshibka = "Пользователь с таким электронным адресом не найден"; }
}

//вход, если запомнили
if (isset($_COOKIE['user_id']) && isset($_COOKIE['user_pass']))
	{	$_SESSION['ses_user'] = $_COOKIE['user_id'];
		$_SESSION['pass'] = $_COOKIE['user_pass'];
	}
	
//проверка
if (isset($_SESSION['ses_user']) && isset($_SESSION['pass']))
	{
	$ses_user = (isset($_SESSION['ses_user'])) ? mysql_real_escape_string($_SESSION['ses_user']) : '';
	$pass = (isset($_SESSION['pass'])) ? mysql_real_escape_string($_SESSION['pass']) : '';
	$skybase = mysql_query("SELECT `user_id`,`user_login`,`user_pass`,`user_prava`,`user_email`
	FROM `skyusers` WHERE `user_pass`='{$pass}' AND `user_id`='{$ses_user}' LIMIT 1",$db) or die(mysql_error());
		if (mysql_num_rows($skybase) == 1)
		{	$skyrow = mysql_fetch_array($skybase);
			$prava = $skyrow['user_prava'];
			$name =  $skyrow['user_login'];
			$user_email = $skyrow['user_email'];
		}
		else 
		{ 	$prava = 0;
			if (isset($_SESSION['ses_user'])) { unset($_SESSION['ses_user']); }
			if (isset($_SESSION['pass'])) { unset($_SESSION['pass']); }
			setcookie('user_id', '', 0, "/");
			setcookie('user_pass', '', 0, "/");
			header('Location: admin.php');
			exit(); 
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "">
<html xml:lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>comments — administrator</title>

<link rel="shortcut icon" href="../logo.png" type="image/x-icon">
<link href="../css/st.css" rel="stylesheet" type="text/css">

<link href="../css/screen.css" rel="stylesheet" type="text/css">


<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../js/jquery.validationengine.js" type="text/javascript"></script>
</head>
<body>

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
<!-- Верх -->

<? if ($prava==5) { ?>
<!-- Верхнее меню-->
<table style='margin-top:25px;' align='center' width='650' border='0' cellspacing='0' cellpadding='0'>
<tr>
    <td style='border-bottom:1px solid #cccccc;' valign='middle' align="left" height="37">
  
  	<!-- КНОПКИ -->
    
    <a href="?mod=nas"  class="nav">настройки</a>
    <a href="../index.php" target="_blank" class="nav">на сайт</a>
    
	<!-- Завершение КНОПКИ -->


    
    </td>
    <td align="right" style='border-bottom:1px solid #cccccc; padding-right:10px;'><span class="zag"><? echo $name; ?> </span></td>
    <td width="80" style='border-bottom:1px solid #cccccc;' align="right"><a class="nav" href="?logout" title="Выйти">выйти</a>   
    </td>
</tr>
</table>
<!-- Завершение Верхнее меню-->

<?
if (isset($oshibka)) { echo '<br />'.$oshibka; }
if (isset($ok)) { echo '<br />'.$ok; }
?>

<!-- Основная таблица -->
<table width="650" border="0" cellspacing="3" cellpadding="0" align="center" style="margin-top:15px;">
  <tr>
  <td valign="top" width="260">

 </td>
    <td valign="top">
<!-- Рабочий блок -->  

<?
//настройки
if ($mod=='nas' || empty($mod))
	{
	//общие
	if ($act == "rednas")
	{
	if (isset($_POST['user_pass']) && !empty($_POST['user_pass'])) 
	{ $user_pass = globper('user_pass'); 
				function usersol($n=3)
				{	$key = '';
					$pattern = '1234567890abcdefghijklmnopqrstuvwxyz.,*_-=+';
					$counter = strlen($pattern)-1;
					for($i=0; $i<$n; $i++)
					{ $key .= $pattern{rand(0,$counter)}; }
					return $key;
				}
				$user_sol = usersol();
				$newpass = $user_pass;
				$code_pass = md5(md5($newpass) . $user_sol);
				$newpass=",`user_pass`='{$code_pass}',`user_sol`='{$user_sol}'";
				$_SESSION['pass'] = $code_pass;
		}
	else { $newpass=""; }
	$user_email = globper('user_email'); 
	if (empty($user_email)) { al("обязательно введите адрес электронной почты"); }
	else
		{ 
	$skybase = mysql_query("UPDATE `skyusers` SET `user_email`='{$user_email}'".$newpass." WHERE `user_id`='{$_SESSION['ses_user']}'",$db) or die(mysql_error());
		echo '<div class="ok">изменения внесены</div>'; 
		}
	}
	
	//комментарии
	if ($act == "rednascom")
	{
		$com_width = globper('com_width'); $com_dlina = globper('com_dlina'); $com_str = globper('com_str'); 
		if (empty($com_width) || empty($com_dlina) || empty($com_str)) { al("обязательно введите все значения"); }
		else {
			$skybasenastr = mysql_query("SELECT `nas_par`,`nas_znach` FROM `skynas`",$db) or die(mysql_error());
			$skyrownastr = mysql_fetch_array($skybasenastr);
			
			do {
				if (!empty($$skyrownastr['nas_par']))
				{ $skybase = mysql_query("UPDATE `skynas` SET `nas_znach`='{$$skyrownastr['nas_par']}'
			WHERE `nas_par`='{$skyrownastr['nas_par']}'",$db) or die(mysql_error()); }
				}
			while ($skyrownastr = mysql_fetch_array($skybasenastr));
			echo '<div class="ok">изменения внесены</div>';
			}
	}
	
	
	
	echo'<div class="zag" style="margin:0 0 5px 0;">Настройки</div>';

	$skybase = mysql_query("SELECT `user_email`
	FROM `skyusers` WHERE `user_id`='{$_SESSION['ses_user']}' LIMIT 1",$db) or die(mysql_error());
	$skyrow = mysql_fetch_array($skybase); ?>
    
<fieldset class="nas">
<legend class="ser"> Общие настройки </legend>
<form action="admin.php" method="post">
<table border="0" width="100%" class="tbl" cellpadding="4" cellspacing="0">
<tr><td width="150">E-mail для входа<br />
<span class="sm2">он же системный</span></td><td><input  class="validate[required,length[0,200]] text-input" style="width:275px" name="user_email" value="<? echo $skyrow['user_email'] ?>" type="text" /></td><td width="100"></td></tr>
<tr><td>Пароль<br />
<span class="sm2">можете ввести и поменять</span></td><td><input style="width:275px" name="user_pass" type="text" /></td><td width="100">
<input type="hidden" name="mod" value="nas" />
<input type="hidden" name="act" value="rednas" />
<input style="width:100px; cursor:pointer;" type="submit" value="Изменить" /></td></tr>
</table></form>
</fieldset> 


<fieldset class="nas">
<legend class="ser"> Комментарии </legend>
<form action="admin.php" method="post">
<table border="0" width="100%" class="tbl" cellpadding="4" cellspacing="0">

<tr><td width="150">Ширина комментария<br /><span class="sm2">начальная в пикселях</span></td><td>
<input  class="validate[required,length[0,5]] text-input" style="width:275px" name="com_width" value="<? echo $com_width; ?>" type="text" /></td><td width="100">
</td></tr>

<tr><td width="150">Максимальная длина<br /><span class="sm2">количество символов</span></td><td>
<input  class="validate[required,length[0,7]] text-input" style="width:275px" name="com_dlina" value="<? echo $com_dlina; ?>" type="text" /></td><td width="100">
</td></tr>

<tr><td width="150">Комментариев на стр<br /><span class="sm2">основных (1-го уровня)</span></td><td>
<input  class="validate[required,length[0,3]] text-input" style="width:275px" name="com_str" value="<? echo $com_str; ?>" type="text" /></td><td width="100">
<input type="hidden" name="mod" value="nas" />
<input type="hidden" name="act" value="rednascom" /> 
<input style="width:100px; cursor:pointer;" name="" type="submit" value="Изменить" />
</td></tr>

</table></form>
</fieldset> 


<? } ?>

<!-- Завершение Рабочий блок -->   
    </td>
  </tr>
</table>
<!-- Завершение Основной таблицы -->

<? } else { ?>
<center>
<? if(isset($oshibka)) { echo '<center><div class="alert">'.$oshibka.'</div></center>'; } ?>
<div>
<form action="admin.php" method="post">
	<table border="0" style="margin-left:15px; margin:20px 0 50px 0;" cellpadding="4">
		<tr>
			<td align="right" width="100">Логин (e-mail)</td>
			<td height="35" style="padding-left:15px;">
            <input class="validate[required,length[0,200]] text-input" title="Введите логин" name="user_email" type="text" size="23" /></td>
		</tr>
		<tr>
			<td align="right">Пароль</td>
			<td height="35" style="padding-left:15px;">
            <input class="validate[required,length[0,200]] text-input" name="user_pass" type="password" size="23" />
            </td>
		</tr>
		<tr>
			<td align="right">Запомнить</td>
			<td height="35" style="padding-left:15px;">
            <input type="checkbox" name="zapomnit" />
            <input type="hidden" name="act" value="login">
            <input class="menuinp" style="width:100px; margin-left:53px; cursor:pointer;" type="submit" value="Войти" />
			</td>
		</tr>
	</table> 
</form>  
<span class="sm2">По умолчанию: Логин: email@email.ru  Пароль: 12345</span><br />
<br />
<br />
<br />
</div>
<?
//	function usersol($n=3)
//	{	$key = '';
//		$pattern = '1234567890abcdefghijklmnopqrstuvwxyz.,*_-=+';
//		$counter = strlen($pattern)-1;
//		for($i=0; $i<$n; $i++)
//		{ $key .= $pattern{rand(0,$counter)}; }
//		return $key;
//	}
//	$user_sol = usersol();
//	$newpass = usersol(7);
//	$code_pass = md5(md5($newpass) . $user_sol);
//	echo '<br /> Соль: '.$user_sol;
//	echo '<br /> Пароль: '.$newpass;
//	echo '<br /> Код: '.$code_pass;
?> 
</center>
<? } ?>

<!-- Низ
#	....................... ..........................................................
#
#		Автор:	Sky (http://skystudio.ru http://skyscript.ru)
#
#	.................................................................................
-->

<!-- Низ -->
<div id="footer">&copy; House Photos 2016 <br>Created by - Igor Mashchykevych</div>
</body>
</html>