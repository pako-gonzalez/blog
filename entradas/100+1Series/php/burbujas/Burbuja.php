<?php

class Burbuja {

    public static function ordena(array $lista): array {
        $n = count($lista);
        for ( $i = 1; $i < $n-1; $i++ ){
            for( $j = 0; $j < $n-$i; $j++  ){
                if( $lista[ $j ] > $lista[ $j+1 ] ){
                    $temp = $lista[$j];
                    $lista[$j] = $lista[$j+1];
                    $lista[$j+1] = $temp;
                }
            }
        }
        return $lista;
    }

}

$lista = [ 8, 5, 1, 6, 4, 3, 7, 2 ];
echo "Lista : ".implode(',', $lista)."\n";
$timeStart = new DateTime();
$lista = Burbuja::ordena($lista);
$timeEnd = new DateTime();
$intervalo = ($timeEnd->format('u') - $timeStart->format('u'))/1000000;
echo "En orden : ".implode(',', $lista)."\n";
echo $intervalo." segundos\n";
