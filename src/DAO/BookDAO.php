<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Book;

/**
 * Description of BookDAO
 *
 * @author trigger
 */
class BookDAO extends DAO
{
    /**
     * 
     * @var MyBoooks\DAO\AuthorDAO
     */
    private $authorDAO;

    public function setAuthorDAO($authorDAO)
    {
        $this->authorDAO = $authorDAO;
    }

    /**
     * Return a list of all books, sorted by date (most recent first)
     * 
     * @return array A list of all books.
     */
    public function findAll()
    {
        $sql = "select book_id, book_title, book_isbn, book_summary from book order by book_id desc";
        $result = $this->getDb()->fetchAll($sql);

        $books = array();
        foreach ($result as $row) {
            $bookId = $row['book_id'];
            $book = $this->buildDomainObject($row);
            $books[$bookId] = $book;
        }

        return $books;
    }

    /**
     * Return a Book matching the supplied id.
     * 
     * @param int $id
     * @return MyBooks\Domain\Book
     * @throws Exception If no matching book is found.
     */
    public function find($id)
    {
        $sql = "select * from book where book_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));
        if ($row) {
            return $this->buildDomainObject($row);
        }
        else {
            throw new Exception("No Book matching id ".$id);
        }
    }

    /**
     * Create a Book object based on a database row.
     * 
     * @param array $row The database row containing the Book data.
     * @return MyBooks\Domain\Book
     */
    protected function buildDomainObject($row)
    {
        $book = new Book();

        $book->setId($row['book_id']);
        $book->setIsbn($row['book_isbn']);
        $book->setSummary($row['book_summary']);
        $book->setTitle($row['book_title']);

        if (array_key_exists('auth_id', $row)) {
            $authorId = $row['auth_id'];
            $author = $this->authorDAO->find($authorId);
            $book->setAuthor($author);
        }
        return $book;
    }

}
