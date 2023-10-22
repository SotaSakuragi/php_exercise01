<?php

class Car
{
    private $name;
    private $number;
    private $color;

    public function __construct($car_name, $car_number, $car_color)
    {
        $this->name = $car_name;
        $this->number = $car_number;
        $this->color = $car_color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setName($car_name)
    {
        $this->name = $car_name;
    }

    public function setNumber($car_number)
    {
        $this->number = $car_number;
    }
    
    public function setColor($car_color)
    {
        $this->color = $car_color;
    }

    public function information()
    {
        return "車の車種:" . 
                "{$this->getName()}" . PHP_EOL . 
                "車体番号:" . 
                "{$this->getNumber()}" . PHP_EOL . 
                "カラー:" . 
                "{$this->getColor()}" . PHP_EOL;

    }

}
