<!doctype php>
<html>
    <head>

    </head>

    <body>
        <?php

            $nom=$_POST['name'];
            $prenoms=$_POST['prenoms'];
            $age=$_POST['age'];

            echo "<h2>veuillez confirmer les informations ci-dessous: </h2> </br>";
            echo "Noms: $nom"."</br>";
            echo "Prénoms: $prenoms"."</br>";
            echo "Age: $age"."</br>";


        ?>

    </body>
</html>
