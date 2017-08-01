<?php 
// session_start();
// if(isset($_POST['submit']))
// {
// 	$_SESSION['name']=$_POST['name'];
// 	$_SESSION['email']=$_POST['email'];
// 	$_SESSION['password']=$_POST['password'];
// 	header("Location: login.php");
// }


include('connection.php');
$query="SELECT * FROM `physics` ORDER BY RAND() LIMIT 10";
if($query_run=mysqli_query($query))
{
    $i=4;
    $rows=mysql_fetch_array($query_run);
		while($rows)
		{
		    $qid=$rows['qid'];
		    $ques=$rows['question'];
		   
		}
} else {
    echo'<font color="red"> Query does not run. </font>';


?>