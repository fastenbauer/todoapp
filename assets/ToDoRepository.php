<?php
/**
 * Created by PhpStorm.
 * User: veren
 * Date: 12.05.2016
 * Time: 08:38
 */

require_once ("rb.php");

class ToDoRepository
{
    /**
     * ToDoRepository constructor.
     */
    public function __construct()
    {
        R::setup('mysql:host=localhost; dbname=todoapp', 'root', '');
    }

    public function GetAllToDoItems() {
        return R::findAll('todoitem');
    }

    public function GetAllCategories() {
        return R::findAll('category');
    }
}