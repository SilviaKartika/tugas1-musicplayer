CREATE DATABASE dbuts;

CREATE TABLE tb_artist(
	artist_id smallint(5) AUTO_INCREMENT,
	artist_name char(128) NOT NULL,
	PRIMARY KEY (artist_id)
);


CREATE TABLE tb_album (
	album_id smallint(4) AUTO_INCREMENT,
	artist_id smallint(5) NOT NULL,
	album_name char(128) NOT NULL,
	PRIMARY KEY (album_id),
	FOREIGN KEY(artist_id) REFERENCES tb_artist(artist_id)
);

CREATE TABLE tb_track(
	track_id smallint(3) AUTO_INCREMENT,
	track_name char(128) NOT NULL,
	artist_id smallint(5) NOT NULL,
	album_id smallint(4) NOT NULL,
	waktu decimal (5,2) NOT NULL,
	PRIMARY KEY (track_id),
	FOREIGN KEY(artist_id) REFERENCES tb_artist(artist_id),
	FOREIGN KEY(album_id) REFERENCES tb_album(album_id)
);

CREATE TABLE tb_played(
	artist_id smallint(5) NOT NULL,
	album_id smallint(4) NOT NULL,
	track_id smallint(3) NOT NULL,
	played timestamp DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY(artist_id) REFERENCES tb_artist(artist_id),
	FOREIGN KEY(album_id) REFERENCES tb_album(album_id),
	FOREIGN KEY(track_id) REFERENCES tb_track(track_id)
);

CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(100) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	user_email VARCHAR(100) NOT NULL,
	user_nama_lengkap VARCHAR(100) NOT NULL,
	user_role CHAR(2) DEFAULT '2',
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name, user_email)
);

