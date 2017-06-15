
<?php 
include 'global.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include 'include/lib.php'; ?>
</head>

<body>

	<?php include 'include/menu.php' ?>	

<!--Home Starts-->		

	<section class="container-fluid text-center" id="home" >
		<div class="row">
			<div class="col-lg-12">
				
				<!-- Carsoul Starts -->

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" id="carouse">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox" >
					    <div class="item active">
					    	<img src="lib/img/corosal2.jpg" class="img-responsive"  >
					      <div class="carousel-caption"> </div>
					    </div>
					    <div class="item" >
					      <img src="lib/img/corosal1.jpg" class="img-responsive" >
					      <div class="carousel-caption"> </div>
					    </div>
					    <div class="item">
					      <img src="lib/img/corosal3.jpg" class="img-responsive" >
					      <div class="carousel-caption"></div>
					    </div>
					  </div>

				<!-- Controls -->

				<!--Get Started starts-->
				
				<div id="getStarted">
					<h1 >Exam Preparation Simplified</h1>
			        <p>PRACTICE ANALYZE AND IMPROVE</p>
			        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#signupModal">Getting Started</button>
				</div>

				<!--Get Started Ends-->

				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>

				</div>

				<!-- carsoul ends -->

				<h1>Best Exam Preparation for You. Start Now!</h1>
                <p>Boost your exam preparation with Testbook to crack the most popular competitive exams in Nepal.</p> 
                <p>Select your course and get started.</p>

			</div>
		</div>
	</section>

<!--Home Ends-->

<!-- Sign up Modal-->

	<div id="signupModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content"  >

	      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Sign Up</h4>
	      </div>

	      <div class="modal-body">

	        	<div class="form-group">
					    <label for="name">User name: </label>
					    <input type="text" class="form-control" id="name">
				</div>

				<div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email">
				 </div>

				<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd">
			 	</div>
				  <button type="submit" class="btn btn-default btn-block" style="background-color: grey">Create My Account</button>
				  <p>Already have a account?
				 <a data-dismiss="modal" data-toggle="modal" href="#loginModal">Login</a></p>


	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

<!--Login Modal-->

	<div id="loginModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content"  >

	      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Login</h4>
	      </div>

	      <div class="modal-body">

	        	<div class="form-group">
					    <label for="name">User name: </label>
					    <input type="text" class="form-control" id="name">
				</div>

				<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd">
			 	</div>
				  <button type="submit" class="btn btn-default btn-block" style="background-color: grey">Login</button>


	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>  



<!--About Starts-->

	<section class="container-fluid" id="about" style="color: grey">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center v-center">About</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>

<!--About Ends-->

<!--Contact Starts-->

	<section class="container-fluid" id="contact" >
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center v-center">Contact</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>

<!--Contact Ends-->

<!--Syllabus Starts-->

	<section class="container-fluid" id="syllabus" >
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center v-center">Syllabus</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>
				
<!--Syllabus Ends-->

</body>
</html>