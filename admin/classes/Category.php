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

	public function getCatById($category_id){
		$query = "SELECT * FROM blog_category WHERE cat_id = $category_id";
		$result = $this->db->select($query);
		return $result;
	}


	public function categoryEdit($data,$id){
		$cat_name = $_POST['cat_name'];

		$cat_name = $this->fm->validation($cat_name);

		$cat_name = mysqli_real_escape_string($this->db->link,$cat_name);

		$query = "UPDATE blog_category SET cat_name = '$cat_name' WHERE cat_id = $id";
		$insertRow = $this->db->insert($query);
		if ($insertRow) {
			$msg = "<div class='alert alert-success' role='alert'>Category Successfully Updated.</div>";
			return $msg;
		}else{
			$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
			return $msg;
		}
	}


	public function deleteCategory($del_category_id){
		$query = "DELETE FROM blog_category WHERE cat_id = '$del_category_id'";
		$result = $this->db->delete($query);

		if ($result) {
		$msg = "<div class='alert alert-success' role='alert'>Category has been deleted successfully.</div>";
			return $msg;
		}else{
		$msg = "<div class='alert alert-danger' role='alert'>Something went wrong. Please try again later.</div>";
			return $msg;
		}	
	}

	public function getCategoryNameById($cat_id){
		$query = "SELECT cat_name FROM blog_category WHERE cat_id = '$cat_id'";
		$result = $this->db->select($query);
		return $result;
	}

}

?>

