<?php foreach($comments as $comment): ?>

<strong>Имя пользователя:</strong><br />
<?php echo $comment['name']; ?><br />
<strong>Комментарий пользователя:</strong><br />
<?php echo $comment['comment']; ?>
<br /><hr /><br />

<?php endforeach; ?>