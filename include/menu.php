<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="" href="<?=$base_url?>">
        <img src="lib/img/logo1.png" class="img-responsive" alt="OES" width="100px">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav ">
         <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="#syllabus">Syllabus</a></li>
      </ul>

      <form class="navbar-form navbar-right">
       
          <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#loginModal" style="background-color: grey">Login</button>

          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#signupModal" style="background-color: grey">SignUp</button>

      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>