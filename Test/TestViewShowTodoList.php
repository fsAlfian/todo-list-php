<?php

require_once '../View/ViewShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList("Learn PHP OOP");
addTodoList("Learn PHP DB");
addTodoList("Learn PHP Framework");

viewShowTodoList();