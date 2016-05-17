<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="row">
        <div class="large-12 columns">
            <h1>ToDo App</h1>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <a id="open-add-todo" class="button" href="addtodo.php">Add ToDo Item</a>
        </div>
    </div>
    <div class="row">
        <div class="large-4 medium-4 small-4 columns">
            Titel
        </div>
        <div class="large-3 medium-3 small-3 columns">
            Fertigstellungsdatum
        </div>
        <div class="large-1 medium-1 small-1 columns">
            Erledigt
        </div>
        <div class="large-2 medium-2 small-2 columns">
            Kategorie
        </div>
        <div class="large-2 medium-2 small-2 columns">

        </div>
    </div>
        <?php
            require_once ("assets/ToDoRepository.php");
            $rep = new ToDoRepository();
            foreach($rep->GetAllToDoItems() as $item) {
        ?>
        <div class="row">
            <div class="large-4 medium-4 small-4 columns">
                <?php echo $item->title; ?>
            </div>
            <div class="large-3 medium-3 small-3 columns">
                <?php echo $item->tofinish; ?>
            </div>
            <div class="large-1 medium-1 small-1 columns">
                <?php echo $item->finished ? "Ja" : "Nein"; ?>
            </div>
            <div class="large-2 medium-2 small-2 columns">
                <?php echo $item->category->title; ?>
            </div>
            <div class="large-1 medium-1 small-1 columns">
                <a id="edit-link" href="#" data-id="<?php echo $item->id; ?>">Bearbeiten</a>
            </div>
            <div class="large-1 medium-1 small-1 columns">
                <a id="delete-link" href="#" data-id="<?php echo $item->id; ?>">Löschen</a>
            </div>
        </div>
        <?php } ?>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>