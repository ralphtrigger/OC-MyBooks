<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Author;

/**
 * Description of AuthorDAO
 *
 * @author trigger
 */
class AuthorDAO extends DAO
{
    /**
     * Return a book matching the supplied id.
     * 
     * @param int $id
     * @return MyBooks\Domain\Author
     * @throws Exception If no matching article is found.
     */
    public function find($id)
    {
        $sql = "select * from author where auth_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row) {
            return $this->buildDomainObject($row);
        }
        else {
            throw new Exception("No book matching id ".$id);
        }
    }

    /**
     * Create Author object based on a database row.
     * 
     * @param array $row The row containing Author data.
     * @return MyBooks\Domain\Author
     */
    protected function buildDomainObject($row)
    {
        $author = new Author();

        $author->setId($row['auth_id']);
        $author->setFirstname($row['auth_first_name']);
        $author->setLastname($row['auth_last_name']);

        return $author;
    }

}
