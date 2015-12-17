<!-- inculde ico -->
<?php 
	session_start();
?>

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
        <li id="select_bracket"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/select_bracket.php">Bracket</a></li>
        <li class="dropdown" id="user_dropdown" style="display: none;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="add_team"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/add_team.php">Add Team</a></li>
            <!-- <li><a href="#">Join Team</a></li> -->
	    <li id="edit_team"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/select_edit_team.php">Edit Team</a></li>
<!--            <li id="view_tournament"><a href="http://dsg1.crc.nd.edu/cse30246/showerswithdata/projectdetails/Databases_Project/view_tournament.php">View Tournament</a></li> -->
            <li id="add_tournament"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/add_tournament.php">Add Tournament</a></li> 
<!--            <li id="add_player"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/create_player.php">Add Player</a></li> -->
	    <li id="select_schedule_games"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/select_schedule_games.php">Schedule Games</a></li>
	 <!--   <li id="update_game_scores"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/update_scores.php">Update Scores</a></li> -->
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
	<?php
		if($_SESSION) {
			echo '<script>document.getElementById("user_dropdown").style.display = "block";</script>';
			$link = mysqli_connect('localhost', 'nlombard', 'dad?')
				or die ('Could not connect: ' . mysql_error());
			
			mysqli_select_db($link, 'nlombard') or die ('Could not connect to database');
			
			$stmt1 = $link->prepare('select fname from Player where email = ?;');
			$email = $_SESSION["email"];
			$stmt1->bind_param("s", $email);
			$stmt1->execute();
			$stmt1->bind_result($query_fname);
			$stmt1->fetch();
			echo '<li height=100%; style="position: fixed;">Hello, ',$query_fname,'</li>';

			mysqli_close($link);
		}
	?>
        <!--<li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="add_captain"><a href="/cse30246/showerswithdata/projectdetails/Databases_Project/add_captain.php">Sign Up!</a></li>
            <li id="login"><a href="http://dsg1.crc.nd.edu/cse30246/showerswithdata/projectdetails/Databases_Project/login.php">Login</a></li>
            <li id="signout"><a href="http://dsg1.crc.nd.edu/cse30246/showerswithdata/projectdetails/Databases_Project/signout.php">Log Out</a></li>
            <li><a href="https://docs.google.com/spreadsheets/d/1lC1O1luGX0-w_WRheogBOd6byDswHL6mbDpxjoujP-4/edit#gid=1386834576">To-Do!</a></li>
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

<!--//document.getElementById("login").style.visibility = "none";-->
<!--//document.getElementById("login").style.visibility = "none";--> 

	<!--Plugins for each webpage--> <!--Bootstrap--> <link href="css/bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/css/bootstrap.css" rel = "stylesheet">

	<!-- jQuery, needed for JS plugins -->
	<script src="https://code.jquery.com/jquery.js"></script>

	<!-- inculde plugins -->
	<script src="css/bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css_sedna/normalize.min.css">
    <link rel="stylesheet" href="css_sedna/bootstrap.min.css">
    <link rel="stylesheet" href="css_sedna/jquery.fancybox.css">
    <link rel="stylesheet" href="css_sedna/flexslider.css">
    <link rel="stylesheet" href="css_sedna/styles.css">
    <link rel="stylesheet" href="css_sedna/queries.css">
    <link rel="stylesheet" href="css_sedna/etline-font.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


