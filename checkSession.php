<?php 
session_start();
include('global.php');
include('connection.php');
	
	if (isset($_POST['gettingStarted'])) 
	{
		if ($_SESSION['userName']==true)
		{
			if ( $_SESSION['status'] == 0 ) 
			{
				header("Location:" .$base_url. "subject.php");
			} 

			elseif ( $_SESSION['status'] == 1 )
			 {
				header("Location:" .$base_url. "admin/index.php");
			}
			
		} 

		else  //if($_SESSION['userName']==false) 
		{
			header("Location:" .$base_url. "index.php#signupModal");
		 }
		// else
		// {
		// 	echo "Fatal Error";
		// }
	}

?>