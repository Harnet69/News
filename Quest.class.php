<?
include 'IQuest.class.php';
class Quest implements IQuest{
	const DB_NAME = 'Z:\home\News\www\questbook.db';
	private $_db;
	function __construct(){
		if(is_file (self::DB_NAME)){
			$this->_db = new SQLITE3(self::DB_NAME);
		}
		else{
			$this->_db = new SQLITE3(self::DB_NAME);
			$sql = "CREATE TABLE quests (
						id INTEGER PRIMARY KEY AUTOINCREMENT,
						name TEXT,
						email TEXT,
						quest TEXT)";
			$this->_db->exec($sql) or die ('Всё плохо');			
		}
		
	}
	
	function getQuest(){
		$sql = "SELECT id, name, email, quest FROM quests ORDER BY id DESC";
		$res= $this->_db->query($sql);
		$arr = array();
		while($row = $res->fetchArray(SQLITE3_ASSOC)){
			$arr[] = $row;
		}
		return $arr;
	}
	
	function saveQuest($name, $email, $quest){
		$sql = "INSERT INTO quests(
						name, 
						email, 
						quest) 
					VALUES('$name', '$email', '$quest')";
		$this->_db->exec($sql) or die ('Всё плохо');
	}
	function clearName($str){
		$str = trim(strip_tags($str));
		$str = $this->_db->escapeString($str);
		return $str;
	}
	function clearQuest($str){
		$str = trim(strip_tags($str));
		$str = $this->_db->escapeString($str);
		$str = nl2br($str);
		return $str;
	}
	function editQuest($id){}
	function deleteQuest($id){
		$sql = "DELETE FROM quests WHERE id = $id";
		$this->_db->exec($sql) or die ('Всё плохо');
	}
}
?>