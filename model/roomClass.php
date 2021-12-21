<?php
Class Animal
{
    private $_name;
    private $_width;
    private $_length;
    private $_area;

    public function __construct($name, $age, $name)
    {
        $this->_name = $name;
        $this->_width = $width;
        $this->_length = $length;
        $this->_area = $width * $length;
    }

    public function name()
    {
      return $this->_name;
    }
    public function width()
    {
      return $this->_width;
    }
    public function length()
    {
      return $this->_length;
    }
}