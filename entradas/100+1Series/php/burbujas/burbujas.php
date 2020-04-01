<?php
$timeStart = new DateTime();
$lista = [ 8, 5, 1, 6, 4, 3, 7, 2 ];
echo "Lista : ".implode(',', $lista)."\n";
$n = count($lista);
$paso = 0;
for ( $i = 1; $i < $n-1; $i++ ){
	for( $j = 0; $j < $n-$i; $j++  ){
		if( $lista[ $j ] > $lista[ $j+1 ] ){
			$temp = $lista[$j];
			$lista[$j] = $lista[$j+1];
			$lista[$j+1] = $temp;
		}
		$paso++;
		echo "Paso $paso: ".implode(',', $lista)."\n";
	}
}
$timeEnd = new DateTime();
echo "Orden  : ".implode(',', $lista)."\n";
$intervalo = ($timeEnd->format('u') - $timeStart->format('u'))/1000000;
echo $intervalo." segundos\n";
