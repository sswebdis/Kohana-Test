{if $article}
<div style="padding:10px; margin-bottom:10px; border-bottom:#333 2px solid;">
	<strong>{$article.title}</strong><br />
	<i>Автор: {$article.author}</i> /
	<i>Дата публикации: {$article.date}</i><br /><br />
	<p>{$article.content_full}</p>
</div>
{$comments}
{else}
	<div style="padding:10px; margin-bottom:10px;">
		Статья не найдена или не существует
	</div>
{/if}