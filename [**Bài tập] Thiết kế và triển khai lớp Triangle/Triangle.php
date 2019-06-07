<?php
class Triangle extends Shape{
    public $side1 = 1;
    public $side2 = 1;
    public $side3 = 1;

    public function __construct($side1=1,$side2=1,$side3=1)
    {
        parent::__construct();
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;
    }
    public function getSide1(){
        return $this->side1;
    }
    public function setSide1($side1){
        $this->side1=$side1;
    }
    public function getSide2(){
        return $this->side2;
    }
    public function setSide2($side2){
        $this->side2=$side2;
    }
    public function getSide3(){
        return $this->side3;
    }
    public function setSide3($side3){
        $this->side3=$side3;
    }
    public function getArea(){
        $p=($this->side1+$this->side2+$this->side3)/2;
        $area=sqrt($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3));
        return $area;
    }
    public function getPerimeter(){
        $P=$this->side1+$this->side2+$this->side3;
        return $P;
    }
    public function toString(){
        return 'Area: '.$this->getArea().'<br>'.'Perimeter: '.$this->getPerimeter();
    }

}