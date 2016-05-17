<?php

namespace MyBooks\Domain;

/**
 * Description of Author
 *
 * @author trigger
 */
class Author
{

    /**
     * Author id.
     * 
     * @var int
     */
    private $id;

    /**
     * Author firstname.
     * 
     * @var string
     */
    private $firstname;

    /**
     * Author lastname.
     * 
     * @var string
     */
    private $lastname;

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

}
