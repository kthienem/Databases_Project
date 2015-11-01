CREATE TABLE Tournament(
	tourn_ID INT NOT NULL AUTO_INCREMENT,
	sport VARCHAR(30) NOT NULL,
	PRIMARY KEY ( tourn_ID )
);

CREATE TABLE Location(
	loc_ID INT NOT NULL AUTO_INCREMENT,
	loc_name VARCHAR(60) NOT NULL,
	sport VARCHAR(30),
	PRIMARY KEY ( loc_ID )
);

CREATE TABLE Tourn_Loc_Junc(
	tourn_ID INT NOT NULL,
	loc_ID INT NOT NULL,
	PRIMARY KEY ( tourn_ID, loc_ID ),
	FOREIGN KEY ( tourn_ID ) REFERENCES Tournament ( tourn_ID ) ON UPDATE CASCADE,
	FOREIGN KEY ( loc_ID ) REFERENCES Location ( loc_ID ) ON UPDATE CASCADE
);

CREATE TABLE Team(
	team_ID INT NOT NULL AUTO_INCREMENT,
	team_num INT,
	team_name VARCHAR(40),
	bracket_position INT,
	tourn_ID INT,
	PRIMARY KEY ( team_ID ),
	FOREIGN KEY ( tourn_ID ) REFERENCES Tournament ( tourn_ID ) ON UPDATE CASCADE
);

CREATE TABLE Game(
	time DATETIME NOT NULL, 
	team1_ID INT,
	team2_ID INT,
	loc_ID INT,
	tourn_ID INT,
	points1 INT,
	points2 INT,
	team1_result BOOLEAN,
	PRIMARY KEY ( time, team1_ID, team2_ID ),
	FOREIGN KEY ( team1_ID ) REFERENCES Team ( team_ID ) ON UPDATE CASCADE,
	FOREIGN KEY ( team2_ID ) REFERENCES Team ( team_ID ) ON UPDATE CASCADE,
	FOREIGN KEY ( loc_ID ) REFERENCES Location ( loc_ID ) ON UPDATE CASCADE,
	FOREIGN KEY ( tourn_ID ) REFERENCES Tournament ( tourn_ID ) ON UPDATE CASCADE
);

CREATE TABLE Player(
	player_ID INT NOT NULL AUTO_INCREMENT,
	player_name VARCHAR(50),
	email VARCHAR(50),
	isCaptain BOOLEAN,
	student_ID VARCHAR(20),
	team_ID INT,
	PRIMARY KEY ( player_ID ),
	FOREIGN KEY ( team_ID ) REFERENCES Team ( team_ID ) ON UPDATE CASCADE
);

#CREATE TABLE Game_Team_Junc(
#	time DATETIME,
#	team1_ID INT,
#	team2_ID INT,
#	PRIMARY KEY ( time, team1_ID, team2_ID ),
#	FOREIGN KEY ( time ) REFERENCES Game ( time ),
#	FOREIGN KEY 
#);
#CREATE TABLE Player_Team_Junc(
#	player_ID,
#	team_ID
#);