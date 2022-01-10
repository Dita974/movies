<?php

// $pdo = new PDO('sqlite:movies.db');

// $requete = $pdo->query("SELECT * FROM movies");

// $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

// print_r($resultat);

$pdo = new PDO('sqlite:movies.db');

$requete = $pdo->query("SELECT * FROM movies");

$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------ cdn bootstrap ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!------ fin cdn bootstrap ---------->
    <title>My Movies List</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Welcome to my Movies'List</h1>

    
    <section id="array">
        <table>
        <?php
        $size = count($resultat); 
        ?>

        <?php for($i=0;$i < $size; $i++): ?>  
            <tr><td>

        <?php foreach($resultat[$i] as $key => $valeur): ?>    
        <?php echo $valeur; ?>  
        <?php endforeach; ?>
        </td></tr>
        <?php endfor; ?>
        </table>

    </section> 


    <?php

    //PDO : initialiser la connection
   // $pdo = new PDO('sqlite:movies.db');

    //Créer notre reqête SQL
  //  $requete = $pdo->query("SELECT * FROM movie");

    //Execution
    //$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    // affichage
    // print_r($resultat);
    foreach($resultat as $patapouf) {
        echo "<div class='card'>";
            echo "  <div class='img-container'>
                        <img src='./img/chihiro.jpeg' alt='Avatar'>
                    </div>
            ";
            echo "<div class='container'>";
                echo "<h4><b>". $patapouf['titre']."</b></h4>";
                echo "<h5>". $patapouf['realisateur'] ."</h5>";
                echo "<p>". $patapouf['acteur']."</p>";

                echo "<p style='font-style: italic;color:grey;' >". $patapouf['synopsis']."</p>";
            echo "</div>";
        echo "</div>";
        echo "<br>";
    }
?>

</body>
</html>