<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
$errors = array();
?>

<?php 

class Comment
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function commentAdd($data){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		$blog_id = $_POST['blog_id'];

		$name = $this->fm->validation($name);
		$email = $this->fm->validation($email);
		$comment = $this->fm->validation($comment);
		$blog_id = $this->fm->validation($blog_id);

		$name = mysqli_real_escape_string($this->db->link,$name);
		$email = mysqli_real_escape_string($this->db->link,$email);
		$comment = mysqli_real_escape_string($this->db->link,$comment);
		$blog_id = mysqli_real_escape_string($this->db->link,$blog_id);

		$data = array();
		$data['type'] = 0;
		$data['status'] = array();

		if (empty($name)) {
			array_push($data['status'], "Name field is required");
		}

		if (empty($email)) {
			array_push($data['status'], "Email field is required");
		}elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
			array_push($data['status'], "Email address is invalid");
		}

		if (empty($comment)) {
			array_push($data['status'], "Comment field is required");
		}

		
		if (count($data['status']) == 0) {
			$data['type'] = 1;
			$query = "INSERT INTO post_comments (name,email,comment,blog_id) VALUES ('$name','$email','$comment','$blog_id')";
			$insertRow = $this->db->insert($query);
			$data['status'] = "Thank you for your comment.";
			return $data;
		  }else{
		  	return $data;
		  }
	}


	public function getBlogWiseComments($b_id){
		$query = "SELECT * FROM post_comments WHERE blog_id = $b_id";
		$result = $this->db->select($query);
		return $result;
	}

	public function  countBlogWiseComment($b_id){
		$query ="SELECT COUNT(blog_id) FROM post_comments WHERE blog_id = $b_id ";
		$result = $this->db->select($query);
		return $result;
	}



}

?>

