<?php

function splitname($name){
    $namearray = explode(" ", $name);
    $fname = $namearray[0];
    $lname = $namearray[1];
    return array($fname,$lname);
}
