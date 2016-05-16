<?php

function getBooks()
{
    $db = new PDO($dsn = 'mysql:host=localhost;dbname=mybooks;charset=utf8',
            $username = 'mybooks_user', $password = 'secret');
    $books = $db->query("select * from book order by book_id desc");
    
    return $books;
}
