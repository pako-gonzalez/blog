<?php

class Burbuja {

    public static function ordena( array $lista ): array {
        $intercambio = true;
        $ultimo = count($lista) - 2;

        // Solo continua si ha ocurrido un intercambio
        while( $intercambio ){
            $intercambio = false;

            for ( $i = 0; $i <= $ultimo ; $i++ ){
                if( $lista[ $i ] > $lista[ $i+1 ] ){
                    $temp = $lista[$i];
                    $lista[$i] = $lista[$i+1];
                    $lista[$i+1] = $temp;
                    $intercambio = true;
                    echo ".";
                }
            }
            $ultimo--;
        }
        return $lista;
    }

    public static function ordenaYMuestra( array $lista ){
        echo "Lista : ".implode(',', $lista)."\n";
        $timeStart = new DateTime();
        $lista = self::ordena($lista);
        $timeEnd = new DateTime();
        $intervalo = ($timeEnd->format('u') - $timeStart->format('u'))/1000000;
        echo "En orden : ".implode(',', $lista)."\n";
        echo $intervalo." segundos\n";
    }

}
// Caso más favorable - 1 iteracion
$lista = [ 1, 2, 3, 4, 5, 6, 7, 8 ];
Burbuja::ordenaYMuestra($lista);

// Solo dos elementos desordenados - 2 iteraciones
echo "\n\n";
$lista = [ 1, 2, 3, 5, 4, 6, 7, 8 ];
Burbuja::ordenayMuestra($lista);

// Ejemplo inicial - n iteraciones
echo "\n\n";
$lista = [ 8, 5, 1, 6, 4, 3, 7, 2 ];
Burbuja::ordenayMuestra($lista);
