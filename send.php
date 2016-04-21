<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="windows-1251">
	<title>Sunset site</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div id="page_align_send">
		<div id="header">
			<div id="author_send"><br><i><b>John R. Doe / Designer & Developer</b></i></div>
		</div>
		<?php

		$name = strip_tags(trim($_POST['name'])) ;

		?>
		<div id="default_text"><b><?php echo $name; ?></b>, спасибо - Ваше сообщение принято. Я отвечу Вам в ближайшее время.<br><br><br><a href="index.php" target="_self">~ Вернуться на сайт ~</a></div>
		<div id="photo">
			<div id="border"></div>
			<img src="images/sun.png"></div>
		</div>
	</body>
	</html>