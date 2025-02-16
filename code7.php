<?php

    	// Class definition
    	class greeting
    	{
        	// properties
        	public $str = "Hello World!";
        
        	// methods
        	function show_greeting()
        	{
            		return $this->str;
        	}
    	}
     
    	// Create object from class
    	$message = new greeting;
    	var_dump($message);
	echo "<br><br>";
	echo "Code executed by Shivansh Chhibber(0221BCA157)(2220100328)";
?>