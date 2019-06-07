<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
$circle=new Circle(5,"red");
$cylinder=new Cylinder(10,"blue",20);
echo $circle->toString();
echo '<br>';
echo $cylinder->toString();