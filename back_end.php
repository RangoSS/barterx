<?php
 include "connection.php";
 class Api extends Connecting{

   var $first_name;

 ////////////////////

  var $emailt;
  var $pwp;


 function __construct($emali,$pins){
 	
    $this->emailt=$emali;
    $this->pwp=$pins;
    
 }
 function getConn($query){

	$con=$this->getConnection();
     $results=mysqli_query($con,$query);
     return  $results;
}
 
 function login(){

   //http://localhost/AJAX_LOGIN/back_end.php?action=login
 	 //session_start();
        
     // $first_name=$_SESSION['first_name']=htmlspecialchars($_POST['first_name']);
     // $emailt=$_SESSION['emailt']=htmlspecialchars($_POST['emailt']); //takes data from one page to another

 $sqls="SELECT first_name,user_email,P_password,user_type from user where user_email='$this->emailt' and P_password='$this->pwp'";

  $results=$this->getConn($sqls);

     // if results returns rows run this statement 
  if($results && mysqli_num_rows($results) > 0){
  $row = mysqli_fetch_assoc($results);
    
    $first_name=$_SESSION['first_name']=$row['first_name'];///my session
  if($row['user_type'] == 'student')
   {
   
  echo 'messages.php';
 }
  else if($row['user_type'] == 'employee')
  {
    echo "management.php";
  }
  
 }//end of statement of when we found rows
else
{
  echo "User Not Found"; //if we didn' find match we run this
}

 return $results;

 

 }
 

}

     if(isset($_POST['action'])){
	$action=$_POST['action'];

	 if($action == 'login')
	{

		  $emailt=$_POST['emailt'];
      $pwp=$_POST['pwp'];
		$api_object=new Api($emailt,$pwp);
		$api_object->login();
	}
}  


?>