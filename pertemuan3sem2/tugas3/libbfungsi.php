<?php

	function kelulusan($TOTALNilai){
		if($TOTALNilai > 55){
			return "lulus";
		} else {
			return "tidak lulus";
		}
	}
	
	function grade($TOTALNilai) {
		if ($TOTALNilai = 100 && $TOTALNilai>=85){
			return "A";
		} 
		elseif ($TOTALNilai = 84 && $TOTALNilai>=70){
			return "B";
		} 
		elseif($TOTALNilai = 69 && $TOTALNilai>=56){
			return "C";
		} 
		 elseif($TOTALNilai = 55 && $TOTALNilai>=36){
			return "D";
		} 
		elseif ($TOTALNilai = 35 && $TOTALNilai>=0){
			return "E";
		} 
		 else{
			return "I";
		} 
	}

    function predikat($grade) {

		switch ($grade) {
			case 'A':
				return "Sangat Memuaskan";
			case 'B':
				return "Memuaskan";
			case 'C':
				return "Cukup memuaskan";
			case 'D':
				return "Kurang";
			case 'E':
				return "Sangat Kurang";
	
			default:
				return "Tidak Ada";
		}	

	}
	
?>