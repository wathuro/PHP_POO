/*
Internet Movies Data Base: http://www.imdb.com
Data Base open : http://www.omdbapi.com/
*/
DROP DATABASE IF EXISTS mexflix;

CREATE DATABASE IF NOT EXISTS mexflix;
USE mexflix;

/* Tabala Catálogo */
CREATE TABLE status(
    status_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    status VARCHAR(20) NOT NULL
);

/* Tabala Datos */
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
    FULLTEXT KEY search(title, author, actors, genres),
    FOREIGN KEY (status) REFERENCES status(status_id)
        ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE users(
    user VARCHAR(15) PRIMARY KEY,
    email VARCHAR(80) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    birthday DATE NOT NULL,
    pass CHAR(32) NOT NULL,
    role ENUM('Admin', 'User') NOT NULL
);

/* Insertando Datos */
INSERT INTO status (status_id, status) VALUES
    (1, 'Coming Soon'),
    (2, 'Release'),
    (3, 'In Issue'),
    (4, 'Finished'),
    (5, 'Canceled');

INSERT INTO users (user, email, name, birthday, pass, role) VALUES
    ('@rosmel', 'aguilar097@gmail.com', 'Rosmel AR', '1988-08-04', MD5('rosmel'), 'Admin'),
    ('@user', 'user@gmail.com', 'Usuario Mortal', '2000-08-20', MD5('user'), 'User');

INSERT INTO movieseries (imdb_id, title, plot, author, actors, country, premiere, poster, trailer, rating, genres, status, category) VALUES
    ('tt0075148', 'Rocky', 'Rocky Balboa, a small-time boxer, gets a supremely rare chance to fight heavy-weight champion Apollo Creed in a bout in which he strives to go the distance for his self-respect.', 'Sylvester Stallone', 'Sylvester Stallone, Talia Shire, Burt Young', 'USA', '2006', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTY5MDMzODUyOF5BMl5BanBnXkFtZTcwMTQ3NTMyNA@@._V1_SY1000_CR0,0,666,1000_AL_.jpg', 'https://www.youtube.com/watch?v=3VUblDwa648', 9.0, 'Drama, Action', 2, 'Movie'),
    ('tt0848228', 'Los Vengadores', 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity.', ' Joss Whedon', '	Chris Evans, Mark Ruffalo, Jeremy Renner', 'USA', '2012', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTk2NTI1MTU4N15BMl5BanBnXkFtZTcwODg0OTY0Nw@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=3PyrgGTFp0E', 8.1, 'Action, Adventure', 3, 'Movie');


