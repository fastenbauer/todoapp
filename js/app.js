$(document).foundation();

$(document).ready(function() {
    $('#save-todo').click(function () {
        $.post("savetodoitem.php", $('#edit-todoitem').serialize()).done(function(data) { // $(this).. greift auf die Formulardaten zu
            var obj = JSON.parse(data);
        });
        return false;
    })
});
