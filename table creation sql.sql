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
	tourn_ID INT NOT NULL AUTO_INCREMENT,
	loc_ID INT NOT NULL,
	PRIMARY KEY ( tourn_ID, loc_ID ),
	FOREIGN KEY ( tourn_ID ) REFERENCES Tournament ( tourn_ID ),
	FOREIGN KEY ( loc_ID ) REFERENCES Location ( loc_ID )
);

CREATE TABLE Team(
	team_ID INT NOT NULL AUTO_INCREMENT,
	team_num INT,
	team_name VARCHAR(40),
	bracket_position INT,
	tourn_ID INT,
	PRIMARY KEY ( team_ID ),
	FOREIGN KEY ( tourn_ID ) REFERENCES Tournament ( tourn_ID )
);

# Potential flaw!
# should we remove loc_ID as part of the primary key and add team1, team2?
# logic -> there may be a whole bunch of games at once that do not have a location (aka location=other)
# However there will never be more than one game at a time in which a given team will be playing in
# 
# Additionally, make sure that Game_Team_Junc is not redundant

CREATE TABLE Game(
	time DATETIME, 
	team1_ID INT,
	team2_ID INT,
	loc_ID INT,
	tourn_ID INT,
	PRIMARY KEY ( time, loc_ID ),
	FOREIGN KEY ( team1_ID ) REFERENCES Team ( team_ID ),
	FOREIGN KEY ( team2_ID ) REFERENCES Team ( team_ID ),
	FOREIGN KEY ( loc_ID ) REFERENCES Location ( loc_ID ),
	FOREIGN KEY ( tourn_ID ) REFERENCES Tournament ( tourn_ID )
);

CREATE TABLE Player(
	player_ID INT NOT NULL AUTO_INCREMENT,
	player_name VARCHAR(50),
	email VARCHAR(50),
	isCaptain BOOLEAN,
	team_ID INT,
	PRIMARY KEY ( player_ID ),
	FOREIGN KEY ( team_ID ) REFERENCES Team ( team_ID )
);

CREATE TABLE Game_Team_Junc(
	time DATETIME,
	loc_ID INT,
	team1_ID INT,
	team2_ID INT,
	PRIMARY KEY ( time, loc_ID, team1_ID, team2_ID ),
	FOREIGN KEY ( time, loc_ID ) REFERENCES Game ( time, loc_ID ),
	FOREIGN KEY 
);

CREATE TABLE Player_Team_Junc(
	player_ID,
	team_ID
);

