<?php 
function diferenca($data)
{
    $seg = strtotime($data);
    $min = $seg / 60;
    $horas = $min / 60;
    $dias = $horas / 24;

    $datenow = date('Y-m-d');
    $segnow = strtotime($datenow);
    $minnow = $segnow / 60;
    $horasnow = $minnow / 60;
    $diasnow = $horasnow / 24;

    $intervalo = $diasnow - $dias;
    return 'Intervalo é de ' . $intervalo . ' dias';

}
echo diferenca(date('2017-08-13')) . PHP_EOL;

