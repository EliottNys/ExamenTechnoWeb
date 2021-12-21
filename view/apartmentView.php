<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Liste des pièces</title>
        <link href="public/css/style.css" rel="stylesheet" />
    </head>
        
    <body>
    <h1>Liste des pièces de l'appartement</h1>
        <p>
            <ul>
                <?php
                if (sizeof($apartment->showarray()) != 0) {
                    foreach($apartment->showarray() as $room) 
                    {
                        ?>
                        <li class="piece"><?php echo "Pièce : "$room->type()." ".$room->area()." m2"?></li>
                <?php }
                    <li id="total"><echo "Surface totale : 32 m2"</li> }
                else
                {
                    echo "Pas de chambres dans l'appartement";
                }  ?>
            </ul>
            <form action="index.php" method="POST">
                <input class = "button" type="submit" name= 'addRoom' value='Encoder une autre pièce'/>
            </form>
            <form action="index.php" method="POST">
                <input class = "button" type="submit" name= 'cleanApartment' value="Vider l'appartement"/>
            </form>
        </p>
    </body>
</html>