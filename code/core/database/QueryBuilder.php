<?php

class QueryBuilder{

	protected $pdo;

	function __construct(PDO $pdo){
		$this->pdo = $pdo;
	}
	public function selectall($table){

   		$statement =$this->pdo->prepare('select * from '.$table);
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_OBJ);
		}

	public function trendingjobs(){

		$statement =$this->pdo->prepare('SELECT *
		FROM jobposted j , company c 
		where c.cid = j.cid ORDER BY wishlist  desc LIMIT 5;');
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
		
	}

	public function company_signup($cname,$email,$password,$location,$city,$image,$provience,$country){
		$sql = "INSERT INTO `company`(`cname`, `email`, `password`, `location`, `city`, `img`, `provience`, `country`) VALUES ("."'"."$cname"."'".","."'"."$email"."'".","."'"."$password"."'".","."'"."$location"."'".","."'"."$city"."'".","."'"."$image"."'".","."'"."$provience"."'".","."'"."$country"."'".")";
		$this->pdo->query($sql);
	}
	public function user_signup($fname,$lname,$email,$phone,$city,$password){
		$sql = "INSERT INTO `user`(`fname`, `lname`, `email`, `phone`, `city`, `password`) VALUES ("."'"."$fname"."'".","."'"."$lname"."'".","."'"."$email"."'".","."'"."$phone"."'".","."'"."$city"."'".","."'"."$password"."'".")";
		$this->pdo->query($sql);
	}
	
	public function browse_jobs(){
		$sql = "SELECT * FROM jobposted,company WHERE jobposted.cid = company.cid";
		$statement =$this->pdo->prepare($sql);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}//$sql = "SELECT * FROM jobposted,company WHERE (jobposted.cid = company.cid) AND (jobposted.jid = 1)";

	public function job_details($i){
		$sql = "SELECT * FROM jobposted,company WHERE (jobposted.cid = company.cid) AND (jobposted.jid = '$i')";
		$statement =$this->pdo->prepare($sql);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}//

	public function user_login($email,$password,$table){
		$sql = "SELECT * FROM ".$table." WHERE email = '".$email."' AND password = '".$password."' ";
		$statement =$this->pdo->prepare($sql);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}

	public function search_jobs($keyword,$skill,$city){
		$sql = "SELECT * FROM jobposted,company WHERE (jobposted.jname LIKE '%".$keyword."%' OR jobposted.keywords LIKE '%".$keyword."%' OR jobposted.skill LIKE'%".$skill."%' OR jobposted.skill LIKE '%".$keyword."%'  OR jobposted.jdescrp LIKE '%".$keyword."%' OR jobposted.jlocation LIKE '%".$city."%' OR jobposted.jcity LIKE '%".$city."%' OR jobposted.jcountry LIKE '%city%')  AND  jobposted.cid = company.cid";
		$statement =$this->pdo->prepare($sql);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}

		public function uploadcv($user,$cv){
			$sql = "UPDATE `user` SET `cv`= '".$cv."' WHERE uid = ".$user;		
			$this->pdo->query($sql);
	}

	public function contact_insert($name,$email,$message){
		$sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','.$message.')";
		$this->pdo->query($sql);
	}

	public function post_job($jname,$jdescrp,$type,$skill,$keywords,$zipcode,$indus,$totpos,$appdate,$gender,$edu,$degtit,$carrier,$sal,$exper,$jcity,$jcountry,$jlocation){
		if(!isset($_SESSION)){
			session_start();
		  }
		$sql = "INSERT INTO `jobposted`(`cid`,`jname`, `jdescrp`, `type`, `skill`, `keywords`, `zipcode`, `indus`, `totpos`, `appdate`, `gender`, `edu`, `degtit`, `carrier`, `sal`, `exper`, `jcity`, `jcountry`, `jlocation`) VALUES (".$_SESSION['cuser']['id'].",'".$jname."','".$jdescrp."','".$type."','".$skill."','".$keywords."','".$zipcode."','".$indus."','".$totpos."','".$appdate."','".$gender."','".$edu."','".$degtit."','".$carrier."','".$sal."','".$exper."','".$jcity."','".$jcountry."','".$jlocation."')";
		$this->pdo->query($sql);
	}
	public function categories(){
		$sql = "SELECT DISTINCT skill FROM jobposted";
		$statement =$this->pdo->prepare($sql);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}


	



}








?>
