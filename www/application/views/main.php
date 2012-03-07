<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>" />
	<?php foreach($styles as $style): ?>
	<link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css"
		  rel="stylesheet" type="text/css" />
	<?php endforeach; ?>

</head>

<body>
<div class="layer">
	<div class="container">
		<div class="header"><h1>Логотип</h1></div>

		<div class="left">
			<h3>Меню</h3>
			<br />
			<ul>
				<li><a href="<?php echo URL::site(); ?>">Главная</a></li>
				<li><a href="<?php echo URL::site('about'); ?>">О сайте</a></li>
				<li><a href="<?php echo URL::site('articles'); ?>">Статьи</a></li>
				<li><a href="<?php echo URL::site('contacts'); ?>">Мои контакты</a></li>
			</ul>
		</div>
		<div class="content"><?php echo $content; ?></div>

		<div class="clearing"></div>
		<div class="footer">2012 Все права защищены</div>
	</div>
</div>
</body>
</html>