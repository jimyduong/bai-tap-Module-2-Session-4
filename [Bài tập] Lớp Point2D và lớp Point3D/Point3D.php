<?php
class Point3D extends Point2D{
    public $z;

    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setZ($z){
        $this->z=$z;
    }
    public function getXYZ(){
        $arr=['x'=>"$this->x",'y'=>"$this->y",'z'=>"$this->z"];
        return $arr;
    }
    public function setXYZ($x,$y,$z){
        $this->x=$x;
        $this->y=$y;
        $this->z=$z;
    }
    public function toString()
    {
        return parent::toString().' '.'z: '.$this->z; // TODO: Change the autogenerated stub
    }
}