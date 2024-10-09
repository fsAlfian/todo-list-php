<?php

require_once "../model/Todolist.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Learn PHP Laravel");
addTodoList("Learn JS React");

var_dump($todoList);
