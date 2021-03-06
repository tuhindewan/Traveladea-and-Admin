<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
?>

<?php 

class Slider
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function imageUpload($file,$one,$two,$three)
	{

		   $one = $this->fm->validation($one);
		   $two = $this->fm->validation($two);
		   $three = $this->fm->validation($three);
		   $one = mysqli_real_escape_string($this->db->link,$one);
		   $two = mysqli_real_escape_string($this->db->link,$two);
		   $three = mysqli_real_escape_string($this->db->link,$three);

   		   	   $errors = array();
   		   	   $uploadedFiles = array();
   		   	   $permited  = array('jpg', 'jpeg', 'png', 'gif','JPG', 'JPEG', 'PNG', 'GIF');
   		   	   $totalBytes = 10240000;
   		   	   $UploadFolder = "SliderFolder";
   		   	   
   		   	   $counter = 0;
   		   	   
   		   	   
   		   	   	$temp = $_FILES["files"]["tmp_name"];
   		   	   	$name = $_FILES["files"]["name"];
   		   	   	$size = $_FILES["files"]["size"];
   		   	   	
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
   		   	   	
   		   	   	
   		   	   	if($UploadOk == true){
   		   	   		move_uploaded_file($temp,$uploaded_image);
   		   	   		array_push($uploadedFiles, $uploaded_image);
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
   		   	   			$query = "INSERT INTO slider (image,headline_one,headline_two,headline_three) VALUES ('$fileName','$one','$two','$three')";
   		   	   			$insertRow = $this->db->insert($query);
   			      		$msg = "<div class='alert alert-success' role='alert'> - Successfully added to slider.</div>";
   						return $msg;
   		   	   		}
   		   	   	}								
   		   	   }



		   
		}



		public function getAllSliders(){
			$query = "SELECT * FROM slider  ORDER BY slider_id DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function getSliderById($slider_id){
			$query = "SELECT * FROM slider  WHERE slider_id = $slider_id";
			$result = $this->db->select($query);
			return $result;
		}

		public function updateSlider($file,$one,$two,$three,$slider_id)
		{

			   $one = $this->fm->validation($one);
			   $two = $this->fm->validation($two);
			   $three = $this->fm->validation($three);
			   $one = mysqli_real_escape_string($this->db->link,$one);
			   $two = mysqli_real_escape_string($this->db->link,$two);
			   $three = mysqli_real_escape_string($this->db->link,$three);

	   		   	   $errors = array();
	   		   	   $uploadedFiles = array();
	   		   	   $permited  = array('jpg', 'jpeg', 'png', 'gif','JPG', 'JPEG', 'PNG', 'GIF');
	   		   	   $totalBytes = 10240000;
	   		   	   $UploadFolder = "SliderFolder";
	   		   	   
	   		   	   $counter = 0;
	   		   	   
	   		   	   
	   		   	   	$temp = $_FILES["files"]["tmp_name"];
	   		   	   	$name = $_FILES["files"]["name"];
	   		   	   	$size = $_FILES["files"]["size"];
	   		   	   	
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
	   		   	   	
	   		   	   	
	   		   	   	if($UploadOk == true){
	   		   	   		move_uploaded_file($temp,$uploaded_image);
	   		   	   		array_push($uploadedFiles, $uploaded_image);
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
	   		   	   			$query = "UPDATE slider SET image = '$fileName', headline_one = '$one', headline_two = '$two', headline_three = '$three' WHERE slider_id = $slider_id";
	   		   	   			$insertRow = $this->db->insert($query);
	   			      		$msg = "<div class='alert alert-success' role='alert'> - Successfully updated slider.</div>";
	   						return $msg;
	   		   	   		}
	   		   	   	}								
	   		   	   }
			   
			}


			public function deleteSlider($del_slider_id)
			{
				$query = "DELETE FROM slider WHERE slider_id = '$del_slider_id'";
				$result = $this->db->delete($query);

				if ($result) {
				$msg = "<div class='alert alert-success' role='alert'>Slider has been deleted successfully.</div>";
					return $msg;
				}else{
				$msg = "<div class='alert alert-danger' role='alert'>Something went wrong. Please try again later.</div>";
					return $msg;
				}	
			}
}



?>

