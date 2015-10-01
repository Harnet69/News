<?
include 'Quest.class.php';
$Quests = new Quest();
if (isset ($_POST['save'])){
	include 'saveQuest.php';
}
if (isset ($_GET['del'])){
	include 'deleteQuest.php';
}
?>

<form action="<? $_SERVER['REQUEST_URI']?>" method="POST">
	<p>Имя пользователя <input type="text" name="name" ></p>
	<p>Адрес e-mail <input type="email" name="email" ></p>
	<p>Отзыв <input type="text" name="quest" ></p>
	<p><input type="submit" name="save" value="Сохранить"></p>
</form>
<?
include 'getQuests.php';
?>