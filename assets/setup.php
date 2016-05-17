<?php
/**
 * Created by PhpStorm.
 * User: veren
 * Date: 14.04.2016
 * Time: 08:05
 */

require_once "rb.php";  // import der RB-Klassenbibliothek bzw. der statischen Klasse R
R::setup('mysql:host=localhost; dbname=todoapp', 'root', '');
//R::freeze(TRUE);
//R::setAutoResolve(true);
$category = R::dispense('category');
$category->title = 'private';
R::store($category);

$todo = R::dispense('todoitem');
$todo->title = 'Party organisieren';
$todo->tofinish = new DateTime('2016-05-20');
$todo->finished = false;
$todo->category = $category;
R::store($todo);

//$items = R::findAll('todoitem');
/*if(isset($_GET['category_id']))
    if (isset($_GET['title']))
        $items = R::find('todoitem', ' category_id = :cat_id AND title LIKE :title',
            [ ':cat_id' => $_GET['category_id'] , ':title' => '%'.$_GET['title'].'%' ] );
    else
        $items = R::find('todoitem', ' category_id = :cat_id ORDER BY tofinish ASC',
            [ ':cat_id' => $_GET['category_id']]);
else
    $items = R::findAll('todoitem');
foreach($items as $item)
    echo "<br>".$item->title." (".$item->tofinish.")";*/

/*$items = R::findCollection('todoitem', 'ORDER BY tofinish');
while($item = $items->next())   // iterator
    echo "<br>".$item->title." (".$item->tofinish.")";*/

/*$tables = R::inspect();
var_dump($tables);
$fields = R::inspect('todoitem');
var_dump($fields);*/

// delete single item
/*$item = R::findOne('category', 'id = 2');
R::trash($item);*/

// delete all items
/*$items = R::find('category');
R::trashAll($items);*/

// reset DB
/*R::nuke();*/

// m:n Beziehung
/*list($vase, $lamp) = R::dispense('product', 2);
$vase->title = "Vase";
$vase->price = 29.9;
//$lamp = R::dispense('product');
$lamp->title = "Lamp";
$lamp->price = 399.34;

$tag = R::dispense('tag');
$tag->name = "Deko Teil";
R::store($tag);

$vase->sharedTagList[] = $tag;
$lamp->sharedTagList[] = $tag;
R::storeAll([$vase, $lamp, $tag]);*/