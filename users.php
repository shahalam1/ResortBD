<?php


 class Users
 {
	 
	 private $username;
	 private $email;
	 private $mobile;
	 private $check_in;
	 private $check_out;
	 private $adults;
	 private $kids;
	 private $room_type;
	 private $room_no;
	 private $description;
	  
	public function Users()
	
	 {
					 
	 }
	
	
	public function reservation($username,$email,$mobile,$check_in,$check_out,$adults,$kids,$room_type,$room_no,$description)
	 {
		 
		 include('config.php');
	   
		$this->username=$username;
		$this->email=$email;
		$this->mobile=$mobile;
		$this->check_in=$check_in;
		$this->check_out=$check_out;
	    $this->adults=$adults;
		$this->kids=$kids;
		$this->room_type=$room_type;
		$this->room_no=$room_no;
		$this->description=$description;
		
		
		$query1=mysqli_query($db,"insert into reservation values('','$this->username ','$this->email','$this->mobile','$this->check_in','$this->check_out',
		'$this->adults','$this->kids','$this->room_type','$this->room_no','$this->description')");
	    
		$msg="reservation Successfully Completed!!";
		header("Location:reservationcom.php?success=$msg");
		
	 } 
	
	 
 }




?>