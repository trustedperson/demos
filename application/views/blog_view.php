<!-- <a class="content_button" href="/todo" data-section="todo">todo app</a> -->
<!-- <a class="content_button" href="/main" data-section="wordpress">WP</a> -->
<?
while($row = $data->fetch())
	{
		echo "<a href='blog/article/".$row['id']."'>".$row['title']."<a/>"."<br>";
		echo $row['short_text'];
	}
?>