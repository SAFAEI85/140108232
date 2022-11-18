<?php
function Num ()
{
function number ()
{
    $x=readline();
    if ($x == -1){return;} 
    number();
    print $x."\n";
}
number();
} Num();