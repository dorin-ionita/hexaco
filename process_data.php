<?php
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];

	# am luat informatile personale ale userului

	$answer = array($_POST['intrebare1'],
					$_POST['intrebare2'],
					$_POST['intrebare3'],
					$_POST['intrebare4'],
					$_POST['intrebare5'],
					$_POST['intrebare6'],
					$_POST['intrebare7'],
					$_POST['intrebare8'],
					$_POST['intrebare9'],
					$_POST['intrebare10'],
					$_POST['intrebare11'],
					$_POST['intrebare12'],
					$_POST['intrebare13'],
					$_POST['intrebare14'],
					$_POST['intrebare15'],
					$_POST['intrebare16'],
					$_POST['intrebare17'],
					$_POST['intrebare18'],
					$_POST['intrebare19'],
					$_POST['intrebare20'],
					$_POST['intrebare21'],
					$_POST['intrebare22'],
					$_POST['intrebare23'],
					$_POST['intrebare24'],
					$_POST['intrebare25'],
					$_POST['intrebare26'],
					$_POST['intrebare27'],
					$_POST['intrebare28'],
					$_POST['intrebare29'],
					$_POST['intrebare30'],
					$_POST['intrebare31'],
					$_POST['intrebare32'],
					$_POST['intrebare33'],
					$_POST['intrebare34'],
					$_POST['intrebare35'],
					$_POST['intrebare36'],
					$_POST['intrebare37'],
					$_POST['intrebare38'],
					$_POST['intrebare39'],
					$_POST['intrebare40'],
					$_POST['intrebare41'],
					$_POST['intrebare42'],
					$_POST['intrebare43'],
					$_POST['intrebare44'],
					$_POST['intrebare45'],
					$_POST['intrebare46'],
					$_POST['intrebare47'],
					$_POST['intrebare48'],
					$_POST['intrebare49'],
					$_POST['intrebare50'],
					$_POST['intrebare51'],
					$_POST['intrebare52'],
					$_POST['intrebare53'],
					$_POST['intrebare54'],
					$_POST['intrebare55'],
					$_POST['intrebare56'],
					$_POST['intrebare57'],
					$_POST['intrebare58'],
					$_POST['intrebare59'],
					$_POST['intrebare60']
					);
	foreach ( $answer as $key => $n ){
		print "The answer is".$n."\n";
	}

	print "Name is ".$name;
?>