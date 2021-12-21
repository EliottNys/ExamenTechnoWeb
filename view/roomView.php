<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Encoder les données</title>
        <link href="public/css/style.css" rel="stylesheet" />
    </head>
        
    <body>
        <h1>Encoder les données</h1>
        <form action="index.php" method="POST">
        <p>Pièce
            <input name="piece">
        </p>
        <p>Largeur
            <input name="largeur" type="number">
        </p>
        <p>Longueur
            <input name="longueur" type="number"/>
        </p>
        <p>
            <input class="button" type="submit" name="addToAppartment" value="Enregistrer" /> 
        </p>
        <p>
            <input class="button" type="submit" name="CalculateArea" value="Calculer la surface" /> 
        </p>
        </form>
    </body>
</html>