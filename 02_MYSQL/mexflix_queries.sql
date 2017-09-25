INSERT INTO movieseries SET imdb_id = 'tt3749900',title = 'Gotham', genres = 'Crime, Drama, Thriller', premiere = '2014', status = 3;

UPDATE movieseries SET author = 'Bruno Heller', actors = 'Ben McKenzie, Donal Logue, David Mazouz', country = 'USA', rating = 9.3, poster = 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2f/Gotham_%28season_3%29.jpg/220px-Gotham_%28season_3%29.jpg', trailer = 'https://www.youtube.com/watch?v=ysfvCuhoj-k', category = 'Serie', plot = 'The third season of the American television series Gotham, based on characters from DC Comics related to the Batman franchise, revolves around the characters of James Gordon and Bruce Wayne. The season is produced by Primrose Hill Productions, DC Entertainment, and Warner Bros. Television, with Bruno Heller, Danny Cannon, John Stephens, and Ken Woodruff serving as executive producers.' WHERE imdb_id = 'tt3749900';

/* Queries CRUD */
DELETE FROM movieseries WHERE imdb_id = 'tt3749900';

SELECT * FROM movieseries;

SELECT COUNT(*) FROM movieseries;

SELECT * FROM movieseries WHERE category = 'Serie';

SELECT title, category, genres, premiere, country, status FROM movieseries WHERE category = 'Serie';

SELECT title, category, genres, premiere, country, status FROM movieseries WHERE category = 'Serie' ORDER BY premiere;

SELECT title, category, genres, premiere, country, status FROM movieseries WHERE category = 'Movie' AND country ='USA' ORDER BY premiere;

SELECT title, category, genres, premiere, country, status FROM movieseries WHERE genres LIKE '%Drama%' ORDER BY premiere;

SELECT title, category, genres, premiere, country, status FROM movieseries WHERE status = 1 OR status = 2 ORDER BY premiere;

/* Queries multiple */
SELECT * FROM movieseries AS ms INNER JOIN status AS s ON ms.status = s.status_id;

SELECT ms.title, ms.category, ms.country, ms.genres, ms.premiere, s.status FROM movieseries AS ms INNER JOIN status AS s ON ms.status = s.status_id ORDER BY ms.premiere DESC;

SELECT ms.title, ms.category, ms.country, ms.genres, ms.premiere, s.status FROM movieseries AS ms INNER JOIN status AS s ON ms.status = s.status_id WHERE s.status = 'Canceled' OR s.status = 'Coming Soon' ORDER BY ms.premiere;

/* Queries FullText Key */
SELECT * FROM movieseries WHERE MATCH(title, author, actors, genres) AGAINST('stallone' IN BOOLEAN MODE);

SELECT ms.title, ms.category, ms.country, ms.genres, ms.premiere, s.status FROM movieseries AS ms INNER JOIN status AS s  ON ms.status = s.status_id WHERE MATCH(ms.title, ms.author, ms.actors, ms.genres) AGAINST('stallone' IN BOOLEAN MODE) ORDER BY ms.premiere;

/* Cuando actualiazo los valores del registro del status 2, en automatico se actualizan los registros vinculados en la tabla dependiente (movieseries) */
UPDATE status
    SET status_id = 7, status = 'Estrenada'
    WHERE status_ide = 2;

