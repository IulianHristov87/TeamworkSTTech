DROP DATABASE IF EXISTS foodblogdb;

CREATE DATABASE foodblogdb CHARACTER SET utf8;

USE foodblogdb;

CREATE TABLE users
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password_hash VARCHAR(100),
  email VARCHAR(45),
  full_name VARCHAR(200)
);

CREATE UNIQUE INDEX username_UNIQUE ON users (username);

CREATE TABLE posts
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(300) NOT NULL,
    content TEXT NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    authorid INT(11),
    category VARCHAR(45)
    CONSTRAINT fk_users_posts FOREIGN KEY (authorid) REFERENCES users (id)
);

CREATE INDEX fk_users_posts_idx ON posts (authorid);
