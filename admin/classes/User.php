<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
$errors = array();
?>

<?php 

class User
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function userRegistration($data){
		$errors = array();
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password =  $_POST['password'];
		$confirmPassword = $_POST['password_confirmation'];

		$name = $this->fm->validation($name);
		$email = $this->fm->validation($email);
		$password = $this->fm->validation($password);
		$confirmPassword = $this->fm->validation($confirmPassword);

		$name = mysqli_real_escape_string($this->db->link,$name);
		$email = mysqli_real_escape_string($this->db->link,$email);
		$password = mysqli_real_escape_string($this->db->link,$password);
		$confirmPassword = mysqli_real_escape_string($this->db->link,$confirmPassword);

		if (empty($name)) {
			array_push($errors, "Admin name is required");
		}

		if (empty($email)) {
			array_push($errors, "Email address is required");
		}elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
			array_push($errors, "Email address is invalid");
		}

		if (empty($password)) {
			array_push($errors, "Password is required");
		}elseif (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/", $password)) {
			array_push($errors,"The password does not meet the requirements!-at least one number,one letter,one of the following: !@#$% and there have to be 6-12 characters");
		}elseif ($password != $confirmPassword) {
			array_push($errors, "The two passwords do not match");
		}

		if (empty($confirmPassword)) {
			array_push($errors, "Confirm Password is required");
		}


		if (count($errors) == 0) {
			$password = md5($password);
			$confirmPassword = md5($confirmPassword);
			$query = "INSERT INTO admins (name,email,password,con_password) VALUES ('$name','$email','$password','$confirmPassword')";
			$insertRow = $this->db->insert($query);
		  	header('location: dashboard.php');
		  }else{
		  	return $errors;
		  }

			
 	}
}


?>