<?php
class Circle{
    public $radius;
    public $color;
    public function __construct($radius,$color)
    {
        $this->color=$color;
        $this->radius=$radius;
    }
    public function getRadius($radius){
        $this->radius=$radius;
    }
    public function setRadius(){
        return $this->radius;
    }
    public function getColor($color){
        $this->color=$color;
    }
    public function setColor(){
        return $this->color;
    }
    public function getP(){
        return 2*pi()*$this->radius;
    }
    public function getArea(){
        return pi()*$this->radius**2;
    }
    public function toString(){
        return 'Radius: '.$this->radius.'<br>'.'Color: '.$this->color.'<br>'.'P :'.$this->getP().'<br>'.'Area: '.$this->getArea();
    }
}