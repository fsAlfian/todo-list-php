<?php
require_once '../model/Todolist.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../Helper/Input.php';
require_once '../View/ViewAddTodoList.php';
require_once '../View/ViewRemoveTodoList.php';

function viewShowTodoList() {
    while(true) {
        showTodoList();
        echo '"Menu"' . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Remove Todo" . PHP_EOL;
        echo "3. Exit" . PHP_EOL;
    
        $choice = input("Input your choice");

        if ($choice == "1") {
            viewAddTodoList();
        } else if ($choice == "2") {
            viewRemoveTodoList();
        } else if ($choice == "3") {
            // exit
            break;
        } else {
            echo "Wrong choice" . PHP_EOL;
        }

    }
}