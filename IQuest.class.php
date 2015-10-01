<?
interface IQuest{
	function getQuest();
	function saveQuest($name, $email, $quest, $datetime);
	function editQuest($id);
	function deleteQuest($id);
}
?>