<?
$name = $Quests->clearName($_POST['name']);
$email = $_POST['email'];
$quest = $Quests->clearQuest($_POST['quest']);
$datetime = date('d-m-Y H:i:s');
	if (empty ($name) or empty ($email) or empty ($quest)){
		echo "Введите корректные данные!";
	}
	else {
		$Quests->saveQuest($name, $email, $quest, $datetime);
		header('Location:index.php');
		exit;
	}
?> 