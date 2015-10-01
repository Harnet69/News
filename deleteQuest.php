<?
$id = $_GET['del'];
$Quests->deleteQuest($id);
header('Location:index.php');
?>