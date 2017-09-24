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
    status,
    category,
);
