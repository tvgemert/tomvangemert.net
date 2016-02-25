<?php
	
	function myAge($bday='23-10-1979') {
		$bday = new DateTime($bday);
		$today = new DateTime();
		$diff = $today->diff($bday);
		return $diff->y;
	}