<?php 

function dataHoje()
{
    return date('d-m-Y');
}

function dataAmanha()
{
    return date('d-m-Y', strtotime('+1 days'));
}

function dataOntem()
{
    return date('d-m-Y', strtotime('-1 days'));
}

function diaSemana($data1, $data2, $dia)
{
    $cont = 0;
    do{
        $data1 = date( "Y-m-d", strtotime( $data1 . ' +1 day'));
        if(date('w',strtotime($data1)) == $dia) {
            $cont++;
        }
            
    } while ($data1 <= $data2);
   return  $cont;
}

function databrasil()
{
    return date('d-m-Y', strtotime(date('Y-m-d')));
}

function databanco()
{
    return date('Y-m-d', strtotime(date('d-m-Y')));
}