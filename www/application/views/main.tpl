<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{$title}</title>
	<meta name="description" content="{$description}" />
	{foreach from=$styles item="style"}
	<link href="{URL::base()}public/css/{$style}.css"
		  rel="stylesheet" type="text/css" />
	{/foreach}
</head>

<body>
<div class="layer">
	<div class="container">
		<div class="header"><h1>Логотип</h1></div>

		<div class="left">
			<h3>Меню</h3>
			<br />
			<ul>
				<li><a href="{URL::site()}">Главная</a></li>
				<li><a href="{URL::site('about')}">О сайте</a></li>
				<li><a href="{URL::site('articles')}">Статьи</a></li>
				<li><a href="{URL::site('contacts')}">Мои контакты</a></li>
			</ul>
		</div>
		<div class="content">{$content}</div>

		<div class="clearing"></div>
		<div class="footer">2012 Все права защищены</div>
	</div>
</div>
</body>
</html>