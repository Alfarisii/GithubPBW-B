<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject='Kritik dan saran';
$message=$_POST['message'];

$to='teknologi.informasi@its.ac.id';

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Jurnalweb.com <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: '.$email . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}

// include database connection file
		include_once("config.php");
		
// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,subject,email,message) VALUES('$name','$subject','$email','$message')");
		
		
?>