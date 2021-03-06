<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
?>

<?php 

class Gallery
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function imageUpload($file,$image_title)
	{

		   $image_title = $this->fm->validation($image_title);
		   $image_title = mysqli_real_escape_string($this->db->link,$image_title);

   		   	   $errors = array();
   		   	   $uploadedFiles = array();
   		   	   $permited  = array('jpg', 'jpeg', 'png', 'gif','JPG', 'JPEG', 'PNG', 'GIF');
   		   	   $totalBytes = 10240000;
   		   	   $UploadFolder = "UploadFolder";
   		   	   
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
   		   	   			$query = "INSERT INTO gallery (image,image_title) VALUES ('$fileName','$image_title')";
   		   	   			$insertRow = $this->db->insert($query);
   		   	   		}
   		   	   	}								
   		   	   }



		   
		}


		public function videoUpload($file,$image_title){
			
			$image_title = $this->fm->validation($image_title);
			$image_title = mysqli_real_escape_string($this->db->link,$image_title);

				   $errors = array();
				   $uploadedVideos = array();
				   $permited_video  = array('mp4', 'avi', 'mov', '3gp','mpeg','MP4', 'AVI', 'MOV', '3GP','MPEG');
				   $totalVideoBytes = 100000000;
				   $VideoUploadFolder = "VideoUploadFolder";
				   
				   $counter = 0;
				   
				   foreach($_FILES["videos"]["tmp_name"] as $key=>$tmp_name){
				   	$video_temp = $_FILES["videos"]["tmp_name"][$key];
				   	$video_name = $_FILES["videos"]["name"][$key];
				   	$video_size = $_FILES["videos"]["size"][$key];
				   	
				   			   	   	
				   	$counter++;
				   	$UploadOk = true;
				   	
				   	if($video_size> $totalVideoBytes)
				   	{
				   		$UploadOk = false;
			       		$msg = "<div class='alert alert-danger' role='alert'>".$video_name." - Size should be 10MB or less then 10MB!</div>";
						return $msg;
				   		
				   	}
				   	
				   	$ext = pathinfo($video_name, PATHINFO_EXTENSION);
				   	if(in_array($ext, $permited_video) == false){
				   		$UploadOk = false;
			      		$msg = "<div class='alert alert-danger' role='alert'>".$video_name." - is invalid file type.You can upload only MP4,AVI,MOV,3GP or GIF file!</div>";
						return $msg;
				   		
				   	}
				   	$uploaded_video = $VideoUploadFolder."/".$video_name;
				   	
				   	if(file_exists($uploaded_video ) == true){
				   		$UploadOk = false;
			      		$msg = "<div class='alert alert-danger' role='alert'>".$video_name." - file name is already exist! Please change the file name</div>";
						return $msg;
				   		
				   	}
				   	
				   	if($UploadOk == true){
				   		move_uploaded_file($video_temp,$uploaded_video);
				   		array_push($uploadedVideos, $uploaded_video);
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
				   	
				   	if(count($uploadedVideos)>0){
				   		foreach($uploadedVideos as $fileName)
				   		{
				   			$query = "INSERT INTO videos (video,video_title) VALUES ('$fileName','$image_title')";
				   			$insertRow = $this->db->insert($query);
				   		}
				   	}								
				   }
		}


		public function getAllData(){
			$query = "SELECT * FROM gallery";
			$result = $this->db->select($query);
			return $result;
		}

		public function getAllVideoData(){
			$query = "SELECT * FROM videos";
			$result = $this->db->select($query);
			return $result;
		}
}



?>

