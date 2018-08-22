<?php
$micro_time1 = microtime(true);

function anagram_master($s, $nb) {
global $argc;
global $argv;
global $micro_time;

	//errors
	if(!isset($nb) || $argc != 3) {echo "Veuillez entrer aux maximum 2 paramètres: le mot et le nombre de lettres en moins \n"."Temps d'execution du programme: " . round($micro_time) . "s.\n";}

	if($argc=3 && isset($nb) && strlen($argv[1])<$nb){echo "Veuillez rentrer un nombre moins grand que la taille du mot \n"."Temps d'execution du programme: " . round($micro_time) . "s.\n";}

	if($argc=3 && isset($nb) && $nb<=0){echo "Veuillez rentrer un nombre correct \n"."Temps d'execution du programme: " . round($micro_time) . "s.\n";}
	
	//Première partie
/*$filename = "dictionnaire.txt"; 
	if(isset($s) || !isset($nb)) {
		fopen($filename);
		fgets
	}*/
	
	
}
$micro_time2 = microtime(true);
$micro_time=$micro_time2-$micro_time1;
anagram_master($s, $nb);
?>
