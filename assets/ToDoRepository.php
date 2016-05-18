<?php
/**
 * Created by PhpStorm.
 * User: veren
 * Date: 12.05.2016
 * Time: 08:38
 */

require_once ("rb.php");
require_once ("ToDoItem.php");

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

    public function SaveToDoItem(ToDoItem $item) {
        if($item->id == 0)
        {   // insert
            $category = R::findOne('category', 'id = :id', [':id' => $item->category_id ]);
            if($category != null) // Kategorie gefunden
            {
                $todo = R::dispense('todoitem');
                $todo->title = $item->title;
                $todo->tofinish = $item->tofinish;
                $todo->finished = $item->finished;
                $todo->category = $category;
                return R::store($todo);
            }
        } else { // update

        }
    }

    public function DeleteToDoItem($id) {
        try {
            $item = R::findOne('todoitem', 'id = :id', [':id' => $id]);
            R::trash($item);
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }
}