<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<?php include "head.php";?>
</head>
<body>
	<div id="header">
		<?php include "antent.php";?>
	</div>
	<div id="body">
	<!--
		TESTUL IN SINE
	-->
	
	<form action="process_data.php" method="post">
		Nume: <input type="text" name="name"><br>
		Varsta: <input type="text" name="age"><br>
		Sex: 
			 <input type="radio" name="gender" value="M"> Masculin &nbsp;
			 <input type="radio" name="gender" value="F"> Feminin <br>
	    <br><br>


	<!--- urmeaza intrebarile 
	-->
	<table>
		<tr>
			<td> O vizita la galeria de arta m-ar plictisii destul de tare </td>
			<td>
			 	<input type="radio" name="intrebare1" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare1" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare1" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare1" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare1" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Planific si organizez lucrurile pentru a evita agitatia de ultim moment </td>
			<td>
			 	<input type="radio" name="intrebare2" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare2" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare2" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare2" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare2" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Rareori port ranchiuna cuiva, chiar si celor care m-au nedreptatit </td>
			<td>
			 	<input type="radio" name="intrebare3" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare3" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare3" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare3" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare3" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> In general sunt satisfacut cu mine insumi </td>
			<td>
			 	<input type="radio" name="intrebare4" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare4" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare4" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare4" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare4" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Imi este teama daca trebuie sa calatoresc atunci cand sunt conditii meteo nefavorabile</td>
			<td>
			 	<input type="radio" name="intrebare5" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare5" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare5" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare5" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare5" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Nu m-as folosi de lingusire pentru a obtineo marire de salariu sau o promovare, chiar daca <br> m-as gandii ca astfel as reusi </td>
			<td>
			 	<input type="radio" name="intrebare6" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare6" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare6" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare6" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare6" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Sunt interesat sa invat despre istoria si politica unei tari</td>
			<td>
			 	<input type="radio" name="intrebare7" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare7" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare7" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare7" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare7" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Imi fortez limitele atunci cand incerc sa ating un scop </td>
			1
			 	<input type="radio" name="intrebare8" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare8" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare8" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare8" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare8" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Oamenii imi spun uneori ca sunt prea critic la adresa altora </td>
			<td>
			 	<input type="radio" name="intrebare9" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare9" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare9" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare9" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare9" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Rareori imi exprim opiniile in intalniri de grup</td>
			<td>
			 	<input type="radio" name="intrebare10" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare10" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare10" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare10" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare10" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Uneori nu pot sa nu imi fac griji in ceea ce priveste lucrurile nesmnificative</td>
			<td>
			 	<input type="radio" name="intrebare11" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare11" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare11" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare11" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare11" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Daca as sti ca nu pot fi prins, as fi dispus sa fur un milion de dolari </td>
			<td>
			 	<input type="radio" name="intrebare12" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare12" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare12" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare12" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare12" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Mi-ar place sa creez o opera de arta, cum ar fi un roman, o melodie sau un tablou </td>
			<td>
			 	<input type="radio" name="intrebare13" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare13" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare13" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare13" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare13" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Atunci cand se lucreaza la ceva, nu accord atentie detalilor </td>
			<td>
			 	<input type="radio" name="intrebare14" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare14" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare14" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare14" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare14" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Uneori oamenii imi spun ca sunt prea incapatant </td>
			<td>
			 	<input type="radio" name="intrebare15" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare15" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare15" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare15" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare15" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Prefer locuri de munca care impplica interactiune sociala activa in detrimentul celor <br> care presupun lucrul de unul singur </td>
			<td>
			 	<input type="radio" name="intrebare16" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare16" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare16" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare16" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare16" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Cand sufar o experienta dureroasa, am nevoie de cineva care sa ma faca sa ma simt confortabil </td>
			<td>
			 	<input type="radio" name="intrebare17" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare17" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare17" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare17" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare17" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Sa am foarte multi baninu este unu lucru deosebit deosebit de important pentru mine </td>
			<td>
			 	<input type="radio" name="intrebare18" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare18" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare18" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare18" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare18" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Cred ca ideile radicale reprezinta o pierdere de timp </td>
			<td>
			 	<input type="radio" name="intrebare19" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare19" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare19" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare19" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare19" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Iau mai degraba decizii spontane decat bazate pe o analiza atenta </td>
			<td>
			 	<input type="radio" name="intrebare20" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare20" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare20" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare20" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare20" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Oamenii ma considera o persoana temperamentala </td>
			<td>
			 	<input type="radio" name="intrebare21" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare21" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare21" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare21" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare21" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> In cele mai multe zile, ma simt vesel si optimist </td>
			<td>
			 	<input type="radio" name="intrebare22" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare22" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare22" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare22" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare22" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Imi vine sa plang cand ii vad pe altii plangand </td>
			<td>
			 	<input type="radio" name="intrebare23" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare23" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare23" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare23" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare23" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Cred ca am dreptul la mai mult respect decat alte persoane </td>
			<td>
			 	<input type="radio" name="intrebare24" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare24" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare24" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare24" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare24" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Daca as avea ocazia, as dori sa particip la un concert de muzica clasica </td>
			<td>
			 	<input type="radio" name="intrebare25" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare25" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare25" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare25" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare25" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Uneori am dificultati atunci cand lucrez datorita faptului ca sunt dezorganizat </td>
			<td>
			 	<input type="radio" name="intrebare26" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare26" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare26" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare26" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare26" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Atitudinea mea fata de oameni care m-au tratat urat este de genul "uita si iarta" </td>
			<td>
			 	<input type="radio" name="intrebare27" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare27" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare27" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare27" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare27" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Nu cred ca sunt o persoana populara </td>
			<td>
			 	<input type="radio" name="intrebare28" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare28" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare28" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare28" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare28" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Cand vine vorba de pericol fizic, sunt foarte fricos </td>
			<td>
			 	<input type="radio" name="intrebare29" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare29" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare29" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare29" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare29" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Daca vreau ceva de la cineva, voi rade chiar si la glumele proaste ale acelei persoane </td>
			<td>
			 	<input type="radio" name="intrebare30" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare30" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare30" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare30" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare30" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Rasfoirea unei enciclopedii nu mi-ar provoca nici o placere</td>
			<td>
			 	<input type="radio" name="intrebare31" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare31" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare31" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare31" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare31" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Fac doar minimul de munca care imi este cerut </td>
			<td>
			 	<input type="radio" name="intrebare32" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare32" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare32" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare32" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare32" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Amtendinta de a fi ingaduitor in judecarea altor persoane </td>
			<td>
			 	<input type="radio" name="intrebare33" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare33" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare33" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare33" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare33" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> In situatii sociale, eu sunt, de obicei, cel care face primul pas </td>
			<td>
			 	<input type="radio" name="intrebare34" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare34" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare34" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare34" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare34" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Imi fac mai putine griji comparativ cu alte persoane </td>
			<td>
			 	<input type="radio" name="intrebare35" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare35" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare35" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare35" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare35" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Nu as accepta niciodata mita, chiar daca ar fi vorba despre o suma foarte mare </td>
			<td>
			 	<input type="radio" name="intrebare36" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare36" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare36" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare36" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare36" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Oamenii mi-au spus de multe ori ca am o imaginatie bogata </td>
			<td>
			 	<input type="radio" name="intrebare37" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare37" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare37" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare37" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare37" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Incerc intotdeauana sa fiu eficient atunci cand lucrez, chiar daca acest lucru imi consuma foarte mult timp </td>
			<td>
			 	<input type="radio" name="intrebare38" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare38" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare38" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare38" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare38" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Sunt, de obicei, destul de flexibil in ceea ce priveste opiniile mele, atunci cand <br> oamenii nu sunt de acord cu mine </td>
			<td>
			 	<input type="radio" name="intrebare39" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare39" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare39" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare39" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare39" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Primul lucru pe care il fac intr-un loc nou este sa imi fac prieteni </td>
			<td>
			 	<input type="radio" name="intrebare40" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare40" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare40" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare40" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare40" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Pot face fata situatilor dificile fara suportul emotional al altora </td>
			<td>
			 	<input type="radio" name="intrebare41" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare41" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare41" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare41" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare41" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Sa detin lucruri scumpe mi-ar crea o mare placere</td>
			<td>
			 	<input type="radio" name="intrebare42" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare42" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare42" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare42" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare42" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Imi plac oamenii care au opinii neconventionale </td>
			<td>
			 	<input type="radio" name="intrebare43" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare43" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare43" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare43" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare43" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Fac foarte multe greseli deoarece nu gandesc inainte de a actiona</td>
			<td>
			 	<input type="radio" name="intrebare44" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare44" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare44" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare44" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare44" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Cei mai multi oameni au tendinta de a se infuria mai repede decat mine </td>
			<td>
			 	<input type="radio" name="intrebare45" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare45" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare45" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare45" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare45" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Majoritatea oamenilor sunt mult mai optimisti si mai dinamici decat sunt eu in general </td>
			<td>
			 	<input type="radio" name="intrebare46" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare46" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare46" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare46" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare46" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Am emotii puternice atunci cand cineva apropiat pleaca departe pentru o lunga perioada de timp </td>
			<td>
			 	<input type="radio" name="intrebare47" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare47" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare47" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare47" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare47" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Vreau ca oamenii sa stie ca sunt o persoana foarte importanta </td>
			<td>
			 	<input type="radio" name="intrebare48" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare48" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare48" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare48" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare48" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Nu ma consider a fi o persoana creativa sau artistica </td>
			<td>
			 	<input type="radio" name="intrebare49" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare49" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare49" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare49" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare49" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Oamenii ma considera a fi o persoana perfectionista </td>
			<td>
			 	<input type="radio" name="intrebare50" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare50" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare50" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare50" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare50" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Chiar si atunci cand oamenii fac o multime de greseli, rareori fac comentarii negative </td>
			<td>
			 	<input type="radio" name="intrebare51" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare51" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare51" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare51" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare51" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Cateodata simt ca sunt o persoana fara valoare </td>
			<td>
			 	<input type="radio" name="intrebare52" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare52" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare52" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare52" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare52" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Nu m-as panica nici in situatii de urgenta </td>
			<td>
			 	<input type="radio" name="intrebare53" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare53" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare53" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare53" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare53" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Nu as pretinde sa plac pe cineva doar pentru a determina persoana respectiva sa imi faca favoruri </td>
			<td>
			 	<input type="radio" name="intrebare54" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare54" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare54" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare54" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare54" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Mi se pare plictisitor sa discut despre filozofie </td>
			<td>
			 	<input type="radio" name="intrebare55" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare55" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare55" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare55" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare55" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Prefer sa fac tot ce imi trece prin cap, mai degraba decat sa urmez un plan prestabilit </td>
			<td>
			 	<input type="radio" name="intrebare56" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare56" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare56" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare56" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare56" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Cand oamenii imi spun ca ma insel, prima mea reactie este sa ma contrazic cu ei</td>
			<td>
			 	<input type="radio" name="intrebare57" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare57" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare57" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare57" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare57" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Cand sunt intr-un grup de oameni, eu sunt de multe ori cel care vorbeste in numele grupului </td>
			<td>
			 	<input type="radio" name="intrebare58" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare58" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare58" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare58" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare58" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> Imi pastrez cumpatul, chiar si in situatiile in care cei mai multi oameni devin foarte sentimentali </td>
			<td>
			 	<input type="radio" name="intrebare59" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare59" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare59" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare59" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare59" value="5"> 5 &nbsp;
			</td>
		</tr>
		<tr>
			<td> As fi tentat sa folosesc bani falsi, daca as fi sigur ca nu as putea fi prins </td>
			<td>
			 	<input type="radio" name="intrebare60" value="1"> 1 &nbsp;
			 	<input type="radio" name="intrebare60" value="2"> 2 &nbsp;
			 	<input type="radio" name="intrebare60" value="3"> 3 &nbsp;
			 	<input type="radio" name="intrebare60" value="4"> 4 &nbsp;
			 	<input type="radio" name="intrebare60" value="5"> 5 &nbsp;
			</td>
		</tr>
		<table>


	<input type="submit">

	</div>
	<?php include "footer.php";?>
</body>
</html>
