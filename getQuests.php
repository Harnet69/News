<?
$arr = $Quests->getQuest();

	foreach ($arr as $item){
		$id = $item['id'];
		$name = $item['name'];
		$email = $item['email'];
		$quest = $item['quest'];
		$datetime = $item['datetime'];
		
	echo "<hr>
			<p>Пользователь : $name</p>
			<p>Отзыв : $quest</p>
			<p>Почта : $email</p>
			<p>Время : $datetime</p>
			<p align='right'><a href='index.php?del=$id'>Удалить</a></p><hr>";			
}
?>