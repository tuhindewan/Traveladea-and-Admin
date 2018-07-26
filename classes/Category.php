<?php 
require_once 'lib/database.php';
?>

<?php 

class Category
{
	private $db;

	function __construct()
	{
		$this->db = new Database();
	}



	public function getCategoryNameById($cat_id){
		$query = "SELECT cat_name FROM blog_category WHERE cat_id = '$cat_id'";
		$result = $this->db->select($query);
		return $result;
	}


	public function getAllCategories(){
		$query = "SELECT * FROM blog_category ORDER BY cat_name ASC";
		$result = $this->db->select($query);
		return $result;
	}

	public function  countCategory($cat_id){
		$query ="SELECT COUNT(cat_id) FROM blog WHERE cat_id = $cat_id ";
		$result = $this->db->select($query);
		return $result;
	}

}

?>

