<?php
	$name = 'Artem';
    $surname = ' Borovlev';
	$email = 'borovlev93@gmail';
	$telNumber = '+380999087402';
	$age = '23';
	$education = 'KPI';
	$skill1 = 'CSS and HTML';
	$skill2 = 'PHP';
?>

<!DOCTYPE html>
<html>
 <head>
   	<title>CV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  	<h1><?=$name ?><?=$surname ?></h1>
	<div class="img">
	 <p><a href="https://vk.com"><img src="http://logosklad.ru/UserFiles/image/vkontakte/vk_logo_.png" width="50px" height="50px"></a></p>
	</div>
	<div class="main">
	<p>Telephone number: <?=$telNumber ?></p>
	<p>Email: <?=$email ?></p>
	<p>Education: <?=$education ?></p>
	</div>
	<table><h3>Skills:<h3>
	<tr>
	<ul>
		<li>basic knowledge of <?=$skill1 ?> </li>
		<li>basic knowledge of <?=$skill2 ?> </li>
	</ul>
	<tr>
</table>
 </body> 
</html>