<?php
session_start();
class user
{
	public $host="localhost";
	public $username="root";
	public $password="";
	public $dbname="dyp_lab";
	public $run;
	public $rvalue;
	function __construct()
	{
		$this->run=new mysqli($this->host,$this->username,$this->password,$this->dbname);
		if(mysqli_connect_errno()){
			echo "database connection failed";
			exit;
		}else{
			//echo "success";
		}

	}

	public function getAllBooks($id){
		$sql="SELECT * from books";	
		$this->rvalue=$this->run->query($sql);
		return $this->rvalue;
		//echo $sql;exit;
		
	}

	public function getBooksDetails($id){
		$sql="SELECT * from books where id='$id'";
		$this->rvalue=$this->run->query($sql);
		return $this->rvalue;
		
	}

	public function getNameofBook($id){
		$query="SELECT name from books where id='$id'";
		$name=$this->run->query($query);
		if($name->num_rows > 0){
			while($row=mysqli_fetch_array($name)){
					return $row['name'];
			}
		}

	}
	public function getAllBooksSemesterWise($cid,$sid)
	{
		
		$sql="SELECT * from books where course=$cid AND semester=$sid";
		$this->rvalue=$this->run->query($sql);
		return $this->rvalue;
	}

	public function getAllCourse(){
		$sql="SELECT * from course";
		$this->rvalue=$this->run->query($sql);
		return $this->rvalue;
	}

	public function getAllSemester(){
		$sql="SELECT * from semester";
		$this->rvalue=$this->run->query($sql);
		return $this->rvalue;
	}
	public function getAllSemester1($id){
		$sql="SELECT * from semester where course='$id'";
		$this->rvalue=$this->run->query($sql);
		return $this->rvalue;
	}

	public function getSemByCourse($id)
	{
		$sql="SELECT * FROM semester where course=$id";
		$this->rvalue=$this->run->query($sql);
		return $this->rvalue;
	}
	
	public function insert($data){
			$in=$this->run->query($data);
			if($in){
				return true;
			}else{
				return false;
			}
	}

	public function login($data){

		$log=$this->run->query($data);

		if($log->num_rows > 0){
			while($row=mysqli_fetch_array($log)){

					if($row['admin']==1){
					$_SESSION["ADMIN"]= $row['admin'];	
					}else{
						$_SESSION["ADMIN"]= '0';	
					}
			$_SESSION["USERID"]= $row['id'];
			 $_SESSION["NAME"]=$row['name'];
			$_SESSION["COURSE"]=$row['Course'];
			$uid=$row['id'];
	}

$addr=$_SERVER['REMOTE_ADDR'];
//$host1=$_SERVER['REMOTE_HOST'];
$bs=$_SERVER['HTTP_USER_AGENT'];
include_once('detectOs.php');
$os = getOS($_SERVER['HTTP_USER_AGENT']);

$ld=date('y-m-d');
$sql1="INSERT INTO login_history (userid,login_date,os,browser,country,state,city,ip_address) values('$uid','$ld','$os','$bs','India','Maharastra','Pune','$addr')";

$this->run->query($sql1);
		return true;
		}else{
			return false;
			}
	}
public function checkMobileEmail($email,$mobile,$pwd11)
	{
		$sql="SELECT * from user where username='$email' && mobile_no='$mobile'";
		//echo $sql;exit;
		$name=$this->run->query($sql);
		if($name->num_rows > 0){
			$sql1="UPDATE user SET password='$pwd11' WHERE username='$email' && mobile_no='$mobile'";
			//echo $sql1;exit;
			$insert=$this->run->query($sql1);
			if($insert)
			{
				$this->rvalue="Password Update Successfully";
			}else{
				$this->rvalue="Failed to update Password";
			}

			return $this->rvalue;
		}
	}
	
	public function profile($data){
		$pr=$this->run->query($data);
		$value=$pr->fetch_object();
		$this->val[]=$value;
		return $this->val;
	}
	public function profileimg($data){
		$uid=$data;
		$profile="SELECT Image from user_profile where User_id='$uid' ORDER BY Profile_id DESC";
		$pr=$this->run->query($profile);
		if($pr->num_rows > 0){
			while($row=mysqli_fetch_array($pr)){
					return $row['Image'];
			}
	}
			

}
	public function loggedin(){
		if(isset($_SESSION["dypuser"]))
		{
			return true;
		}
	}
	public function logout(){
		unset($_SESSION["dypuser"]);
		return true;
		//header("location:index.php");
	}

	public function getNameofCourse($id){
		$query="SELECT name from course where id='$id'";
		$name=$this->run->query($query);
		if($name->num_rows > 0){
			while($row=mysqli_fetch_array($name)){
					return $row['name'];
			}
		}

	}
	

	public function getNameofSemester($id){
		$query="SELECT name from semester where id='$id'";
		$name=$this->run->query($query);
		if($name->num_rows > 0){
			while($row=mysqli_fetch_array($name)){
					return $row['name'];
			}
		}

	}

	public function getuserDownloadBooks($userid)
	{
		$query="SELECT * from book_downloads_history join books on book_downloads_history.`book_id`= books.`id` where user_id='$userid' ORDER BY book_downloads_history.`id` DESC";
	//	echo $query;exit;
		$name=$this->run->query($query);
		if($name->num_rows > 0){
		$cnt=0;
			while($row=mysqli_fetch_array($name)){
				
				$cnt++;
				$data['downloadbooks'][]=$row;	
			}

			$data['bookcnt']=$cnt;
		return $data;	
		}
	}

	public function getuserRecentDownloadBooks($userid)
	{
		$query="SELECT * from book_downloads_history where user_id='$userid' order by id DESC LIMIT 1";
		$name=$this->run->query($query);
		if($name->num_rows > 0){
		
			while($row=mysqli_fetch_array($name)){
				$bookname=$this->getNameofBook($row['book_id']);
				return $bookname;		
			}
		
		}
	}


	public function getTotalVisit($userid)
	{
		$query="SELECT * FROM login_history where userid='$userid'";
		$name=$this->run->query($query);
		if($name->num_rows > 0)
		{
			$cnt1=0;
			while($row=mysqli_fetch_array($name))
			{
				$cnt1++;
			}
			return $cnt1;
		}
	}


	public function getlastLogin($userid)
	{
		$query="SELECT * FROM login_history where userid='$userid' order by id DESC LIMIT 2";
		$name=$this->run->query($query);
		if($name->num_rows > 0)
		{
			while($row=mysqli_fetch_array($name))
			{
				$lastlogin=$row['login_date'];
			}
			return $lastlogin;
		}
	}

	public function getBookDelete($id)
	{
		$sql="DELETE from books where id=$id";
		if($this->run->query($sql)===true)
		{
			return true;
		}
	}


		public function getuserData($userid){
			
			$query="SELECT * from user where id='$userid'";
		$name=$this->run->query($query);
		if($name->num_rows > 0){
			while($row=mysqli_fetch_array($name)){
					return $row;
			}
		}
		}

		
		public function getNotification(){
			$uid=$_SESSION["USERID"];
			$sql="SELECT * from friendlist where User_id='$uid' || Friend_id='$uid'";
			$this->rvalue=$this->run->query($sql);
			return $this->rvalue;
		}


		public function getNoticeforUser(){
			$uid=$_SESSION["USERID"];
			$sql="SELECT * from user_notification where User_id='$uid' ORDER BY Notification_id DESC";
			$this->rvalue=$this->run->query($sql);
			return $this->rvalue;
		}

		
		public function getAllPhotos($data){
			$this->rvalue=$this->run->query($data);
			return $data=$this->rvalue;
		} 

		

		public function url($url){
		header("location:".$url);
		}

		
		public function getUserDetails($data){
			$this->rvalue=$this->run->query($data);
			return $this->rvalue;
		}


		public function getCourseSemester($course)
		{
		$sql="SELECT * from semester where course='$course'";
		$this->rvalue=$this->run->query($sql);
		return $this->rvalue;
		}

	public function getLoginHistory()
	{
		$query="SELECT * FROM login_history JOIN user ON login_history.`userid`=user.`id` ORDER BY login_history.`id` DESC";
		$name=$this->run->query($query);
		
		if($name->num_rows > 0)
		{
			while($row=mysqli_fetch_array($name))
			{
				$lastlogin[]=$row;
			}
			return $lastlogin;
		}
	}


	public function getAllUser()
	{
		$query="SELECT * FROM user ORDER BY id DESC";
		$name=$this->run->query($query);
		
		if($name->num_rows > 0)
		{
			while($row=mysqli_fetch_array($name))
			{
				$user[]=$row;
			}
			return $user;
		}	
	}
}
?>
