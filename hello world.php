<?php



	$first_name = "Jarmo";
	$last_name = "Habakuk";
	
	echo $first_name. " ".$last_name;

?>

<br>
<?php
//kommentaar: kui on v'iksem, kui 18, siis alaealine, kui on suurem siis t'isealine
	$age = 5;
	
	if($age < 18) {
		//t6ene
		echo "alaealine";
		
	} else {
		
	
		//v22r
		echo "täisealine";
	}

?>

<br>

<?php

// niimitu korda "palju", kui on vanust

	for($i = 0; $i < $age; $i = $i + 1) {
		
		echo "palju ". $i. " ";
	}
	
	echo "õnne";
	?>
	
	<br>
	
<?php

//kuupaev kujul: Friday, 11.09.2015
echo( date("l, j.M.Y"));




?>