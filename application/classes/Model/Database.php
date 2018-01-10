<?php

/**
 * Database mock class that implements getMessage function
 * @author faraz
 *
 */
class Model_Database implements DatabaseInterface
{

    /**
     * get a message from Database calss
     *
     * @return string
     */
    public function getMessage(): string
    {
        return 'Cohesion Digital';
    }
}

