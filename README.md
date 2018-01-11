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
To test navigate to root of project and run follwing command 
phpunit --bootstrap=modules/unittest/bootstrap.php application/tests/RootOfTreeTest.php

## Class structure
Test class list
* __RootOfTreeTest__    application/tests/RootOfTreeTest.php
* __Model_ReadFile__    application/classes/Model/ReadFile.php
* __ReaderInterface__	application/classes/ReaderInterface.php
* __Model_RootTree__	application/classes/Model/RootTree.php 