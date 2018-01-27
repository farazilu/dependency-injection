<?php

/**
 * Test class for testing Servlet using dependency injection.
 * 
 * @author faraz
 *
 */
class TreeTest extends Unittest_TestCase
{

    function testServletDatabaseMessage()
    {
        // setup test
        $array = [
            [
                1
            ],
            [
                2,
                1
            ],
            [
                3,
                4,
                5
            ]
        ];
        
        $this->print2d_array($array);
        
        $totals[0][0] = $array[0][0];
        // execute test
        echo PHP_EOL;
        for ($x = 0; $x < count($array); $x ++) {
            for ($y = 0; $y < count($array[$x]); $y ++) {
                echo "[{$x}, {$y}] {$array[$x][$y]}" . PHP_EOL;
                if (isset($array[$x + 1])) {
                    if ($array[$x + 1][$y] >= $array[$x + 1][$y + 1]) {
                        $totals[$x][$y] = $totals[$x][$y] + $array[$x + 1][$y];
                    } else {
                        $totals[$x][$y] = $totals[$x][$y - 1] + $array[$x + 1][$y + 1];
                    }
                }
            }
            echo PHP_EOL;
        }
        
        $this->print2d_array($totals);
        // assert
        // $this->assertSame($message, 'Model Database');
    }

    private function print2d_array(array $array)
    {
        echo PHP_EOL;
        for ($x = 0; $x < count($array); $x ++) {
            for ($y = 0; $y < count($array[$x]); $y ++) {
                echo $array[$x][$y];
                echo ' ';
            }
            echo PHP_EOL;
        }
    }
}

