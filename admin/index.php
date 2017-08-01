
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin Area | Dashboard </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin_style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Panel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li><a href="pages.php">Pages</a></li>
            <li><a href="questions.php">Questions</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>

           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome Nischal</a></li>
            <li><a href="login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage"> Add Multiple choice</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addQuestions"> Add Word questions</a></li>
               <!--  <li><a type="button" data-toggle="modal" data-target="#addUser" >Add User</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
           
            <div class="list-group">
              <a href="index.php" class="list-group-item" style="background-color: grey;">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Multiple choice <span class="badge">12</span></a>
              <a href="quetions.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Word Questions <span class="badge">101</span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">5</span></a>
            </div>
    
            <!-- <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  60%
                </div>
              </div>

              <h4>Bandwidth</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                  60%
                </div>
              </div>
            </div> -->

          </div>
          <div class="col-md-9">
    
            <!--Website Overview-->

            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: grey">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>203</h2>
                    <h4> Users </h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>12</h2>
                    <h4> Pages </h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>232</h2>
                    <h4> Questions </h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>1300</h2>
                    <h4> Visitors </h4>
                  </div>
                </div>
              </div>
            </div>

          <!--Latest Users -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Latest Users</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Joined date</th>
                </tr>

                <tr>
                  <td>Ram</td>
                  <td>Ram@gmail.com</td>
                  <td>2017/12/3</td>
                </tr>
                <tr>
                  <td>Ram</td>
                  <td>Ram@gmail.com</td>
                  <td>2017/12/3</td>
                </tr>
                <tr>
                  <td>Ram</td>
                  <td>Ram@gmail.com</td>
                  <td>2017/12/3</td>
                </tr>
                <tr>
                  <td>Ram</td>
                  <td>Ram@gmail.com</td>
                  <td>2017/12/3</td>
                </tr>
                <tr>
                  <td>Ram</td>
                  <td>Ram@gmail.com</td>
                  <td>2017/12/3</td>
                </tr>
              </table>
            </div>
          </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright OES, &copy; 2017</p>
    </footer>

    <!--Modals-->

    <!--Add Page Modal-->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
        <form>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Page</h4>
          </div>
         
          <div class="modal-body">
            <div class="form-group">
              <label>Page Title</label>
              <input type="text" class="form-control" placeholder="Page Title" >
            </div>
            
            <div class="form-group">
              <label>Page Body</label>
             <textarea name="editor1" class="form-control" placeholder="page Body"></textarea>
            </div>

            <div class="checkbox">
                <label><input type="checkbox">Published</label>
            </div>

            <div class="form-group">
              <label>Meta Tags</label>
              <input type="text" class="form-control" placeholder="Add some Tags ....." >
            </div>

            <div class="form-group">
              <label>Meta Description</label>
              <input type="text" class="form-control" placeholder="Add meta Descriptions ...." >
            </div>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>

        </form>
        </div>
      </div>
    </div>

  

    <script>
         CKEDITOR.replace( 'editor1' );
    </script>

 <!--Add Questions Modal-->
    <div class="modal fade" id="addQuestions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
        <form>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Questions</h4>
          </div>
         
          <div class="modal-body">

            <div class="form-group">
              <label>Add Questions</label>
              <input type="text" class="form-control" placeholder="Type here" >
            </div>

            <div class="form-group">
              <label>Option 1</label>
              <input type="text" class="form-control" placeholder="Add Option 1" >
            </div>

            <div class="form-group">
              <label>Option 2</label>
              <input type="text" class="form-control" placeholder="Add Option 2" >
            </div>

            <div class="form-group">
              <label>Option 3</label>
              <input type="text" class="form-control" placeholder="Add Option 3" >
            </div>

            <div class="form-group">
              <label>Option 4</label>
              <input type="text" class="form-control" placeholder="Add Option 4" >
            </div>

            <div class="form-group">
              <label>Right Answer</label>
              <input type="text" class="form-control" placeholder="Add correct answer" >
            </div>

            <div class="checkbox-inline">
              <label><input type="checkbox" value="">BSc CSIT</label>
            </div>
            <div class="checkbox-inline">
              <label><input type="checkbox" value="">MBBS</label>
            </div>
            <div class="checkbox-inline">
              <label><input type="checkbox" value="">Engineering</label>
            </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save changes</button>
          </div>

        </form>
        </div>
      </div>
    </div>

  

    <script>
         CKEDITOR.replace( 'editor2' );
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
