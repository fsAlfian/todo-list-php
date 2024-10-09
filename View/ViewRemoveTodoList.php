<?php

require_once '../model/Todolist.php';
require_once '../Helper/Input.php';
require_once '../BusinessLogic/RemoveTodoList.php';

function viewRemoveTodoList(){
    echo "REMOVE TODO LIST" . PHP_EOL;
    $number = input("Input todo number");
    $success = removeTodoList($number);
    if ($success) {
        echo "Success remove todo list" . PHP_EOL;
    } else {
        echo "Failed remove todo list" . PHP_EOL;
    }
}