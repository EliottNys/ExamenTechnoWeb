<?php

class Shelter
{
    private $_listRooms = array();

    public function showarray()
    {
        return $this->_listRooms;
    }
    public function add($room) {
        array_push($this->_listRooms, $room);
        $this->saveApartment();
    }
    public function saveApartment() {
        $_SESSION["apartment"] = $this;
    }
}