-- use database MUZUNKA;
--@block
CREATE TABLE likedSongs (
    id int NOT NULL AUTO_INCREMENT Primary key,
    user_id int NOT NULL, 
    song_id int NOT NULL,
    liked_date timestamp,
    Liked_status BINARY,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (song_id) REFERENCES songs(id)
);
--@block
CREATE TABLE users (
    id int AUTO_INCREMENT Primary key,
    username varchar(20),
    email varchar(255),
    Password_key varchar(60)
);
--@block
CREATE TABLE songs (
    id int AUTO_INCREMENT Primary key,
    title varchar(50),
    album varchar(50),
    artist varchar(50),
    filePath varchar(255),
    palyCount int,
    likeCount int
);
--@block
CREATE TABLE playlist (
    id int AUTO_INCREMENT Primary key,
    title varchar(50),
    createdBy int,
    FOREIGN KEY (createdBy) REFERENCES users(id)
);
--@block
CREATE TABLE playlistSongs (
    id int AUTO_INCREMENT Primary key,
    playlist_id int,
    song_id int,
    addedBy int,
    FOREIGN KEY (playlist_id) REFERENCES playlist(id),
    FOREIGN KEY (song_id) REFERENCES songs(id),
    FOREIGN KEY (addedBy) REFERENCES users(id)
);
-- poe
--@block
CREATE TABLE user (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  user_type CHAR(1),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
--@block
CREATE TABLE song (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  artist VARCHAR(255) NOT NULL,
  album VARCHAR(255),
  genre VARCHAR(50),
  duration INT,
  file_location VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--@block
CREATE TABLE playlists (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  user_id INT NOT NULL,
  created_by CHAR(1),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
--@block
CREATE TABLE playlist_songs (
  playlist_id INT NOT NULL,
  song_id INT NOT NULL
);

--@block
CREATE TABLE likes (
  user_id INT NOT NULL,
  song_id INT NOT NULL
);
--@block
CREATE TABLE Albums (
  album_id INT PRIMARY KEY AUTO_INCREMENT,
  album_title VARCHAR(255) NOT NULL,
  album_artist VARCHAR(255) NOT NULL,
  album_release_year INT,
  album_genre VARCHAR(255),
  album_cover_image_url VARCHAR(255),
  album_description TEXT
);
--@block
ALTER TABLE Albums
ADD COLUMN num_songs INT;
--@block
CREATE TABLE Artists (
  artist_id INT PRIMARY KEY AUTO_INCREMENT,
  artist_name VARCHAR(255) NOT NULL,
  artist_image_url VARCHAR(255),
  artist_bio TEXT
);