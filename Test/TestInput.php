<?php

require_once"../Helper/Input.php";

$name = input("Input your name ");
echo "Hello $name";

$address = input("Input your address");
echo "Your address is $address";