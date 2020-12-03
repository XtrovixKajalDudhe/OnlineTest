	<?php
	 //Answer for Question 1   
		    $N = 2;
		    $loads = [10,60,50,15,20];
		    foreach ($loads as $value) {
		    	if ($value <= 50) {
		    		$N = ($N/2);
		    	}else{
		    		$N = 2*$N+1;
		    	}
		    }

	        echo "Sever Running:".ceil($N);
			
		?>


	