`sqlauth:SQL`
=============

This is a authentication module for authenticating a user against a SQL database.


Options
-------

`dsn`
:   The DSN which should be used to connect to the database server.
    Check the various database drivers in the [PHP documentation](http://php.net/manual/en/pdo.drivers.php) for a description of the various DSN formats.

`username`
:   The username which should be used when connecting to the database server.


`password`
:   The password which should be used when connecting to the database server.

`query`
:   The SQL query which should be used to retrieve the user.
    The parameters :username and :password are available.
    If the username/password is incorrect, the query should return no rows.
    The name of the columns in resultset will be used as attribute names.
    If the query returns multiple rows, they will be merged into the attributes.
    Duplicate values and NULL values will be removed.

`hash_password`
:   The column name in which the Laravel password is stored.

Examples
--------

Database layout used in some of the examples:

    CREATE TABLE `users` (
     `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
     `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
     `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
     `email_verified_at` timestamp NULL DEFAULT NULL,
     `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
     `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
     `created_at` timestamp NULL DEFAULT NULL,
     `updated_at` timestamp NULL DEFAULT NULL,
     PRIMARY KEY (`id`),
     UNIQUE KEY `users_email_unique` (`email`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci

Example query - We query the users table by email, using the username PDO binding:

    SELECT id, id as uid, name, email, password FROM users WHERE email = :username

We fetch some attributes and the password (the password hash).  
Using the password_hash option the hash is selected and the entered password is checked against this hash.
