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