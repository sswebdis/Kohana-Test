{foreach from=$comments item="comment"}

<strong>Имя пользователя:</strong><br />
{HTML::chars($comment.user)}<br />
<strong>Комментарий пользователя:</strong><br />
	{HTML::chars($comment.message)}
<br /><hr /><br />

{/foreach}
{*<?php foreach($comments as $comment): ?>*}

{*<div style="padding:10px; margin-bottom:10px; border-bottom:#999 1px dashed;">*}
	{*<strong><?php echo HTML::chars($comment['user']); ?></strong><br />*}
	{*<?php echo HTML::chars($comment['message']); ?>*}
{*</div>*}

{*<?php endforeach; ?>*}
{if isset($alert)}
<h3>{$alert}</h3>
{/if}
<div style="padding:10px;">
	<form action="" method="post">
		Ваше имя: <br />
		<input name="user" type="text" /><br /><br />
		Сообщение: <br />
		<textarea name="message" cols="25" rows="5"></textarea><br /><br />
		Капча: <br />
		<input name="captcha" type="text" /><br /><br />
		<input name="send" type="submit" value="Отправить" />
	</form>
	{$captcha}
</div>