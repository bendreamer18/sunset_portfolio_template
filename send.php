<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Thank you!</title>
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
		<div id="default_text"><b><?php echo $name; ?></b>, thank you for your message, I'll answer you as soon as possible.<br><br><br><a href="index.php" target="_self">~ Go back to the Home Page ~</a></div>
		<div id="photo">
			<div id="border"></div>
			<img src="images/sun.png"></div>
		</div>
	</body>
	</html>