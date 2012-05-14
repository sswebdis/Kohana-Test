{foreach from=$comments item="comment"}

<strong>Имя пользователя:</strong><br />
{$comment.name}<br />
<strong>Комментарий пользователя:</strong><br />
	{$comment.comment}
<br /><hr /><br />

{/foreach}