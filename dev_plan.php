<html>
<head>
	<title>Development Plan</title>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	<link href = "bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/css/bootstrap.css" rel = "stylesheet">

</head>
<body>
	<h1>Development Plan</h1>
	<h4>Relational Schema</h4>
	<ul>
<b>The following are our relationships that are not yet shown in the ER Diagram:</b>
		<li>Location 	*----* 	Tournament</li>
		<li>Tournament (----* 	Game</li>
		<li>Tournament (----* 	Team</li>
		<li>Game 		*----*) 	Team</li>
		<li>Player 		*----*) 	Team</li>
	<br/>
<b>Relational Schema:</b>
		<li>Tournament(<u>tourn_ID</u>, sport)</li>
		<li>Location(<u>loc_ID</u>, loc_name, type)</li>
		<li>Tourn_Loc_Junc(<i><u>tourn_ID</u>, <u>loc_ID</u></i>)</li>
		<li>Game(<u>time, team1_ID, team2_ID,</u> <i>loc_ID, tourn_ID </i>)</li>
		<li>Team(<u>team_ID</u>, team_num, team_name, bracket_position, <i>tourn_ID</i>)</li>
		<li>Player(<u>player_ID</u>, player_name, email, isCaptain, student_ID, <i>team_ID</i>)</li>
	</ul>	

	<h4>Databases/ Software</h4>
		<p>The database systems and software languages that we will be using for this project are HTML, MySQL, CSS, JavaScript, and PHP.</p>
	
	<h4>Data Source</h4>
	<p>We will be collecting for our data from multiple sources. To test that our application is working properly we will use past NCAA March Madness brackets. Once we are sure that this is working we will then open up the application to user input/create random teams to test for cases with a larger amount of teams (e.g. Bookstore Basketball Tournament).</p>

	<h4>Division of Labor</h4>
	<ul>
	<li>Patrick: Web Dev, Server Side Logic </li> 
	<li>Ryan:  Server Side Logic, Client Side Logic</li>
	<li>Kris: Advanced Bracket Function, Web Dev, Data Collection </li>
	<li>Nick: Advanced Bracket Function, Database Manager</li>	

	</ul>
	<h4>Project Timeline</h4>
	<ol>
	<li>Oct. 10th Basic Web Layout and Design</li>
	<li>Oct. 26th More Complete Data Layout with Logic Improvments</li>
	<li>Nov. 1st Initial In House Test</li>
	<li>Nov. 3rd Initial Demo</li>
	</ol>
		
</body>
</html>
