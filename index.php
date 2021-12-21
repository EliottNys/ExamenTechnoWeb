<?php

require('controller/apartmentOperations.php');
require('controller/roomAdd.php');
require('model/apartmentClass.php');


session_start();

if (isset($_SESSION["apartment"])){
    $brusselsApartment = $_SESSION["apartment"];
}
else {
    $_SESSION["apartment"] = new Apartment();
    $brusselsApartment = $_SESSION["apartment"];
}

if (isset($_POST["addAnimal"])) {
    addAnimal($brusselsApartment);
}
elseif (isset($_POST["addToApartment"])) {
    addToShelter($brusselsApartment);
}
elseif (isset($_POST["cleanApartment"])) {
    session_destroy();
    session_start();
    $_SESSION["apartment"] = new Apartment();
    $brusselsApartment = $_SESSION["apartment"];
    showApartment(brusselsApartment);
}
else {
    showApartment($brusselsApartment);
}