<?php 
require_once 'lib/database.php';
require_once 'helpers/format.php';
$errors = array();

?>

<?php 

class Tour
{
	private $db;
	private $fm;
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function visaCustomTourAdd($data){

		$errors = array();
		$passport_name = $_POST['passport_name'];
		$travel_date = $_POST['travel_date'];
		$profession = $_POST['profession'];
		$education = $_POST['education'];
		$will_visit = $_POST['will_visit'];
		$pre_visit = $_POST['pre_visit'];
		$info = $_POST['info'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$passport_name = $this->fm->validation($passport_name);
		$travel_date = $this->fm->validation($travel_date);
		$profession = $this->fm->validation($profession);
		$education = $this->fm->validation($education);
		$will_visit = $this->fm->validation($will_visit);
		$pre_visit = $this->fm->validation($pre_visit);
		$info = $this->fm->validation($info);
		$email = $this->fm->validation($email);
		$phone = $this->fm->validation($phone);

		$passport_name = mysqli_real_escape_string($this->db->link,$passport_name);
		$travel_date = mysqli_real_escape_string($this->db->link,$travel_date);
		$profession = mysqli_real_escape_string($this->db->link,$profession);
		$education = mysqli_real_escape_string($this->db->link,$education);
		$will_visit = mysqli_real_escape_string($this->db->link,$will_visit);
		$pre_visit = mysqli_real_escape_string($this->db->link,$pre_visit);
		$info = mysqli_real_escape_string($this->db->link,$info);
		$email = mysqli_real_escape_string($this->db->link,$email);
		$phone = mysqli_real_escape_string($this->db->link,$phone);

		$data = array();
		$data['type'] = 0;
		$data['status'] = array();
		if (empty($passport_name)) {
			array_push($data['status'], "Name is required");
		}

		if (empty($travel_date)) {
			array_push($data['status'], "Travel date is required");
		}

		if (empty($profession)) {
			array_push($data['status'], "Please mention your present profession");
		}

		if (empty($education)) {
			array_push($data['status'], "Please mention your educational qualification");
		}

		if (empty($will_visit)) {
			array_push($data['status'], "Please mention country name where you want to visit");
		}

		if (empty($pre_visit)) {
			array_push($data['status'], "Please mention your previously visited country name");
		}

		if (empty($email)) {
			array_push($data['status'], "Email field is required");
		}elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
			array_push($data['status'], "Email address is invalid");
		}

		if (empty($phone)) {
			array_push($data['status'], "Your contact number is required");
		}	
		
		if (count($data['status']) == 0) {
			$data['type'] = 1;
			$query = "INSERT INTO visa_custom_tour (passport_name,travel_date,profession,education,will_visit,pre_visit,info,email,phone) VALUES ('$passport_name','$travel_date','$profession','$education','$will_visit','$pre_visit','$info','$email','$phone')";
			$insertRow = $this->db->insert($query);
			$data['status'] = "Thank you for submitting. We'll contact with you soon.";
			return $data;
		  }else{
		  	return $data;
		  }
		  


	}

	public function flightCustomTourAdd($data){

		$errors = array();
		$adults = $_POST['adults'];
		$childs = $_POST['childs'];
		$infants = $_POST['infants'];
		$flight_type = $_POST['flight_type'];
		$travel_date = $_POST['travel_date'];
		$return_date = $_POST['return_date'];
		$fly_from = $_POST['fly_from'];
		$fly_to = $_POST['fly_to'];
		$transit_type = $_POST['transit_type'];
		$info = $_POST['info'];
		$traveller_name = $_POST['traveller_name'];
		$dob = $_POST['dob'];
		$passport_no = $_POST['passport_no'];
		$pass_expire = $_POST['pass_expire'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$adults = $this->fm->validation($adults);
		$childs = $this->fm->validation($childs);
		$infants = $this->fm->validation($infants);
		$flight_type = $this->fm->validation($flight_type);
		$travel_date = $this->fm->validation($travel_date);
		$return_date = $this->fm->validation($return_date);
		$fly_from = $this->fm->validation($fly_from);
		$fly_to = $this->fm->validation($fly_to);
		$transit_type = $this->fm->validation($transit_type);
		$info = $this->fm->validation($info);
		$traveller_name = $this->fm->validation($traveller_name);
		$dob = $this->fm->validation($dob);
		$passport_no = $this->fm->validation($passport_no);
		$pass_expire = $this->fm->validation($pass_expire);
		$email = $this->fm->validation($email);
		$phone = $this->fm->validation($phone);

		$adults = mysqli_real_escape_string($this->db->link,$adults);
		$childs = mysqli_real_escape_string($this->db->link,$childs);
		$infants = mysqli_real_escape_string($this->db->link,$infants);
		$flight_type = mysqli_real_escape_string($this->db->link,$flight_type);
		$travel_date = mysqli_real_escape_string($this->db->link,$travel_date);
		$return_date = mysqli_real_escape_string($this->db->link,$return_date);
		$fly_from = mysqli_real_escape_string($this->db->link,$fly_from);
		$fly_to = mysqli_real_escape_string($this->db->link,$fly_to);
		$transit_type = mysqli_real_escape_string($this->db->link,$transit_type);
		$info = mysqli_real_escape_string($this->db->link,$info);
		$traveller_name = mysqli_real_escape_string($this->db->link,$traveller_name);
		$dob = mysqli_real_escape_string($this->db->link,$dob);
		$passport_no = mysqli_real_escape_string($this->db->link,$passport_no);
		$pass_expire = mysqli_real_escape_string($this->db->link,$pass_expire);
		$email = mysqli_real_escape_string($this->db->link,$email);
		$phone = mysqli_real_escape_string($this->db->link,$phone);

		$data = array();
		$data['type'] = 0;
		$data['status'] = array();
		if (empty($adults)) {
			array_push($data['status'], "Adults field is required");
		}


		if (empty($flight_type)) {
			array_push($data['status'], "Please mention your desire flight type");
		}

		if (empty($travel_date)) {
			array_push($data['status'], "Travel date is required");
		}

		if (empty($return_date)) {
			array_push($data['status'], "Arrival date is required");
		}

		if (empty($fly_from)) {
			array_push($data['status'], "Please mention, from where you want to fly");
		}

		if (empty($fly_to)) {
			array_push($data['status'], "Please mention, to where you want to fly");
		}

		if (empty($transit_type)) {
			array_push($data['status'], "Please mention your preferable transit medium");
		}

		if (empty($traveller_name)) {
			array_push($data['status'], "Traveller(s) name field is required");
		}

		if (empty($dob)) {
			array_push($data['status'], "Traveller(s) date of birth field is required");
		}

		if (empty($passport_no)) {
			array_push($data['status'], "Traveller(s) passport no field is required");
		}

		if (empty($pass_expire)) {
			array_push($data['status'], "Traveller(s) passport expiretion limit field is required");
		}

		if (empty($email)) {
			array_push($data['status'], "Email field is required");
		}elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
			array_push($data['status'], "Email address is invalid");
		}

		if (empty($phone)) {
			array_push($data['status'], "Your contact number is required");
		}	
		
		if (count($data['status']) == 0) {
			$data['type'] = 1;
			$query = "INSERT INTO flight_custom_tour (adults,childs,infants,flight_type,travel_date,return_date,fly_from,fly_to,transit_type,info,traveller_name,dob,passport_no,pass_expire,email,phone) VALUES ('$adults','$childs','$infants','$flight_type','$travel_date','$return_date','$fly_from','$fly_to','$transit_type','$info','$traveller_name','$dob','$passport_no','$pass_expire','$email','$phone')";
			$insertRow = $this->db->insert($query);
			$data['status'] = "Thank you for submitting. We'll contact with you soon.";
			return $data;
		  }else{
		  	return $data;
		  }
		 

	}


	public function packageCustomTourAdd($data){

		$errors = array();
		$will_visit = $_POST['will_visit'];
		$adults = $_POST['adults'];
		$childs = $_POST['childs'];
		$travel_date = $_POST['travel_date'];
		$fly_from = $_POST['fly_from'];
		$budget = $_POST['budget'];
		$transit_type = $_POST['transit_type'];
		$contact_type = $_POST['contact_type'];
		$hotel_type = $_POST['hotel_type'];
		$info = $_POST['info'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$will_visit = $this->fm->validation($will_visit);
		$adults = $this->fm->validation($adults);
		$childs = $this->fm->validation($childs);
		$travel_date = $this->fm->validation($travel_date);
		$fly_from = $this->fm->validation($fly_from);
		$budget = $this->fm->validation($budget);
		$transit_type = $this->fm->validation($transit_type);
		$contact_type = $this->fm->validation($contact_type);
		$hotel_type = $this->fm->validation($hotel_type);
		$info = $this->fm->validation($info);
		$email = $this->fm->validation($email);
		$phone = $this->fm->validation($phone);

		$will_visit = mysqli_real_escape_string($this->db->link,$will_visit);
		$adults = mysqli_real_escape_string($this->db->link,$adults);
		$childs = mysqli_real_escape_string($this->db->link,$childs);
		$travel_date = mysqli_real_escape_string($this->db->link,$travel_date);
		$fly_from = mysqli_real_escape_string($this->db->link,$fly_from);
		$budget = mysqli_real_escape_string($this->db->link,$budget);
		$transit_type = mysqli_real_escape_string($this->db->link,$transit_type);
		$contact_type = mysqli_real_escape_string($this->db->link,$contact_type);
		$hotel_type = mysqli_real_escape_string($this->db->link,$hotel_type);
		$info = mysqli_real_escape_string($this->db->link,$info);
		$email = mysqli_real_escape_string($this->db->link,$email);
		$phone = mysqli_real_escape_string($this->db->link,$phone);

		$data = array();
		$data['type'] = 0;
		$data['status'] = array();

		if (empty($will_visit)) {
			array_push($data['status'], "Please mention country name where you want to visit");
		}


		if (empty($adults)) {
			array_push($data['status'], "Adults field is required");
		}

		if (empty($travel_date)) {
			array_push($data['status'], "Travel date is required");
		}

		if (empty($fly_from)) {
			array_push($data['status'], "Please mention, from where you want to fly");
		}

		if (empty($budget)) {
			array_push($data['status'], "Please mention, your budget for per person");
		}

		if (empty($transit_type)) {
			array_push($data['status'], "Please mention your preferable transit medium");
		}

		if (empty($contact_type)) {
			array_push($data['status'], "Please mention your preferable contact medium");
		}

		if (empty($hotel_type)) {
			array_push($data['status'], "Please mention your preferable hotel type");
		}



		if (empty($email)) {
			array_push($data['status'], "Email field is required");
		}elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
			array_push($data['status'], "Email address is invalid");
		}

		if (empty($phone)) {
			array_push($data['status'], "Your contact number is required");
		}	
		
		if (count($data['status']) == 0) {
			$data['type'] = 1;
			$query = "INSERT INTO package_custom_tour (adults,childs,will_visit,travel_date,fly_from,budget,transit_type,info,contact_type,hotel_type,email,phone) VALUES ('$adults','$childs','$will_visit','$travel_date','$fly_from','$budget','$transit_type','$info','$contact_type','$hotel_type','$email','$phone')";
			$insertRow = $this->db->insert($query);
			$data['status'] = "Thank you for submitting. We'll contact with you soon.";
			return $data;
		  }else{
		  	return $data;
		  }
		 

	}





}

?>

