<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyBooks\Domain;

/**
 * Description of Book
 *
 * @author trigger
 */
class Book
{

    /**
     * Book id.
     * 
     * @var int 
     */
    private $id;

    /**
     * Book title.
     * 
     * @var string
     */
    private $title;

    /**
     * Book summary.
     * @var string
     */
    private $summary;

    /**
     * Book isbn.
     * 
     * @var string
     */
    private $isbn;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

}
