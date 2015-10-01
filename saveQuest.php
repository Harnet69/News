<?
$name = $Quests->clearName($_POST['name']);
$email = $_POST['email'];
$quest = $Quests->clearQuest($_POST['quest']);
	if (empty ($name) or empty ($email) or empty ($quest)){
		echo "Введите корректные данные!";
	}
	else {
		$Quests->saveQuest($name, $email, $quest);
	}
?> 