<?php

$lista = [ 8, 5, 1, 6, 4, 3, 7, 2 ];
print_r($lista);
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
print_r($lista);
