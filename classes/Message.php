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

	public function saveUserMessage($data){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

		$name = $this->fm->validation($name);
		$email = $this->fm->validation($email);
		$comment = $this->fm->validation($comment);

		$name = mysqli_real_escape_string($this->db->link,$name);
		$email = mysqli_real_escape_string($this->db->link,$email);
		$comment = mysqli_real_escape_string($this->db->link,$comment);

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
			array_push($data['status'], "Message field is required");
		}


		if (count($data['status']) == 0) {
			$data['type'] = 1;
			$query = "INSERT INTO user_messages (name,email,comment) VALUES ('$name','$email','$comment')";
			$insertRow = $this->db->insert($query);
			$data['status'] = "Thank you for your message. We'll give you a feedback soon.";
			return $data;
		  }else{
		  	return $data;
		  }
	}





}

?>

