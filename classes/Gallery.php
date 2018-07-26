<?php 
require_once 'lib/database.php';
?>

<?php 

class Gallery
{
	private $db;

	function __construct()
	{
		$this->db = new Database();
	}


	public function getAllPhotoData(){
		$query = "SELECT * FROM gallery";
		$result = $this->db->select($query);
		return $result;
	}

		public function getAllVideoData(){
			$query = "SELECT * FROM videos";
			$result = $this->db->select($query);
			return $result;
		}
}



?>

