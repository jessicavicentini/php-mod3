<?php 
require __DIR__ . ('/arrays.php');

echo 'a)' . PHP_EOL;
foreach ($cityPolitics as $valueA) {
     $cityPopulation[$valueA['name']] = $valueA['population'];
}
asort($cityPopulation);
foreach ($cityPopulation as $name => $habitantes) {
    echo $name . ': ' . $habitantes . ' habitantes' . PHP_EOL;
}

echo PHP_EOL . 'b)' . PHP_EOL;
foreach ($cityPolitics as $valueB) {
 $corrupt = $valueB['mayor']['corrupt'] . PHP_EOL;
 if ($corrupt == true)
    echo $valueB['mayor']['name'] . ', ' . (date('Y-m-d') - $valueB['mayor']['birthdate']) . ' anos' . PHP_EOL ;
}

echo PHP_EOL . 'c)' . PHP_EOL . 'Contatos dos vereadores:' . PHP_EOL;
$pessoas = ($cityPolitics[1]['councilman']['people']);
foreach ($pessoas as $valueC) {
    $councilmans = $valueC['contact'];
    foreach ($councilmans as $value2C) {
        $contacts = $value2C;
        foreach ($contacts as $value3C) {
            echo $value3C . PHP_EOL;
        }
    }
}

echo PHP_EOL . 'd)' . PHP_EOL . 'Presidente mais velho:' . PHP_EOL;

foreach ($cityPolitics as $keyD => $valueD) {
    $aux[$valueD['name'] . ': ' . $valueD['mayor']['name']] = date('Y-m-d') - $valueD['mayor']['birthdate'];
} 
$maior = max($aux);

foreach ($aux as $nome => $idade) {
    if ($idade == $maior) {
        echo $nome . ', ' . $idade . ' anos' . PHP_EOL;
    }
}
$count = 0;
echo PHP_EOL . 'e)' . PHP_EOL;
foreach ($cityPolitics as $keyE => $valueE) {
    echo PHP_EOL . $valueE['name'].  PHP_EOL;
    $vereadores = $valueE['councilman']['people'];
    foreach ($vereadores as $keyE2 => $valueE2) {
        $count++;
    } 
    echo 'Vereadores: ' . $count . PHP_EOL;
    $count = 0;
}

echo PHP_EOL . 'f)' . PHP_EOL;
$count2 = 0;

foreach ($cityPolitics as $keyF => $valueF) {
    echo PHP_EOL . $valueF['name'] .  PHP_EOL;
    $vereadoresF = $valueF['councilman']['people'];
    foreach ($vereadoresF as $keyF2 => $valueF2) {
        if (array_key_exists('relatives', $valueF2)) {
            $count2++;
        }

    } 
    echo 'Vereadores com parentes: ' . $count2 . PHP_EOL;
  
    $count2 = 0;
}

echo PHP_EOL . 'g)' . PHP_EOL;
$count3 = 0;
$countVereadores = 0;
foreach ($cityPolitics as $keyG => $valueG) {
    $vereadoresG = $valueG['councilman']['people'];
    echo PHP_EOL . $valueG['name'] . PHP_EOL;
    foreach ($vereadoresG as $keyG2 => $valueG2) {
        if(array_key_exists('relatives', $valueG2)) {
            $relatives = $valueG2['relatives'];
            foreach ($relatives as $keyG3 => $valueG3) {
                     $count3++;      
            }
        } 
        $countVereadores++;
    }
    echo 'Total vereadores e parentes: ' . ($count3 + $countVereadores) . PHP_EOL;
    $countVereadores = 0;
    $count3 = 0;
}

echo PHP_EOL . 'h)' . PHP_EOL;
$count4 = 0;
foreach ($cityPolitics as $keyH => $valueH) {
    echo $valueH['name'] . PHP_EOL;
    $vereadoresH = $valueH['councilman']['people'];
    foreach ($vereadoresH as $key2H => $value2H) {
        $count4++;
    }
    echo ($valueH['population'] / $count4) . PHP_EOL;
    $count4 = 0;
}
echo PHP_EOL . 'i)' . PHP_EOL;
$count5 = 0;
foreach ($cityPolitics as $keyI => $valueI) {
    $vereadoresI = $valueI['councilman']['people'];
    foreach ($vereadoresI as $keyI2 => $valueI2) {
        if(array_key_exists('relatives', $valueI2)) {
            $relativesI = $valueI2['relatives'];
            foreach ($relativesI as $keyI3 => $valueI3) {
                     if ($valueI3['useless'] == true) {
                        $count5++;
                     }
            }
        if($count5 > 0) {
            echo PHP_EOL . 'Vereador ' . $valueI2['name'] . ' contatos:' . PHP_EOL;
            $contactsI = $valueI2['contact'];
            foreach ($contactsI as $tellI => $numI) {
                $numbersI = $numI;
                foreach ($numbersI as $numberI) {
                    echo $numberI . PHP_EOL;
                }
            }
        }
            $count5 = 0;
        } 
    }

}

echo PHP_EOL . 'j)' . PHP_EOL;
$count6 = 0;
foreach ($cityPolitics as $keyJ => $valueJ) {
    $vereadoresJ = $valueJ['councilman']['people'];
    echo PHP_EOL . $valueJ['name'] . PHP_EOL . PHP_EOL . 'Parentes:' . PHP_EOL;
    foreach ($vereadoresJ as $keyJ2 => $valueJ2) {
        if(array_key_exists('relatives', $valueJ2)) {
            $relativesJ = $valueJ2['relatives'];
            foreach ($relativesJ as $keyJ3 => $valueJ3) {
                     if ($valueJ3['useless'] == true) {
                        echo $valueJ3['name'] . PHP_EOL;
                        $count6++;
                     }
            }
        if($count6 > 0) {
            echo 'Vereador ' . $valueJ2['name'] . PHP_EOL;
        }
            $count6 = 0;
        } 
    }

}
echo PHP_EOL . 'k)' . PHP_EOL;
foreach ($cityPolitics as $valueK) {
    $dataJ = ($valueK['councilman']['started_at']);
    $dataJ = date( 'Y-m-d' , strtotime( $dataJ . ' +4 years'));
    echo PHP_EOL . $valueK['name'] . PHP_EOL .  'Próxima eleição: ' . $dataJ . PHP_EOL;
}
echo PHP_EOL . 'l)' . PHP_EOL;
$count7 = 0;
foreach ($cityPolitics as $keyL => $valueL) {
    $vereadoresL = $valueL['councilman']['people'];
    echo PHP_EOL . $valueL['name'] . PHP_EOL;
    foreach ($vereadoresL as $key2L => $value2L) {
        $contact = $value2L['contact'];
        foreach ($contact as $key3L => $value3L) {
            $numberL = $value3L;
            foreach ($numberL as $key4L => $value4L) {
                $count7++;
            }
            if ($count7 >= 2) {
                 echo $value2L['name'] . PHP_EOL;
            }
        }
        $count7 = 0;
    }

}

echo PHP_EOL . 'm)' . PHP_EOL;
$count8 = 0;
foreach ($cityPolitics as $valueM) {
    $vereadoresM = $valueM['councilman']['people'];
    foreach ($vereadoresM as $value2M) {
        if(array_key_exists('relatives', $value2M)) {
            $parentesM = $value2M['relatives'];
            foreach ($parentesM as $value3M) {
                if ($value3M['useless'] == false) {
                    $count8++;
                }
             }
             $vereadorParente[$value2M['name']] = $count8;
             $count8 = 0;
             $maiorM = max($vereadorParente);
           }
    }
}
             
echo 'Vereadores que mais prejudicam a cidade:' . PHP_EOL;
foreach ($vereadorParente as $key4M => $value4M) {
    if ($value4M == $maiorM) {
    echo $key4M . PHP_EOL;
    }
}