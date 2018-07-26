<?php 
require_once 'lib/database.php';

?>

<?php 

class Slider
{
	private $db;

	function __construct()
	{
		$this->db = new Database();
	}




		public function getAllSliders(){
			$query = "SELECT * FROM slider  ORDER BY slider_id DESC";
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

