<?php 
	function numeroReais($numero) {
		return "R$ " . number_format($numero, 2, ",", ".");
	}
?>