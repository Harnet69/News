<?
interface IQuest{
	function getQuest();
	function saveQuest($name, $email, $quest);
	function editQuest($id);
	function deleteQuest($id);
}
?>