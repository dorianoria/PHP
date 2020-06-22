<?php
$unit_cost=15;
if (isset($unit_cost)){
    $wholesale_price=$unit_cost;
} else
{
    $wholesale_price=25;
}

echo $wholesale_price;