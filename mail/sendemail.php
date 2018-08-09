<?php


 
if(isset($_POST['submit'])){
	 
	$fname=$_POST['fname']; 
	$lname=$_POST['lname']; 
	$mail=$_POST['email']; 
	//$subject=$_POST['subject']; 
	$msge=$_POST['message']; 


 
	$to='minu.jayakody.mj@gmail.com';
	$subject='Beam Support: '.$_POST['subject'];
	$message ="Message: ".$msge."\n";
	$headers ="From: ".$mail;
	
	if(mail($to,$subject,$message,$headers))
	{
		
		  $Message = urlencode("Send Successfully");
	header('Location:contact.php?Message='.$Message);
		  
		
 }
 else
 {
	
	 $Message = urlencode("Something went wrong");
	 header('Location:contact.php?Message='.$Message);
 }
 
}

?>