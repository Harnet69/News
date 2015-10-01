<?
$id = $Quests->clearInt($_GET['del']);
$Quests->deleteQuest($id);
header('Location:index.php');
exit;
?>