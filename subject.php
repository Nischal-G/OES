<?php include 'global.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include 'include/lib.php'; ?>
</head>

<body style="background-color: #e6e3ee">
	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="" href="<?=$base_url?>">
        <img src="lib/img/logo1.png" class="img-responsive" alt="OES" width="100px">
      </a> -->
      <a class="navbar-brand" href="<?=$base_url?>">Online Examination</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

     <!--  <ul class="nav navbar-nav ">
         <li><a href="#home">Home</a></li>
        <li><a href="#feature">Features</a></li>
        <li><a href="#syllabus">Syllabus</a></li>
      </ul> -->

      <form class="navbar-form navbar-right">
       
          <button type="button" class="btn btn-sm"  data-toggle="modal" id="logout" >LogOut</button>
          <script type="text/javascript">
    					document.getElementById("logout").onclick = function () {
       						location.href = "index.php";
    					 };
					</script>

      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 style="text-align: center;">Welcome our valuable users</h2>
			<p style="text-align: center;">You can select the subject of your field from the subject list and practice</p>
			<h3 style="text-align: center;">Feel free to learn</h3>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<!-- <div class="col-md-4"></div>
		
		<div class="col-md-4">
			<br><br><h3 style="text-align: center;">Choose Exam</h3><br><br><br>
			<button type="button" class="btn btn-lg btn-block" data-toggle="modal" id="mul"> Multiple Choice Questions </button>
				 <script type="text/javascript">
    					document.getElementById("mul").onclick = function () {
       						location.href = "exam.php";
    					 };
					</script>
			<br><br><br>
			<button type="button" class="btn btn-lg btn-block" data-toggle="modal" id="word"> Word Questions </button>
				 <script type="text/javascript">
    					document.getElementById("word").onclick = function () {
       						location.href = "exam.php";
    					 };
					</script>
		</div>

		<div class="col-md-4"></div> -->
		<div class="col-md-12">
			<br><div class="panel panel-default">
			  <div class="panel-heading">
			  <!-- 	<h4 style="margin-left: 50px;">
			  		<p><b>User name:</b></p> <br>
			  		<p><b>Roll No.:</b></p>
			  	</h4> --></div>
			  <div class="panel-body">
					<h1 style="text-align: center;">Choose Exam</h1><br>
			<button type="button" class="btn btn-lg btn-block" data-toggle="modal" id="mul"> Multiple Choice Questions </button>
				 <script type="text/javascript">
    					document.getElementById("mul").onclick = function () {
       						location.href = "multiple.php";
    					 };
					</script>
			<br><br>
			<button type="button" class="btn btn-lg btn-block" data-toggle="modal" id="word"> Word Questions </button>
				 <script type="text/javascript">
    					document.getElementById("word").onclick = function () {
       						location.href = "word.php";
    					 };
					</script>
			  </div>
		</div>
	</div>
</div>

<div class="container-fluid" id="footer" style="background-color: black">
	<div class="row">
		<div class="col-md-12">
			<br>
			<p class="text-center v-center" style="color: white">All rights reserved. Copyright @OES team. Team Online Examination System 2017</p><br>
		</div>
	</div>
</div>
</body>

</html>