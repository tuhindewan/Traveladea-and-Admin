<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
?>

<?php 

class Package
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function packageAdd($data){

			if(isset($_POST['status']) == ""){
				$status = 0;
			}else{
				$status = $_POST['status'];
			}

			
			$title = $_POST['title'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$country = $_POST['country'];

			$status = $this->fm->validation($status);
			$title = $this->fm->validation($title);
			$description = $this->fm->validation($description);
			$price = $this->fm->validation($price);
			$country = $this->fm->validation($country);

			$status = mysqli_real_escape_string($this->db->link,$status);
			$title = mysqli_real_escape_string($this->db->link,$title);
			$description = mysqli_real_escape_string($this->db->link,$description);
			$price = mysqli_real_escape_string($this->db->link,$price);
			$country = mysqli_real_escape_string($this->db->link,$country);

			if (empty($title) || empty($description) || empty($price) || empty($country)) {
				$msg = "<div class='alert alert-danger' role='alert'>All fields are required.</div>";
				return $msg;
			}else{

			$query = "INSERT INTO packages (status,title,description,price,country) VALUES ('$status','$title','$description','$price','$country')";

			$result = $this->db->insert($query);

			$query = "SELECT package_id FROM packages  ORDER BY package_id DESC LIMIT 1";
			$pac_id = $this->db->select($query);
			return $pac_id;
			/*$insertRow = $this->db->insert($query);
			if ($insertRow) {
				$msg = "<div class='alert alert-success' role='alert'>Package Successfully Added.</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
				return $msg;
			}*/
 		}
	}

	public function uploadPackageImage($file,$pac_id){
			   $errors = array();
			   $uploadedFiles = array();
			   $permited  = array('jpg', 'jpeg', 'png', 'gif','JPG', 'JPEG', 'PNG', 'GIF');
			   $totalBytes = 10240000;
			   $UploadFolder = "PackageImage";
			   
			   $counter = 0;
			   
			   foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
			   	$temp = $_FILES["files"]["tmp_name"][$key];
			   	$name = $_FILES["files"]["name"][$key];
			   	$size = $_FILES["files"]["size"][$key];
			   	
			   	/*if(empty($temp))
			   	{
		      		$msg = "<div class='alert alert-danger' role='alert'>Please choose an image first.</div>";
					return $msg;
			   	}*/
			   	
			   	$counter++;
			   	$UploadOk = true;
			   	
			   	if($size> $totalBytes)
			   	{
			   		$UploadOk = false;
		       		$msg = "<div class='alert alert-danger' role='alert'>".$name." - Size should be 10MB or less then 10MB!</div>";
					return $msg;
			   		
			   	}
			   	
			   	$ext = pathinfo($name, PATHINFO_EXTENSION);
			   	if(in_array($ext, $permited) == false){
			   		$UploadOk = false;
		      		$msg = "<div class='alert alert-danger' role='alert'>".$name." - is invalid file type.You can upload only JPG,JPEG,PNG or GIF file!</div>";
					return $msg;
			   		
			   	}
			   	$uploaded_image = $UploadFolder."/".$name;
			   	
			   	if(file_exists($uploaded_image ) == true){
			   		$UploadOk = false;
		      		$msg = "<div class='alert alert-danger' role='alert'>".$name." - file name is already exist! Please change the file name</div>";
					return $msg;
			   		
			   	}
			   	
			   	if($UploadOk == true){
			   		move_uploaded_file($temp,$uploaded_image);
			   		array_push($uploadedFiles, $uploaded_image);
			   	}
			   }
			   
			   if($counter>0){
			   	if(count($errors)>0)
			   	{
			   		echo "<b>Errors:</b>";
			   		echo "<br/><ul>";
			   		foreach($errors as $error)
			   		{
			   			echo "<li>".$error."</li>";
			   		}
			   		echo "</ul><br/>";
			   	}
			   	
			   	if(count($uploadedFiles)>0){
			   		foreach($uploadedFiles as $fileName)
			   		{
			   			$query = "INSERT INTO package_image (image,package_id) VALUES ('$fileName','$pac_id')";
			   			$insertRow = $this->db->insert($query);
			   		}
			   	}								
			   }
	}

	public function getAllPackages(){
		$query = "SELECT * FROM packages";
		$result = $this->db->select($query);
		return $result;
	}

	public function getPackageById($package_id){
		$query = "SELECT * FROM packages WHERE package_id = $package_id";
		$result = $this->db->select($query);
		return $result;
	}


	public function packageEdit($data , $package_id){

			if(isset($_POST['status']) == ""){
				$status = 0;
			}else{
				$status = $_POST['status'];
			}

			
			$title = $_POST['title'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$country = $_POST['country'];

			$status = $this->fm->validation($status);
			$title = $this->fm->validation($title);
			$description = $this->fm->validation($description);
			$price = $this->fm->validation($price);
			$country = $this->fm->validation($country);

			$status = mysqli_real_escape_string($this->db->link,$status);
			$title = mysqli_real_escape_string($this->db->link,$title);
			$description = mysqli_real_escape_string($this->db->link,$description);
			$price = mysqli_real_escape_string($this->db->link,$price);
			$country = mysqli_real_escape_string($this->db->link,$country);

			if (empty($title) || empty($description) || empty($price) || empty($country)) {
				$msg = "<div class='alert alert-danger' role='alert'>All fields are required.</div>";
				return $msg;
			}else{

			$query = "UPDATE packages SET status = '$status', title = '$title', description = '$description', price = '$price', country = '$country' WHERE package_id = $package_id ";
			$updateRow = $this->db->update($query);
			if ($updateRow) {
				$msg = "<div class='alert alert-success' role='alert'>Package Successfully Edited.</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger' role='alert'>Something Went Wromg!!</div>";
				return $msg;
			}
 	    }
	}


	public function deletePackage($del_package_id)
	{
		$query = "DELETE FROM packages WHERE package_id = '$del_package_id'";
		$result = $this->db->delete($query);

		if ($result) {
		$msg = "<div class='alert alert-success' role='alert'>Package has been deleted successfully.</div>";
			return $msg;
		}else{
		$msg = "<div class='alert alert-danger' role='alert'>Something went wrong. Please try again later.</div>";
			return $msg;
		}	
	}


	public function getPackageImageById($pack_id)
	{
		$query = "SELECT * FROM package_image WHERE package_id = $pack_id";
		$result = $this->db->select($query);
		return $result;
	}



}

?>

