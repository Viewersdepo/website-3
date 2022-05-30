<?php
//People Array @TODO-Get from DB
$People[]="Xave";
$People[]="Vave";
$People[]="Wave";
$People[]="Uave";
$People[]="Tave";
$People[]="Save";
$People[]="Rave";
$People[]="Quave";
$People[]="Oave";
$People[]="Pave";
$People[]="Nave";
$People[]="Mave";
$People[]="Lave";
$People[]="Jave";
$People[]="Kave";
$People[]="Have";
$People[]="Fave";
$People[]="Gave";
$People[]="Dave";
$People[]="Eave";
$People[]="Cave";
$People[]="Bave";
$People[]="Ave";
$People[]="Zave";
$People[]="Yave";

//Get Query String
$q=$_REQUEST['q'];

$suggestion="";

//Get Suggetions
if($q !== ""){
	$q=strtolower($q);
	$len= strlen($q);
	foreach($People as $person){
		 if(stristr($q, substr($person, 0, $len))){
		 	if($suggestion===""){
		 		$suggestion= $person;
		 	}else{
		 		$suggestion.=", $person";
		 	}
		 }
	}
}
echo $suggestion==="" ? "No Suggestion" : $suggestion;
?>