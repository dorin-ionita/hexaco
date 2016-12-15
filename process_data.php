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

	# TODO:

	#Honesty-Humility
	$sincerity = $answer[5] + 6 - $answer[29] + $answer[53];
	$fairness = 6 - $answer[11] + $answer[35] + 6 - $answer[59];
	$greed_avoidance = $answer[17] + 6 - $answer[41];
	$modesty = 6 - $answer[23] + 6 - $answer[47];

	#Emotionality
	$fearfulness = $answer[4] + $answer[28] + 6 - $answer[52];
	$anxiety = $answer[10] + 6 - $answer[34];
	$dependence = $answer[16] + 6 - $answer[40];
	$sentimentality = $answer[22] + $answer[46] + 6 - $answer[58];

	#Extraversion
	$social_self_esteem = $answer[3] + 6 - $answer[27] + 6 - $answer[51];
	$social_boldmess = 6 - $answer[9] + $answer[33] + $answer[57];
	$sociability = $answer[15] + $answer[39];
	$liveliness = $answer[21] + 6 - $answer[45];

	#Agreeableness
	$forgiveness = $answer[2] + $answer[26];
	$gentleness = 6 - $answer[8] + $answer[32] + $answer[50];
	$flexibility = 6 - $answer[14] + $answer[38] + 6 - $answer[58];
	$patience = 6 - $answer[20] + $answer[44];

	#Conscientiousness
	$organization = $answer[1] + 6 - $answer[25];
	$diligence = $answer[7] + 6 - $answer[31];
	$perfectionism = 6 - $answer[13] + $answer[37] + $answer[49];
	$prudence = 6 - $answer[19] + 6 - $answer[43] + 6 - $answer[55];

	#Openness to Experience

	$aesthetic_appreciation = 6 - $answer[0] + $answer[24];
	$inquisitiveness = $answer[7] + 6 - $answer[30];
	$creativity = $answer[12] + $answer[36] + 6 - $answer[48];
	$unconventionality = 6 - $answer[18] + $answer[42] + 6 - $answer[54];


	print "Name is ".$name;
?>