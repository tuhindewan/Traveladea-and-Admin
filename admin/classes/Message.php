<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
$errors = array();
?>

<?php 

class Message
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function getAllMessages(){
		$query = "SELECT * FROM user_messages ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getMessageById($message_id){
		$query = "SELECT * FROM user_messages WHERE id = $message_id";
		$result = $this->db->select($query);
		return $result;
	}


}

?>

