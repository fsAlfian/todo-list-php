<?php

require_once "../model/Todolist.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once '../View/ViewShowTodoList.php';

addTodoList("Learn PHP OOP");
addTodoList("Learn PHP DB");
addTodoList("Learn PHP Framework");

showTodoList();

viewRemoveTodoList();

showTodoList();
