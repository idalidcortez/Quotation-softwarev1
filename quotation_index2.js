
function selectSalespeopleName() {
    var x = document.getElementById("salespeople").value;

    $.ajax({
        url: "showSalespeople.php",
        method: "POST",
        data: {
            id: x
        },
        success: function(data) {
            $("#ans2").html(data);
        }
    });
}
