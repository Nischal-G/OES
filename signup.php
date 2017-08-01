<?php 
include 'connection.php';

 // function NewUser()
 // {
// if(isset($_POST['user_name']))
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$query = "INSERT INTO user (user_name,email,password) VALUES ('$userName','$email','$password')";
	$data = mysqli_query ($connection,$query);
	if($data)
	{
		header(Location: 'exam.php');
	}
 // }

// function SignUp()
// {
// if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
// {
// 	$query = mysqli_query("SELECT * FROM user WHERE user_name = '$_POST[user]' AND password = '$_POST[password]'") or die(mysqli_error());

// 	if($row = mysqli_fetch_array($query) or die(mysqli_error()))
// 	{
// 		NewUser();
// 	}
// 	else
// 	{
// 		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
// 	}
// }
// }
// if(isset($_POST['submit']))
// {
// 	SignUp();
// }
?>
