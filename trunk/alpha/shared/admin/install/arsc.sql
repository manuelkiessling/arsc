CREATE TABLE arsc_messages(
messageID BIGINT NOT NULL AUTO_INCREMENT,
siteID INT NOT NULL,
message TEXT NOT NULL,
scope VARCHAR(255) NOT NULL,
time INT NOT NULL,
FOREIGN KEY (siteID) REFERENCES arsc_sites (siteID),
PRIMARY KEY (messageID),
UNIQUE UC_messageID (messageID),
);


CREATE TABLE arsc_siteUsers(
siteUserID INT NOT NULL AUTO_INCREMENT,
siteID INT NOT NULL,
regPrivateID INT NOT NULL,
regPublicID INT NOT NULL,
user VARCHAR(20) NOT NULL,
pass VARCHAR(20) NOT NULL,
link VARCHAR(255),
locked TINYINT NOT NULL,
FOREIGN KEY (siteID) REFERENCES arsc_sites (siteID),
FOREIGN KEY (regPrivateID) REFERENCES arsc_regPrivate (regPrivateID),
FOREIGN KEY (regPublicID) REFERENCES arsc_regPublic (regPublicID),
PRIMARY KEY (siteUserID),
UNIQUE UC_siteUserID (siteUserID),
UNIQUE UC_siteUser (siteID,user)
);


CREATE TABLE arsc_regPrivate(
regPrivateID INT NOT NULL AUTO_INCREMENT,
firstName VARCHAR(255) NOT NULL,
lastName VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
level TINYINT NOT NULL,
buddyList TEXT,
PRIMARY KEY (regPrivateID),
UNIQUE UC_regPrivateID (regPrivateID)
);


CREATE TABLE arsc_regPublic(
regPublicID INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255),
email VARCHAR(255),
link1 VARCHAR(255),
link2 VARCHAR(255),
link3 VARCHAR(255),
icq INT,
aim VARCHAR(255),
msn VARCHAR(255),
yahoo VARCHAR(255),
info TEXT,
PRIMARY KEY (regPublicID),
UNIQUE UC_regPublicID (regPublicID)
);


CREATE TABLE arsc_sessions(
sessionID INT NOT NULL AUTO_INCREMENT,
siteID INT NOT NULL
roomID INT NOT NULL
sid VARCHAR(32) NOT NULL,
user VARCHAR(20) NOT NULL,
nick VARCHAR(20) NOT NULL,
level TINYINT NOT NULL,
ip VARCHAR(15) NOT NULL,
lastPing INT NOT NULL,
lastMsgPing INT NOT NULL,
language VARCHAR(20) NOT NULL,
color VARCHAR(7) NOT NULL,
version VARCHAR(20) NOT NULL,
blocked TINYINT NOT NULL,
selfop VARCHAR(20),
FOREIGN KEY (siteID) REFERENCES arsc_sites (siteID),
FOREIGN KEY (roomID) REFERENCES arsc_rooms (roomID),
PRIMARY KEY (sessionID),
UNIQUE UC_sessionID (sessionID),
UNIQUE UC_sid (sid),
UNIQUE UC_ip (ip),
UNIQUE UC_siteUser (siteID,user),
UNIQUE UC_siteNick (siteID,nick)
);


CREATE TABLE arsc_banList(
banListID INT NOT NULL AUTO_INCREMENT,
siteID INT NOT NULL,
ip VARCHAR(15) NOT NULL,
until INT NOT NULL,
FOREIGN KEY (siteID) REFERENCES arsc_sites (siteID),
PRIMARY KEY (banListID),
UNIQUE UC_banListID (banListID)
);


CREATE TABLE arsc_sites(
siteID INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
path VARCHAR(255) NOT NULL,
PRIMARY KEY (siteID),
UNIQUE UC_siteID (siteID),
UNIQUE UC_name (name),
UNIQUE UC_path (path)
);


CREATE TABLE arsc_rooms(
roomID INT NOT NULL AUTO_INCREMENT,
siteID INT NOT NULL,
name VARCHAR(255) NOT NULL,
topic VARCHAR(255) NOT NULL,
visible TINYINT NOT NULL,
permanent TINYINT NOT NULL,
FOREIGN KEY (siteID) REFERENCES arsc_sites (siteID),
PRIMARY KEY (roomID),
UNIQUE UC_roomID (roomID)
);


CREATE TABLE arsc_params(
paramID INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
choices VARCHAR(255) NOT NULL,
desc TEXT NOT NULL,
PRIMARY KEY (paramID),
UNIQUE UC_paramID (paramID)
);


CREATE TABLE arsc_siteParams(
siteID INT NOT NULL,
paramID INT NOT NULL,
value VARCHAR(255) NOT NULL default '',
FOREIGN KEY (siteID) REFERENCES arsc_sites (siteID),
FOREIGN KEY (paramID) REFERENCES arsc_params (paramID),
PRIMARY KEY (siteID,paramID)
);


CREATE TABLE arsc_systemLog(
siteID INT NOT NULL,
lastLogID BIGINT NOT NULL DEFAULT 0,
FOREIGN KEY (siteID) REFERENCES arsc_sites (siteID),
PRIMARY KEY (lastLogID)
);

CREATE TABLE arsc_smileys(
smileyID INT NOT NULL AUTO_INCREMENT,
value VARCHAR(32) NOT NULL default '',
PRIMARY KEY (smileyID)
);

# not sure yet if the following will be used, but they are for enforcing referential integrity in MySQL, since it doesn't honor foreign keys

CREATE TABLE arsc_siteRooms(
siteID INT NOT NULL,
roomID INT NOT NULL,
FOREIGN KEY (siteID) REFERENCES arsc_sites (siteID),
FOREIGN KEY (roomID) REFERENCES arsc_rooms (roomID),
PRIMARY KEY (siteID,roomID)
);


CREATE TABLE arsc_roomMessages(
roomID INT NOT NULL,
messageID INT NOT NULL,
FOREIGN KEY (roomID) REFERENCES arsc_rooms (roomID),
FOREIGN KEY (messageID) REFERENCES arsc_messages (messageID),
PRIMARY KEY (roomID,messageID)
);


CREATE TABLE arsc_roomSessions(
roomID INT NOT NULL,
sessionID INT NOT NULL,
FOREIGN KEY (roomID) REFERENCES arsc_rooms (roomID),
FOREIGN KEY (sessionID) REFERENCES arsc_sessions (sessionID),
PRIMARY KEY (roomID,sessionID)
);


CREATE TABLE arsc_sessionMessages(
messageID INT NOT NULL,
sessionID INT NOT NULL,
FOREIGN KEY (messageID) REFERENCES arsc_messages (messageID),
FOREIGN KEY (sessionID) REFERENCES arsc_sessions (sessionID),
PRIMARY KEY (messageID,sessionID)
);


CREATE TABLE arsc_sessionSiteUsers(
sessionID INT NOT NULL,
siteUserID INT NOT NULL,
FOREIGN KEY (sessionID) REFERENCES arsc_sessions (sessionID),
FOREIGN KEY (siteUserID) REFERENCES arsc_siteUsers (siteUserID),
PRIMARY KEY (sessionID,siteUserID)
);

