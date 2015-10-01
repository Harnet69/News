<?
include 'Quest.class.php';
$Quests = new Quest();
if (isset ($_POST['save'])){
	include 'saveQuest.php';
}
if (isset ($_GET['del'])){
	include 'deleteQuest.php';
}
if (isset ($_GET['edit'])){
	include 'editQuest.php';
}

?>

<h1><a href="index.php">Гостевая книга</a></h1>
<form action="<? $_SERVER['REQUEST_URI']?>" method="POST">
	<p>Имя пользователя <input type="text" name="name" value="<?=$name?>" ></p>
	<p>Адрес e-mail <input type="email" name="email" value="<?=$email?>"></p>
	<p>Отзыв <input type="text" name="quest" value="<?=$quest?>"></p>
	<p><input type="submit" name="save" value="Сохранить"></p>
</form>
<?
include 'getQuests.php';
?>