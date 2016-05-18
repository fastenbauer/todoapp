<?php

require_once "assets/ToDoRepository.php";
error_reporting(0); // Error reporting vollkommen abschalten :(
$rep = new ToDoRepository();

if ($_POST) {
    echo $_POST['id'];
/*    $id = $rep->SaveToDoItem(new ToDoItem(0,$_POST['title'], $_POST['tofinish'],
        $_POST['finished'],$_POST['category']));
    echo json_encode(array("success" => $id > 0, "id" => $id)); */
}