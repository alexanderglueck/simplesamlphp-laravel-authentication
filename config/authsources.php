<?php

$config = [
    // ...

    'laravel' => array(
        'sqlauth:SQL',
        'dsn' => 'mysql:host=localhost;dbname=YOURDBNAME',
        'username' => 'YOURUSERNAME',
        'password' => 'YOURPASSWORD',
        'hash_column' => 'password',
        'query' => 'SELECT id, id as uid, name, email, password FROM users WHERE email = :username',
    ),

    // ...
];
