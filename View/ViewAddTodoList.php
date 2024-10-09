<?php

require_once '../Model/Todolist.php';
require_once '../Helper/Input.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

function viewAddTodoList(){
    echo  'ADD TODO LIST' . PHP_EOL;
    $todo = input("Input your todo");
    if ($todo == 'x') {
        echo 'Cancel add todo' . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}