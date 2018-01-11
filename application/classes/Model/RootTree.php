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

    /**
     * calculate root path using best case scenario.
     * 1. look at both childs
     * 2. pick one with bigger value
     * 3. if both are same pick left.
     * 4. else go right
     *
     * @return int
     */
    public function caclucateRootUsingOptimalRouteLeft(int $x = 0, int $y = 0, int $total = 0): int
    {
        
        // check if have not reachd end of root
        if (isset($this->array[$x][$y])) {
            $total += $this->array[$x][$y];
            echo "[{$x} {$y}] {$this->array[$x][$y]}, {$total} | ";
            // check if we have child path..
            if (isset($this->array[$x + 1])) {
                // check if we have nodes to look left or right
                if (isset($this->array[$x + 1][$y]) && isset($this->array[$x + 1][$y + 1])) {
                    // now check what value is larget
                    if ($this->array[$x + 1][$y] >= $this->array[$x + 1][$y + 1]) {
                        // check if left child value is great or both are same then go left path
                        $total = $this->caclucateRootUsingOptimalRouteLeft($x + 1, $y, $total);
                    } else {
                        // else go right path.
                        $total = $this->caclucateRootUsingOptimalRouteLeft($x + 1, $y + 1, $total);
                    }
                }
            }
        }
        return $total;
    }

    /**
     * calculate root path using best case scenario.
     * 1. look at both childs
     * 2. pick one with bigger value
     * 3. if left is greter go left.
     * 4. else go right
     *
     * @return int
     */
    public function caclucateRootUsingOptimalRouteRight(int $x = 0, int $y = 0, int $total = 0): int
    {
        
        // check if have not reachd end of root
        if (isset($this->array[$x][$y])) {
            
            $total += $this->array[$x][$y];
            echo "[{$x} {$y}] {$this->array[$x][$y]}, {$total} | ";
            // check if we have child path..
            if (isset($this->array[$x + 1])) {
                // check if we have nodes to look left or right
                if (isset($this->array[$x + 1][$y]) && isset($this->array[$x + 1][$y + 1])) {
                    // now check what value is larget
                    if ($this->array[$x + 1][$y] > $this->array[$x + 1][$y + 1]) {
                        // check if left child value is great go left path
                        $total = $this->caclucateRootUsingOptimalRouteRight($x + 1, $y, $total);
                    } else {
                        // or both are same then or right is greater go right path.
                        $total = $this->caclucateRootUsingOptimalRouteRight($x + 1, $y + 1, $total);
                    }
                }
            }
        }
        return $total;
    }

    /**
     * try convert array inot binary tree and calcaulate best root path.
     * note: this solution did not work as binary tree does not work for tree root structure.
     *
     * @return int
     */
    public function calculateRootUsingBinaryTree(): int
    {
        $this->convert_array_to_tree();
        $this->print_tree();
        return 0; // change with value once working solution
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

