<?php 
require_once 'lib/database.php';
?>

<?php 

class Service
{
	private $db;

	function __construct()
	{
		$this->db = new Database();
	}





	public function getAllServices(){
		$query = "SELECT * FROM services";
		$result = $this->db->select($query);
		return $result;
	}

	public function getCountData(){
		$query = "SELECT * FROM  service_count";
		$result = $this->db->select($query);
		return $result;
	}

}

?>

