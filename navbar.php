<!-- inculde ico -->
<link rel="shortcut icon" href="/cse30246/showerswithdata/projectdetails/Databases_Project/images/bracket.ico" type="image/x-icon" />

<nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/cse30246/showerswithdata/projectdetails/Databases_Project/project.php">Tournament Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="project"><a href="http://dsg1.crc.nd.edu/cse30246/showerswithdata/projectdetails/Databases_Project/project.php">Home<span class="sr-only">(current)</span></a></li>
        <li id="bracket"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/bracket.php">Bracket</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="add_team"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/add_team.php">Add Team</a></li>
            <li><a href="#">Join Team</a></li>
	    <li id="edit_team"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/select_edit_team.php">Edit Team</a></li>
            <li><a href="#">View Teams</a></li>
            <li id="add_tournament"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/add_tournament.php">Add Tournament</a></li>
            <!--<li role="separator" class="divider"></li>-->
          </ul>
        </li>
      </ul>

		<!--Search and Submit Button-->
      <!--<form class="navbar-form navbar-left" role="search">-->
        <!--<div class="form-group">-->
          <!--<input type="text" class="form-control" placeholder="Search">-->
        <!--</div>-->
        <!--<button type="submit" class="btn btn-default">Submit</button>-->
     <!-- </form>-->
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="add_captain"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/add_captain.php">Become a Captain!</a></li>
            <li><a href="http://dsg1.crc.nd.edu/cse30246/showerswithdata/projectdetails/Databases_Project/login.php">Captain Login</a></li>
            <li><a href="https://docs.google.com/spreadsheets/d/1lC1O1luGX0-w_WRheogBOd6byDswHL6mbDpxjoujP-4/edit#gid=1386834576">To-Do!</a></li>
            <li id="signout"><a href="http://dsg1.crc.nd.edu/cse30246/showerswithdata/projectdetails/Databases_Project/signout.php">Sign Out</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div style="height: 50px"></div>

<!--active link in navbar-->
<script>
	var filename = window.location.pathname;
	var m = filename.search(/\/[^\/]*$/);
	var n = filename.search(/\.[^\.]*$/);
	document.getElementById(filename.substring(m+1,n)).className+="active";
</script>

<!--Plugins for each webpage-->
	<!--Bootstrap-->
	<link href="css/bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/css/bootstrap.css" rel = "stylesheet">

	<!-- jQuery, needed for JS plugins -->
	<script src="https://code.jquery.com/jquery.js"></script>

	<!-- inculde plugins -->
	<script src="css/bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

