<?php

/**
 *
 * @author faraz
 *        
 */
class Model_TreeNode
{

    public $value;

    public $left;

    public $right;

    public $parent;

    public $x;

    public $y;

    /**
     */
    public function __construct($x, $y, int $value)
    {
        $this->x = $x;
        $this->y = $y;
        $this->value = (int) $value;
    }

    public function add_child($x, $y, int $value)
    {
        echo "My value: {$this->value} [{$this->x}, {$this->y}] , given value: {$value} [{$x}, {$y}]";
        echo PHP_EOL;
        if ($x == $this->x + 1) {
            // add child node as we reach child level
            if ($y == $this->y) {
                $this->left = new Model_TreeNode($x, $y, $value);
            } else {
                $this->right = new Model_TreeNode($x, $y, $value);
            }
        } else {
            if ($y < $this->y) {
                $this->left->add_child($x, $y, $value);
            } else {
                $this->right->add_child($x, $y, $value);
            }
        }
    }

    public function print()
    {
        echo $this->value;
        echo ' ';
        if ($this->left instanceof Model_TreeNode) {
            echo 'L :';
            $this->left->print();
        }
        if ($this->right instanceof Model_TreeNode) {
            echo 'R: ';
            $this->right->print();
        }
        echo PHP_EOL;
    }
}

