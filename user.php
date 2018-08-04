<?php


 class User
 {
	 
	 private $username;
	 private $email;
	 private $password;
	 private $mobile;
	 private $date;
	 private $gender;
	 private $country;
	  
	public function User()
	
	 {
					 
	 }
	
	
	public function SignUp($username,$email,$password,$mobile,$date,$gender,$country)
	 {
		 
		 include('config.php');
	   
		$this->username=$username;
		$this->email=$email;
		$this->password=md5($password);
		$this->mobile=$mobile;
		$this->date=$date;
		$this->gender=$gender;
	    $this->country=$country;
		
		
		$query1=mysqli_query($db,"insert into register_user values('','$this->username ','$this->email','$this->password',
		'$this->mobile','$this->date','$this->gender','$this->country')");
	    
		$msg="Registration Successfully Completed! LogIn Here!";
		header("Location:login.php?success=$msg");
		
	 } 
	
	 
	 
	 public function verifyUser($email,$password)
	 
	 
	 
	 { 
        
		include('config.php');
		
		$this->email=$email;
		$this->password=md5($password);
		
		$query=mysqli_query($db,"select * from register_user where Email='$this->email' AND Password='$this->password'");
		
		$get=mysqli_fetch_array($query,MYSQLI_NUM);
		$id=$get[0];
		$usertype= $get[7];
	   	
		$rows = mysqli_num_rows($query);
		if($rows>=1)
		{
			
			if($usertype=='moderator')
			{
			session_start();
			$_SESSION['id']=$id;
			header("Location:moderatorHtml.php");
			}
			
			
			else if($usertype=='authority')
			{
			session_start();
			$_SESSION['id']=$id;
			header("Location:authorityboardHtml.php");
			}
			
			else
			{
			session_start();
			$_SESSION['id']=$id;
			header("Location:userhome.php");
			}
			
			
		}
		else
		{
			Echo "Invalid Email or Password";
			
		}
					
	 }
	 
	 public function user_details($id)
	 {
		 include('config.php');
		$query=mysqli_query($db,"select * from user where ID='$id'");
		$get1=mysqli_fetch_array($query,MYSQLI_NUM);
		return $get1;
         
  		
	 }
	 
	 
	 

 }




?>