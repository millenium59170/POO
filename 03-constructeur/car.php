<?php

class Car
{
    private $brand;
    private $model;
    private $color = 'blanc';
    private $wheel = 4;

    public function __construct($brand, $model)
  
    {
        $this->brand = $brand;
        $this->model = $model;

    }
    public function setColor($color)
    {
        $this->color = $color;
        
    }
    public function drive()
    {
        return 'La '.$this->brand.' '.$this->model.' roule sur ses 4 roues.';
    }
    public function klaxon()
    {
        return 'La '.$this->brand.' '.$this->model.' roule sur ses 4 roues.';
    }
}