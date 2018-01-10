<?php

/**
 * Test class for testing Servlet using dependency injection.
 *
 * @author faraz
 *        
 */
class RootOfTreeTest extends Unittest_TestCase
{

    function testServletDatabaseMessage()
    {
        // setup test
        $reader = new Model_ReadFile('simple.txt');
        $array = $reader->file_to_array();
        $root_tree = new Model_RootTree($array);
        
        // execute test
        
        $root_tree->print_array();
        $root_tree->calculateRoot();
        
        // assert
        // $this->assertSame($message, 'Cohesion Digital');
    }
}

