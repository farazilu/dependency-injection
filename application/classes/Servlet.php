<?php

/**
 * Servlet class Implementing a dependency injection pattern  
 * 
 * @author faraz
 *
 */
class Servlet
{

    private $database = NULL;

    /**
     * construct Servlet class that requried Model_databae as dependency
     *
     * @param Model_Database $database
     */
    public function __construct(Model_Database $database)
    {
        $this->database = $database;
    }

    /**
     * get message using database object passed as dependency to constructor
     * 
     * @return string
     */
    public function getMessage(): string
    {
        return $this->database->getMessage();
    }
}

