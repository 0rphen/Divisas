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
}else if ($origen == 1 && $tasa == 3){
    echo 'euros a pesos <br>';
    echo $valorinicial * 3496 . '<br>';
}else if ($origen == 3 && $tasa == 1){
    echo 'pesos a euros <br>';
    echo $valorinicial / 3496 . '<br>';
}else if ($origen == 2 && $tasa == 3){
    echo 'yenes a pesos <br>';
    echo $valorinicial * 0.26456 . '<br>';
}else if ($origen == 3 && $tasa == 2){
    echo 'pesos a yenes <br>';
    echo $valorinicial / 0.26456 . '<br>';
}else if ($origen == 0 && $tasa == 1){
    echo 'dolares a euro <br>';
    echo $valorinicial * 0.86137 . '<br>';
}else if ($origen == 1 && $tasa == 0){
    echo 'euro a dolares <br>';
    echo $valorinicial / 0.86137 . '<br>';
}else if ($origen == 0 && $tasa == 2){
    echo 'dolares a yenes <br>';
    echo $valorinicial * 114.15 . '<br>';
}else if ($origen == 2 && $tasa == 0){
    echo 'dolares a yenes <br>';
    echo $valorinicial / 114.15 . '<br>';
}else if ($origen == 1 && $tasa == 2){
    echo 'euros a yenes <br>';
    echo $valorinicial * 131.9 . '<br>';
}else if ($origen == 2 && $tasa == 1){
    echo 'yenes a euros <br>';
    echo $valorinicial * 131.9 . '<br>';
}else if ($origen == $tasa){
    echo 'Misma moneda <br>';
    echo $valorinicial . '<br>';
}
?>