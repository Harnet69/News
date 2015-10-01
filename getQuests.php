<?
$arr = $Quests->getQuest();
	foreach ($arr as $item){
		$id = $item['id'];
		$name = $item['name'];
		$email = $item['email'];
		$quest = $item['quest'];
	echo "<hr>
			<p>Пользователь : $name</p>
			<p>Отзыв : $quest</p>
			<p>Почта : $email</p>
			<p align='right'><a href='index.php?del=$id'>Удалить</a></p><hr>";			
}
?>