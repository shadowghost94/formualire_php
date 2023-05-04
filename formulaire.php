<!doctype html>
<html lang="fr">
    <head>

        <title>Connexion à MySQL avec PDO</title>
        <meta charset="utf-8">

    </head>

    <body>
        <h1>Interrogation de la table CARNET avec PDO</h1>

        <?php
            require("connect.php");
                // pour oracle: $dsn="oci:dbname=//serveur:1521/base
                // pour sqlite: $dsn="sqlite:/tmp/base.sqlite"
            $dsn="mysql:dbname=".BASE.";host=".SERVER;
            try{
            $connexion=new PDO($dsn,USER,PASSWD);
            }
            catch(PDOException $e){
            printf("Échec de la connexion : %s\n", $e->getMessage());
            exit();
            }
            $sql="SELECT * from CARNET";
            if(!$connexion->query($sql)) echo "Pb d accès au CARNET";
            else{
            foreach ($connexion->query($sql) as $row)
            echo $row[ PRENOM ]." ".
            $row[ NOM ]."né(e) le ".
            $row[ NAISSANCE ]."<br/>\n";
            }
        ?>
    </body>
</html>
