<?php

function GenerateArray($first,$last){

	$count_row = ($last - $first + 1) * 10; //количество строк в массиве
	$fmul = (int)$first; //первый множитель матрицы
	$smul = 0; //второй множитель матрицы 
	$result = array();
	
	for ($row = 0; $row < $count_row; $row++){
		$smul++;
		$result[$row][] = $fmul;
		$result[$row][1] = $smul;
		$result[$row][2] = $fmul * $smul;

		if ($smul == 10){
			$smul = 0;
			$fmul++;
		};		
	}
	return $result;
};

function GenerateTable($array){
	var_dump($array);
};



if(isset($_GET["first"])){
  
    $first = $_GET["first"];
}
if(isset($_GET["last"])){
  
    $last = $_GET["last"];
}

?>