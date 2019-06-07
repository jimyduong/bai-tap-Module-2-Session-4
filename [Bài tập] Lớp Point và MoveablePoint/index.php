<?php
include "Point.php";
include  "MoveablePoint.php";
$point=new Point(2,3);
$moveable=new MoveablePoint(5,4,4,5);
echo $point->toString();
echo '<br>';
echo $moveable->toString();