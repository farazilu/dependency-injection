<?php

/**
 * Test class for testing Servlet using dependency injection.
 * 
 * @author faraz
 *
 */
class ServletTest extends Unittest_TestCase
{

    function testServletDatabaseMessage()
    {
        // setup test
        $database = Model::factory('Database');
        
        // execute test
        $message = (new Servlet($database))->getMessage();
        
        // assert
        $this->assertSame($message, 'Cohesion Digital');
    }
}

