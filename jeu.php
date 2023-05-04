<?php
    $parfums=[
        'Fraise'=>4,
        'Vanille'=>5,
        'Chocolat'=>3
    ];

    $cornets=[
        'Pot'=>2,
        'Cornet'=>3
    ];

    $supplements=[
        'Pépite de Chocolat'=>1,
        'Chantille'=>0.5,
    ];
?>

<?php
    echo"<h2>Veuillez choisir votre parfum</h2>";
    foreach($parfums as $clef=>$parfum)
    {
        echo"<label for='$clef'>$clef</label>";
        echo"<input type='checkbox' value='$clef' name='$clef'>"."</br>";
    }
?>

<?php
    echo"<h2>Un cornet ?</h2>";
    foreach($cornets as $cle=>$cornet)
    {
        echo"<label for='$cle'>$cle</label>";
        echo"<input type='radio' value='$cle' name='$cle'>"."</br>";
    }

?>

<?php
    echo"<h2>Des supplements ?</h2>";
    foreach($supplements as $suppl=>$supplement)
    {
        echo"<label for='$suppl'>$suppl</label>";
        echo"<input type='checkbox' value='$suppl' name='$suppl'>"."</br>";
    }
?>

<?php
phpinfo();
?>
