/* Listado de operaciones (queries) CRUD de mexflix */

/* movieseries */
    /* Crear movieseries */
    INSERT INTO movieseries SET imdb_id = 'tt3749900', title = 'Gotam', plot ='', author = '', actors = '', country = '', premiere = '2014', trailer = '', poster = '', rating = 8.0, genres = 'Crime, Drama, Thriller', category = 'Serie', status = 3;

    /* Actualizar movieseries */
    UPDATE movieseries SET title = 'Gotham', plot = 'Gotham es una serie de televisión estadounidense creada por Bruno Heller y basada en los primeros pasos de varios personajes de las publicaciones DC Comics, especialmente James Gordon y Bruce Wayne, creados por Bob Kane y Bill Finger e interpretados por Ben McKenzie y David Mazouz.1​ Heller hace las veces de productor ejecutivo junto con Danny Cannon, que dirigió el piloto. La serie fue encargada el 5 de mayo y tuvo su estreno el 22 de septiembre de 2014', author = 'Bruno Heller', actors = 'Zabryna Guevara, Ben McKenzie, Donal Logue', country = 'USA', trailer = 'https://www.youtube.com/watch?v=ysfvCuhoj-k&t=1s', poster = 'http://i.imgur.com/j8Kcmfr.png' WHERE imdb_id = 'tt3749900';
    
    /* Eliminar movieseries */
    DELETE FROM movieseries WHERE imdb_id = 'tt3749900';

    /* Buscar todas las movieseries */
    SELECT ms.imdb_id, ms.title, ms.plot, ms.author, ms.actors, ms.country, ms.premiere, ms.trailer, ms.poster, ms.rating, ms.genres, ms.category, s.status FROM movieseries AS ms INNER JOIN status AS s ON ms.status = s.status_id;

    /* Buscar una movieseries por titulos, personas (actores, autores), generos */
    SELECT ms.imdb_id, ms.title, ms.plot, ms.author, ms.actors, ms.country, ms.premiere, ms.trailer, ms.poster, ms.rating, ms.genres, ms.category, s.status FROM movieseries AS ms INNER JOIN status AS s ON ms.status = s.status_id WHERE MATCH(ms.title, ms.author, ms.actors, ms.genres) AGAINST('Drama' IN BOOLEAN MODE);

    /* Buscar una movieseries por categoria */
    SELECT ms.imdb_id, ms.title, ms.plot, ms.author, ms.actors, ms.country, ms.premiere, ms.trailer, ms.poster, ms.rating, ms.genres, ms.category, s.status FROM movieseries AS ms INNER JOIN status AS s ON ms.status = s.status_id WHERE ms.category = 'Serie';

    /* Buscar una movieseries por status */
    SELECT ms.imdb_id, ms.title, ms.plot, ms.author, ms.actors, ms.country, ms.premiere, ms.trailer, ms.poster, ms.rating, ms.genres, ms.category, s.status FROM movieseries AS ms INNER JOIN status AS s ON ms.status = s.status_id WHERE ms.status = 1;

/* status */
    /* Crear status */
    INSERT INTO status SET status_id = 0, status = 'Otro status';

    /* Actualizar status */
    UPDATE status SET status = 'Other Status' WHERE status_id = 6;

    /* Eliminar status */
    DELETE FROM status WHERE status_id = 6;

    /* Buscar todo los status */
    SELECT * FROM status;

    /* Buscar un status por status_id */
    SELECT * FROM status WHERE status_id = 2;

/* users */
    /* Crear user */
    INSERT INTO user SET user = '@usuario', email = 'usuario@gmail.com', name = 'Soy un usuario', birthday = '2014-05-04', pass = MD5('un_password'), role = 'Admin';

    /* Actualizar */
        /* Datos generales */
        UPDATE users SET name = 'SOY un usuario', birthday = '2012-06-30', role = 'User' WHERE user = '@usuario' AND email = 'usuario@gmail.com';
         
        /* Password */
        UPDATE users SET pass = MD5('un_nuevo_password') WHERE user = '@usuario' AND email = 'usuario@gmail.com';

    /* Eliminar user */
    DELETE FROM users WHERE user = '@usuario' AND email = 'usuario@gmail.com';

    /* Buscar todo los users */
    SELECT * FROM users;

    /* Buscar un user por: */
        /* user */
        SELECT * FROM users WHERE user = '@usuario';

        /* email */
        SELECT * FROM users WHERE email = 'usuario@gmail.com';
        
        /* role */
        SELECT * FROM users WHERE role = 'User';
        