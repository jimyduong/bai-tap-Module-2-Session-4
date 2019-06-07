<?php

class Point2D
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x=$x;
    }
    public function getY(){
        return $this->y;
    }
    public function setY($y){
        $this->y=$y;
    }
    public function getXY(){
        $arr=['x'=>"$this.x",'y'=>"$this->y"];
        return $arr;
    }
    public function setXY($x,$y){
        $this->y=$y;
        $this->x=$x;
    }
    public function toString(){
        return 'x: '.$this->x.' '.'y: '.$this->y;
    }

}