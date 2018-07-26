<?php 
require_once 'lib/session.php';
Session::checkLogin();
require_once 'lib/database.php';
require_once 'helpers/format.php';
$errors = array();
?>


 <?php 


class Login
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function userLogin($data){

		$errors = array();

		$email = $_POST['email'];
		$password = $_POST['password'];

		$email = $this->fm->validation($email);
		$password = $this->fm->validation($password);

		$email = mysqli_real_escape_string($this->db->link,$email);
		$password = mysqli_real_escape_string($this->db->link,$password);

		$query = "SELECT * FROM admins WHERE email = '$email' LIMIT 1";
		$mailchk = $this->db->select($query);

		if (empty($email)) {
			array_push($errors, "Email address is required");
		}elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
			array_push($errors, "Email address is invalid");
		}elseif ($mailchk != true) {
			array_push($errors, "This email address is not registered.");
		}

		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {

			$password = md5($password);

			$query = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
			$result = $this->db->select($query);
			if ($result!=false) {
				$value = $result->fetch_assoc();
				Session::set('userlogin',true);
				Session::set('userid',$value['id']);
				Session::set('name',$value['name']);
				header("Location:dashboard.php");
			}else{
				array_push($errors, "Wrong email/password combination");
			}		
		}
		return $errors;
			
	}
}


  ?>