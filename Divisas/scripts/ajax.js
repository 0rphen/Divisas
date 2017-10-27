function getInfo(origin, valor, tasa) {
    $.ajax({
        type: "POST",
        url: "transformation.php",
        data: 'origen=' + origin + 'valorinicial=' + valor + 'tasa=' + tasa,
        success: function (data) {
            $("#valorfinal").html(data);
        }
    }
    );
}