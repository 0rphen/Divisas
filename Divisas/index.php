<?php
Session_start();
?>
<!DOCTYPE html>
<html>
    <link href="styles/style.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-1.11.3.js" type="text/javascript"></script>
    <script type="text/javascript">
        function getInfo(origin, value, tase) {
            $.ajax({
                type: "POST",
                url: "transformation.php",
                data: {
                    origen1: origin,
                    valorinicial1: value,
                    tasa1: tase
                },
                success: function (data) {
                    $("#valorfinal").html(data);
                }
            }
            );
        }
    </script>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <title>
    </title>
    <body>
        <h1>Divisas</h1>

        <!--        <form name="cabiodivisas" method="POST" action="transformation.php">-->
        <form>
        <select id="origen" name="origen" size="1" onChange="getInfo(document.getElementById('origen').value, document.getElementById('valorinicial').value, this.value);">
            <option value="0">dolar</option>
            <option value="1">euro</option>
            <option value="2">yenes</option>
            <option value="3">pesos colombianos</option>
        </select>
        <input type="text" id="valorinicial" name="valorinicial" placeholder="Ingrese Valor" onChange="getInfo(document.getElementById('origen').value, document.getElementById('valorinicial').value, this.value);">
            <select id="tasa" name="tasa" size="1" onChange="getInfo(document.getElementById('origen').value, document.getElementById('valorinicial').value, this.value);">
            <option value="0">dolar</option>
            <option value="1">euro</option>
            <option value="2">yenes</option>
            <option value="3">pesos colombianos</option>
        </select>
        <div id="valorfinal" name="valorfinal"></div>
        </form>
        <!--<input type="submit" value="Ok" />-->
        <!--</form>-->
        <?php
        // put your code here
        ?>
    </body>
</html>
