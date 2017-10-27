<?php
$origen = $_POST["origen1"];
$valorinicial = $_POST["valorinicial1"];
$tasa = $_POST["tasa1"];
if ($origen == 3 && $tasa == 0) {
    echo 'pesos a dolares <br>';
    echo $valorinicial / 3000 . '<br>';
}else if ($origen == 0 && $tasa == 3){
    echo 'dolares a pesos <br>';
    echo $valorinicial * 3000 . '<br>';
}
echo ' ' . $origen . ' ' . $valorinicial . ' ' . $tasa
?>