
function selectName() {
    var x = document.getElementById("clients").value;

    $.ajax({
        url: "showClients.php",
        method: "POST",
        data: {
            id: x
        },
        success: function(data) {
            $("#ans").html(data);
        }
    });
}

