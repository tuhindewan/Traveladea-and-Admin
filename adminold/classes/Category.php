<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
?>

<?php 

class Category
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function categoryAdd($data){
		$cat_name = $_POST['cat_name'];

		$cat_name = $this->fm->validation($cat_name);

		$cat_name = mysqli_real_escape_string($this->db->link,$cat_name);

		$query = "INSERT INTO blog_category (cat_name) VALUES ('$cat_name')";
		$insertRow = $this->db->insert($query);
		if ($insertRow) {
			$msg = "<div class='alert alert-success' role='alert'>Category Successfully Added.</div>";
			return $msg;
		}else{
			$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
			return $msg;
		}
	}


	public function getAllCategories(){
		$query = "SELECT * FROM blog_category ORDER BY cat_name ASC";
		$result = $this->db->select($query);
		return $result;
	}

}

?>

