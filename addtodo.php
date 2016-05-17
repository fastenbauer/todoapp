<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add ToDo Item</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="row">
        <div class="large-12 columns">
            <h1>Add ToDo Item</h1>
        </div>
    </div>
    <form id="edit-todoitem" method="post">
        <div class="row">
            <div class="large-12 columns">
                <label>Titel</label>
                <input name="title" type="text" placeholder="large-12.columns" />
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <label>Fertigstellungsdatum</label>
                <input name="tofinish" type="text" placeholder="large-12.columns" />
            </div>
        </div>
        <div class="row">
            <div class="large-6 medium-6 columns">
                <label>Erledigt</label>
                <input type="checkbox" name="finished" id="finshed"><label for="finished">Erledigt</label>
            </div>
            <div class="large-6 medium-6 columns">
                <label>Kategorie</label>
                <select name="category">
                    <?php require_once "assets/ToDoRepository.php";
                        $rep = new ToDoRepository();
                        foreach($rep->GetAllCategories() as $category) :
                    ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="large-12 columns">
            <a id="save-todo" class="button" href="#">Save Item</a>
            <a id="abort" class="button" href="javascript:window.history.back();">Abort</a>
        </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>