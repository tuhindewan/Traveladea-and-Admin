<?php 
require_once 'lib/database.php';
?>

<?php 

class Package
{
	private $db;

	function __construct()
	{
		$this->db = new Database();
	}


	public function getAllPackages(){
		$query = "SELECT * FROM packages ORDER BY package_id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getAllPackagesForPagiantion($pak_limit){
		$query = "SELECT * FROM packages WHERE status = 1 ORDER BY package_id DESC LIMIT $pak_limit,5";
		$result = $this->db->select($query);
		return $result;
	}

	public function getPackageImageByIdLast($pack_id)
	{
		$query = "SELECT * FROM package_image WHERE package_id = $pack_id ORDER BY package_id  DESC LIMIT 1";
		$result = $this->db->select($query);
		return $result;
	}

	public function getPackageImageById($package_id)
	{
		$query = "SELECT * FROM package_image WHERE package_id = $package_id";
		$result = $this->db->select($query);
		return $result;
	}

	public function getPackageById($package_id){
		$query = "SELECT * FROM packages WHERE package_id = $package_id";
		$result = $this->db->select($query);
		return $result;
	}

	public function getEightPackages(){
		$query = "SELECT * FROM packages WHERE status = 1 ORDER BY package_id DESC LIMIT 8";
		$result = $this->db->select($query);
		return $result;
	}


	public function getFivePackages(){
		$query = "SELECT * FROM packages WHERE status = 1 ORDER BY package_id DESC LIMIT 5";
		$result = $this->db->select($query);
		return $result;
	}

	public function countAllPackages(){
		$query = "SELECT COUNT(*) FROM packages WHERE status = 1";
		$result = $this->db->select($query);
		return $result;
	}

}

?>

