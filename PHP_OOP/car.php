<?php

Class Car{
    private $brand;
    private $color;
    private $vehicleType;

    public function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }

    public function display_car(){
        echo "The car make is {$this->brand} and the color is {$this->color}";
    }


}