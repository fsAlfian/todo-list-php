<?php

require_once "../model/Todolist.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Learn PHP OOP");
addTodoList("Learn PHP DB");
addTodoList("Learn PHP Laravel");

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(3);
var_dump($success);
showTodoList();