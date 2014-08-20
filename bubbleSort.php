<?php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function fillArray(){
	$array = array();
	for($i=0; $i<10000; $i++){
		$array[] = rand(0,10000);
	}
	return $array;
}

function swapValues($array, $index1, $index2){
	//Swap in place
	$temp = $array[$index1];
	$array[$index1] = $array[$index2];
	$array[$index2] = $temp;
	return $array;
}

function bubbleSort($array){
	for($i=0; $i<count($array); $i++){
		for($j=$i+1; $j<count($array); $j++){
			if($array[$j] < $array[$i])
				$array = swapValues($array, $j, $i);
		}
	}
	return $array;
}

$time_start = microtime_float();
$array = bubbleSort(fillArray());
$time_end = microtime_float();
$duration = $time_end - $time_start;
echo $duration;

var_dump(bubbleSort($array));

?>