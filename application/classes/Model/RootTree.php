<?php

/**
 *
 * @author faraz
 *        
 */
class Model_RootTree
{

    private $array;

    private $tree;

    /**
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function print_array()
    {
        echo PHP_EOL;
        for ($x = 0; $x < count($this->array); $x ++) {
            for ($y = 0; $y < count($this->array[$x]); $y ++) {
                echo $this->array[$x][$y];
                echo ' ';
            }
            echo PHP_EOL;
        }
    }

    private function print_tree()
    {
        $this->tree->print();
    }

    public function calculateRoot(): int
    {
        $this->convert_array_to_tree();
        $this->print_tree();
        return 0;
    }

    private function convert_array_to_tree()
    {
        if (is_array($this->array)) {
            
            for ($x = 0; $x < count($this->array); $x ++) {
                for ($y = 0; $y < count($this->array[$x]); $y ++) {
                    if ($x == 0 && $y == 0) {
                        $this->tree = new Model_TreeNode(0, 0, (int) $this->array[0][0]);
                    } else {
                        $this->tree->add_child($x, $y, (int) $this->array[$x][$y]);
                    }
                }
            }
        }
    }
}

