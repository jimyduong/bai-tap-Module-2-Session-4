<?php
include "Point2D.php";
include "Point3D.php";
$point2D=new Point2D(3,4);
$point3D=new Point3D(4,5,6);
echo $point2D->toString();
echo '<br>';
echo $point3D->toString();
