<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Book;

/**
 * Description of BookDAO
 *
 * @author trigger
 */
class BookDAO
{
    private $db;
    
    public function __construct($db)
    {
        $this->db = $db;
    }
    
    public function findAll(){
        $sql = "select * from book order by book_id desc";
        $result = $this->db->fetchAll($sql);
        
        $books = array();
        foreach ($result as $row){
            $bookId = $row['book_id'];
            $book = $this->buildBook($row);
            $books[$bookId] = $book;
        }
        
        return $books;
    }
    
    private function buildBook($row){
        $book = new Book();
        
        $book->setId($row['book_id']);
        $book->setIsbn($row['book_isbn']);
        $book->setSummary($row['book_summary']);
        $book->setTitle($row['book_title']);
        
        return $book;
    }

}
