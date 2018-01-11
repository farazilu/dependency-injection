# Implement a dependency injection pattern

Requires php7.1, phpunit 6.5, php7.1-mbstring
Implement a dependency injection pattern in Kohana framework. 

To test navigate to root of project and run follwing command 
phpunit --bootstrap=modules/unittest/bootstrap.php application/tests/ServletTest.php 

## Class structure
Test class list
* __ServletTest__         application/tests/ServletTest.php
* __Servlet__	          application/classes/Servlet.php
* __Database__	          application/classes/Model/Database.php
* __DatabaseInterface__	  application/classes/DatabaseInterface.php



# Implementation of Root of tree
Try to calcualte Root of Tree max value

### Solution 1.
*  Try to find if child of root exist, if left child is greater or equal follw the path else follow right child path
*  Try to find if child of root exist, if left child is greater then follow left path else follow right child path

### solution 2
Try to calculate all posible paths and there total.
This solution work for root 25 nodes deep and take upto 3.18sec 

## conclusion
All solutions are calculating max total that is different for some inputs and same for some inputs.

To test navigate to root of project and run follwing command 
phpunit --bootstrap=modules/unittest/bootstrap.php application/tests/RootOfTreeTest.php

## Class structure
Test class list
* __RootOfTreeTest__    application/tests/RootOfTreeTest.php
* __Model_ReadFile__    application/classes/Model/ReadFile.php
* __ReaderInterface__	application/classes/ReaderInterface.php
* __Model_RootTree__	application/classes/Model/RootTree.php 
* __Input files__        application/input/*.txt