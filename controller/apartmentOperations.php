<?php

function showApartment($apartment)
{
    $apartment = $apartment;
    require("view/apartmentView.php");
}

function addToApartment($apartment)
{
    require('model/roomClass.php');
    if (empty($_POST['name']) or empty($_POST['width']) or empty($_POST['length'])) {}
    else {
        $room = new Room($_POST["name"],$_POST["length"], $_POST["width"]);
        $apartment->add($room);
    }
    require("view/apartmentView.php");
}