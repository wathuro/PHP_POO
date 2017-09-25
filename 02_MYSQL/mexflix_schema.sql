/*
Internet Movies DataBase: http://www.imdb.com
*/
CREATE DATABASE IF NOT EXISTS mexflix;
USE mexflix;

CREATE TABLE movieseries(
    imdb_id CHAR(9) PRIMARY KEY,
    title VARCHAR(80) NOT NULL,
    plot TEXT,
    author VARCHAR(100) DEFAULT 'Pending',
    actors VARCHAR(100) DEFAULT 'Pending',
    country VARCHAR(100) DEFAULT 'Unknown',
    premiere YEAR(4) NOT NULL,
    poster VARCHAR(150) DEFAULT 'no-poster.jpg',
    trailer VARCHAR(150) DEFAULT 'no-trailer.jpg',
    rating DECIMAL(2,1),
    genres VARCHAR(50) NOT NULL,
    status INTEGER UNSIGNED NOT NULL,
    category ENUM('Movie', 'Serie') NOT NULL, 
);

/* Tabala Catálogo */
CREATE TABLE status(
    status_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    status VARCHAR(20) NOT NULL
);

CREATE TABLE users(
    user VARCHAR(15) PRIMARY KEY,
    email VARCHAR(80) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    birthday DATE NOT NULL,
    pass CHAR(32) NOT NULL,
    role ENUM('Admin', 'User') NOT NULL
);
