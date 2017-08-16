<?php 
function ordenar($date)
{
     return date('Y-m-d', strtotime(date($date)));
}
$dates = ['01-02-2017', '03-05-2017', '14-10-2016', '26-05-2017', '05-10-2018'];
$newdate = array_map("ordenar", $dates);
var_dump($newdate);


