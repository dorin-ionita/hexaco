<?php
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];

	# am luat informatile personale ale userului

	$answer = $_POST['intrebare'];
	foreach ( $answer as $key => $n ){
		print "The answer is".$n."\n";
	}

	print "Name is ".$name;
?>