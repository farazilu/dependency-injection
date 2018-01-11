<?php

/**
 * Test class for testing Servlet using dependency injection.
 *
 * @author faraz
 *        
 */
class RootOfTreeTest extends Unittest_TestCase
{

    function providerFileOptional()
    {
        return array(
            array(
                'simple.txt',
                29,
                29
            
            ),
            array(
                'basic.txt',
                28,
                28
            
            ),
            array(
                'tree.txt',
                312,
                316
            
            ),
            array(
                'tree_half.txt',
                150,
                150
            
            )
        
        );
    }

    function providerFileAll()
    {
        return array(
            array(
                'simple.txt',
                29
            
            ),
            array(
                'basic.txt',
                32
            
            ),
            // take signifecent long time
            array(
                'tree_half.txt',
                157
            )
            // will not work for this big tree root
            // , array(
            // 'tree.txt',
            // 0
            
        // )
        );
    }

    /**
     * @dataProvider providerFileOptional
     */
    function testOptimalRootOptions($file_name, $optimal_left_total, $optimal_right_total)
    {
        // setup test
        $reader = new Model_ReadFile($file_name);
        $array = $reader->file_to_array();
        $root_tree = new Model_RootTree($array);
        
        // execute test
        // echo PHP_EOL;
        // $root_tree->print_array();
        // this solution does not work can't convert tree root to binary tree.. so proper all posible node tree not posible without c++ pointers.
        // $root_tree->calculateRootUsingBinaryTree();
        $root_total_left = $root_tree->caclucateRootUsingOptimalRouteLeft();
        // echo PHP_EOL;
        $root_total_right = $root_tree->caclucateRootUsingOptimalRouteRight();
        
        // assert
        $this->assertSame($root_total_left, $optimal_left_total);
        $this->assertSame($root_total_right, $optimal_right_total);
    }

    /**
     * @dataProvider providerFileAll
     */
    function testBruteForceOptions($file_name, $brute_force)
    {
        // setup test
        $reader = new Model_ReadFile($file_name);
        $array = $reader->file_to_array();
        $root_tree = new Model_RootTree($array);
        
        // execute test
        // echo PHP_EOL;
        // $root_tree->print_array();
        // $root_tree->calculateRootUsingBinaryTree();
        $root_total = $root_tree->caclucateRootUsingAllOptions();
        
        // assert
        $this->assertSame($root_total, $brute_force);
    }
}

