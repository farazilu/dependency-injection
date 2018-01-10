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
                echo 'ADD L :' . PHP_EOL;
            } else {
                $this->right = new Model_TreeNode($x, $y, $value);
                echo 'ADD R :' . PHP_EOL;
            }
        } else {
            if ($y == $this->y) {
                echo 'ADD C L :' . PHP_EOL;
                $this->left->add_child($x, $y, $value);
            }
            if ($y > $this->y) {
                echo 'ADD C R :' . PHP_EOL;
                $this->right->add_child($x, $y, $value);
            }
        }
    }

    public function print()
    {
        if ($this->left instanceof Model_TreeNode) {
            echo $this->value;
            echo ' L :';
            $this->left->print();
        }
        if ($this->right instanceof Model_TreeNode) {
            echo $this->value;
            echo ' R: ';
            $this->right->print();
        }
        if ($this->right === null && $this->left === null) {
            echo $this->value;
            echo ' *';
        }
        echo PHP_EOL;
    }
}

