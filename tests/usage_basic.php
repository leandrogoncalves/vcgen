<?php


$fac = new Vcgen_factory();

$row1 = $fac->newRow();
$col  = $fac->newCol(['width'=>'1/2']);
$row1->addCol($col);


echo '<pre>';
die(print_r($row1));