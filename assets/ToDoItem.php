<?php
/**
 * Created by PhpStorm.
 * User: veren
 * Date: 18.05.2016
 * Time: 11:12
 */

class ToDoItem
{
    public $id;
    public $title;
    public $tofinish;
    public $finished;
    public $category_id;

    /**
     * ToDoItem constructor.
     * @param $id
     * @param $title
     * @param $tofinish
     * @param $finished
     * @param $category_id
     */
    public function __construct($id, $title, $tofinish, $finished, $category_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->tofinish = $tofinish;
        $this->finished = $finished;
        $this->category_id = $category_id;
    }


}