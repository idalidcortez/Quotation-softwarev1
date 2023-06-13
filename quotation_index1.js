
function selectProductName() {
    var x = document.getElementById("products").value;

    $.ajax({
        url: "showProducts.php",
        method: "POST",
        data: {
            id: x
        },
        success: function(data) {
            $("#ans1").html(data);
        }
    });
}
