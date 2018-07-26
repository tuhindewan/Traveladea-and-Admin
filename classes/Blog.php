<?php 
require_once 'lib/database.php';
?>

<?php 

class Blog
{
	private $db;
	
	function __construct()
	{
		$this->db = new Database();
	}

	
	public function getAllBlogs(){
		$query = "SELECT * FROM blog  ORDER BY blog_id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getAllBlogsForPagiantion($pak_limit){
		$query = "SELECT * FROM blog  ORDER BY blog_id DESC LIMIT $pak_limit,8";
		$result = $this->db->select($query);
		return $result;
	}

	public function getBlogById($b_id){
		$query = "SELECT * FROM blog  WHERE blog_id = $b_id";
		$result = $this->db->select($query);
		return $result;
	}

	public function getBlogByIdForPagination($b_id,$pak_limit){
		$query = "SELECT * FROM blog  WHERE blog_id = $b_id ORDER BY blog_id DESC LIMIT $pak_limit,8";
		$result = $this->db->select($query);
		return $result;
	}

	public function getLatestFourBlogs(){
		$query = "SELECT * FROM blog  ORDER BY blog_id DESC LIMIT 4";
		$result = $this->db->select($query);
		return $result;
	}

	public function getAllTagsByBlogId($b_id){
		$query = "SELECT * FROM tags  WHERE blog_id = $b_id";
		$result = $this->db->select($query);
		return $result;
	}


	public function getBlogIdByTagName($tag_name){
		$query = "SELECT * FROM tags  WHERE name = '$tag_name'";
		$result = $this->db->select($query);
		return $result;
	}

	public function getAllTags(){
		$query = "SELECT DISTINCT name FROM tags ORDER BY tag_id DESC LIMIT 15";
		$result = $this->db->select($query);
		return $result;
	}

	public function getBlogIdByCategoryId($cat_id,$pak_limit){
		$query = "SELECT * FROM blog  WHERE cat_id = '$cat_id' ORDER BY blog_id DESC LIMIT $pak_limit,8";
		$result = $this->db->select($query);
		return $result;
	}

	public function countTotalBlogs(){
		$query = "SELECT COUNT(*) AS 'total_blog' FROM blog";
		$result = $this->db->select($query);
		return $result;
	}

		
}



?>

