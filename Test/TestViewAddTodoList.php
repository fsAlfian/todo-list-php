<?php

require_once '../View/ViewAddTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';

addTodoList("Learn PHP OOP");
addTodoList("Learn PHP DB");
addTodoList("Learn PHP Framework");

viewAddTodoList();

showTodoList();