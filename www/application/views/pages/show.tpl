<h3>Это главная страница</h3>
<br />

{foreach from=$articles item="article"}

<div style="padding:10px; margin-bottom:10px; border-bottom:#333 2px solid;">
	<strong>{$article.title}</strong><br />
	<i>Автор: {$article.author}</i> /
	<i>Дата публикации: {$article.date}</i><br /><br />
	<p>{$article.content_short}</p>
	<p style="text-align:right; text-decoration:underline;">
		<a href="{URL::site("articles/{$article.id}-{$article.alt_title}")}">Подробнее</a>
	</p>
</div>

{/foreach}