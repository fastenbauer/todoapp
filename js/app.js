$(document).foundation();

$(document).ready(function() {
    $('#save-todo').click(function () {
        $.post("savetodoitem.php", $('#edit-todoitem').serialize()).done(function(data) { // $(this).. greift auf die Formulardaten zu
            var result = JSON.parse(data);
            if(result.success) {
                window.location = "index.php";
            }
            else {
                alert("Daten konnten nicht gespeichert werden!");
            }
        });
        return false;
    });
    $('.delete-link').click(function() {
        //alert($(this).data('id'));
        var data = new Object();
        data.id = $(this).data('id');
        $.post("deletetodoitem.php", JSON.stringify(data)).done(function(data) { // $(this).. greift auf die Formulardaten zu
            alert(data);
            /*            var result = JSON.parse(data);
            if(result.success) {
                window.location = "index.php";
            }
            else {
                alert("Daten konnten nicht gespeichert werden!");
            }*/
        });
        return false;
    });
});
