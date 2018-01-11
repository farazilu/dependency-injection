<?php

/**
 * Test class for testing Servlet using dependency injection.
 *
 * @author faraz
 *        
 */
class RootOfTreeTest extends Unittest_TestCase
{

    function providerFile()
    {
        return array(
            array(
                'simple.txt',
                29,
                29
            ),
            array(
                'basic',
                71,
                71
            )
        );
    }

    /**
     * @dataProvider providerFile
     */
    function testServletDatabaseMessage($file_name, $optimal_left_total, $optimal_right_total)
    {
        // setup test
        $reader = new Model_ReadFile($file_name);
        $array = $reader->file_to_array();
        $root_tree = new Model_RootTree($array);
        
        // execute test
        
        $root_tree->print_array();
        // $root_tree->calculateRootUsingBinaryTree();
        echo $root_total_left = $root_tree->caclucateRootUsingOptimalRouteLeft();
        echo PHP_EOL;
        echo $root_total_right = $root_tree->caclucateRootUsingOptimalRouteRight();
        
        // assert
        // $this->assertSame($message, 'Cohesion Digital');
    }
}

