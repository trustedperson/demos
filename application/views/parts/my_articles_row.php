<div class="item">
	<a href="article/read/<?= $row['id']?>">
		<?= $row['title'] ?>
	</a>
	<br>
		<?= $row['short_text'] ?>
	<br>
	<a href="article/edit/<?= $row['id'] ?>">
		Редактировать
	</a>

	<?
		if($row['state'] == "draft") 
		{
			$txt = "Опубликовать";
			$action = "restore";
		}
		else
		{
			$txt = "Снять с публикации";
			$action = "close";		
		}
	?>

	<a href="article/<?= $action."/".$row['id'] ?>">
		<?= $txt ?>
	</a>
	<a href="article/destroy/<?= $row['id'] ?>">
		Уничтожить навсегда
	</a>
	<br><br>
</div>