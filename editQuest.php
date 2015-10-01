<?
if (isset ($_POST['edite'])){
$id = $_POST['id'];	
$name = $Quests->clearName($_POST['name']);
$email = $_POST['email'];
$quest = $Quests->clearQuest($_POST['quest']);
$datetime = date('d-m-Y H:i:s');
	if (empty ($name) or empty ($email) or empty ($quest)){
		echo "Вы не заполнили обязательное поле!";
	}
	else {
		$Quests->updateQuest($id, $name, $email, $quest, $datetime);
		header('Location:index.php');
	}
}
$id = $Quests->clearInt($_GET['edit']);
$arr = $Quests->editQuest($id);
$datetime = date('d-m-Y H:i:s');

	foreach ($arr as $item){
		$id = $item['id'];
		$name = $item['name'];
		$email = $item['email'];
		$quest = $item['quest'];
		$datetimeOld = $item['datetime'];
}

?>

<h1><a href="index.php">Гостевая книга</a></h1>
<h2>Редактировать</h2>
<form action="<? $_SERVER['REQUEST_URI']?>" method="POST">
	<input type="hidden" name="id" value="<?=$id?>">
	<p>Имя пользователя <input type="text" name="name" value="<?=$name?>" ></p>
	<p>Адрес e-mail <input type="email" name="email" value="<?=$email?>"></p>
	<p>Отзыв <input type="text" name="quest" value="<?=$quest?>"></p>
	<p>Время добавления <?=$datetime?></p>
	<p><input type="submit" name="edite" value="Изменить"></p>
</form>
<?
exit;
?> 