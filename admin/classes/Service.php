<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
?>

<?php 

class Service
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function typeAdd($data){
		$type_name = $_POST['type_name'];

		$type_name = $this->fm->validation($type_name);

		$type_name = mysqli_real_escape_string($this->db->link,$type_name);

		$query = "INSERT INTO service_type (type_name) VALUES ('$type_name')";
		$insertRow = $this->db->insert($query);
		if ($insertRow) {
			$msg = "<div class='alert alert-success' role='alert'>Service Type Successfully Added.</div>";
			return $msg;
		}else{
			$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
			return $msg;
		}
	}

	public function getAllTypes(){
		$query = "SELECT * FROM service_type";
		$result = $this->db->select($query);
		return $result;
	}


	public function getTypeById($type_id){
		$query = "SELECT * FROM service_type WHERE type_id = $type_id";
		$result = $this->db->select($query);
		return $result;
	}


	public function typeNameEdit($data , $type_id){
		$type_name = $_POST['type_name'];

		$type_name = $this->fm->validation($type_name);

		$type_name = mysqli_real_escape_string($this->db->link,$type_name);

		$query = "UPDATE service_type SET type_name = '$type_name' WHERE type_id = $type_id";
		$updateRow = $this->db->update($query);
		if ($updateRow) {
			$msg = "<div class='alert alert-success' role='alert'>Service Type Successfully Updated.</div>";
			return $msg;
		}else{
			$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
			return $msg;
		}
	}

	public function deleteType($del_type_id){
		$query = "DELETE FROM service_type WHERE type_id = '$del_type_id'";
		$result = $this->db->delete($query);

		if ($result) {
		$msg = "<div class='alert alert-success' role='alert'>Service Type has been deleted successfully.</div>";
			return $msg;
		}else{
		$msg = "<div class='alert alert-danger' role='alert'>Something went wrong. Please try again later.</div>";
			return $msg;
		}
	}

	public function serviceAdd($data){

			if(isset($_POST['status']) == ""){
				$status = 0;
			}else{
				$status = $_POST['status'];
			}

			
			$title = $_POST['title'];
			$description = $_POST['description'];


			$status = $this->fm->validation($status);
			$title = $this->fm->validation($title);
			$description = $this->fm->validation($description);


			$status = mysqli_real_escape_string($this->db->link,$status);
			$title = mysqli_real_escape_string($this->db->link,$title);
			$description = mysqli_real_escape_string($this->db->link,$description);


			if (empty($title) || empty($description)) {
				$msg = "<div class='alert alert-danger' role='alert'>All fields are required.</div>";
				return $msg;
			}else{

			$query = "INSERT INTO services (status,title,description) VALUES ('$status','$title','$description')";
			$insertRow = $this->db->insert($query);
			if ($insertRow) {
				$msg = "<div class='alert alert-success' role='alert'>Service Successfully Added.</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
				return $msg;
			}
 		}
	}

	public function getAllServices(){
		$query = "SELECT * FROM services";
		$result = $this->db->select($query);
		return $result;
	}

	public function getServiceById($service_id){
		$query = "SELECT * FROM services WHERE service_id = $service_id";
		$result = $this->db->select($query);
		return $result;
	}


	public function serviceEdit($data , $service_id){

			if(isset($_POST['status']) == ""){
				$status = 0;
			}else{
				$status = $_POST['status'];
			}

			
			$title = $_POST['title'];
			$description = $_POST['description'];


			$status = $this->fm->validation($status);
			$title = $this->fm->validation($title);
			$description = $this->fm->validation($description);


			$status = mysqli_real_escape_string($this->db->link,$status);
			$title = mysqli_real_escape_string($this->db->link,$title);
			$description = mysqli_real_escape_string($this->db->link,$description);


			if (empty($title) || empty($description)) {
				$msg = "<div class='alert alert-danger' role='alert'>All fields are required.</div>";
				return $msg;
			}else{

			$query = "UPDATE services SET status = '$status', title = '$title', description = '$description' WHERE service_id = $service_id ";
			$updateRow = $this->db->update($query);
			if ($updateRow) {
				$msg = "<div class='alert alert-success' role='alert'>Service Successfully Edited.</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
				return $msg;
			}
 	    }
	}


	public function deleteService($del_service_id)
	{
		$query = "DELETE FROM services WHERE service_id = '$del_service_id'";
		$result = $this->db->delete($query);

		if ($result) {
		$msg = "<div class='alert alert-success' role='alert'>Service has been deleted successfully.</div>";
			return $msg;
		}else{
		$msg = "<div class='alert alert-danger' role='alert'>Something went wrong. Please try again later.</div>";
			return $msg;
		}	
	}


	public function addServiceCount($data){
		$tours = $data['tours'];
		$holiday = $data['holiday'];
		$hotel = $data['hotel'];
		$cruise = $data['cruise'];
		$flight = $data['flight'];
		$car = $data['car'];
		$query = "UPDATE  service_count SET tours = '$tours', holiday = '$holiday', hotel = '$hotel', cruise = '$cruise', flight = '$flight', car = '$car' WHERE id = 3";
		$insertRow = $this->db->insert($query);
		if ($insertRow) {
			$msg = "<div class='alert alert-success' role='alert'>Service Successfully Added.</div>";
			return $msg;
		}else{
			$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
			return $msg;
		}
	}

	public function getCountData(){
		$query = "SELECT * FROM  service_count";
		$result = $this->db->select($query);
		return $result;
	}



}

?>

