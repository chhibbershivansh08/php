<?php
	function factorial($n) {
    		if ($n == 0 || $n == 1) return 1; // Base case
    		return $n * factorial($n - 1); // Recursive call
	}

	$number = 5;
	echo "Factorial of $number is: " . factorial($number);
	echo "<br><br>";
	echo "Code executed by Shivansh Chhibber(0221BCA157)(2220100328)";
?>
