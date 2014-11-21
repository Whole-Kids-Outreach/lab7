<?php

	$language = $_GET["languagebtn"];
//	$language = getElementById("languagetext").innerHTML;
//	$language = "spanish";
	

/*	
	if (isset($_POST["overbtn"])) {
		$over = $_POST["overbtn"];
	}
	if (isset($_POST["overbtn"])) {
	$under = $_POST["underbtn"];
}


	
	if () {
	echo "over";
	}
	else {
	echo "under";
	}
*/	
	echo "starting script <br>";

	$db = new PDO("mysql:dbname=world; host=localhost", "root" );
	$rows=$db->query("
		SELECT languages.country_code, countries.code, countries.name, languages.language
		FROM languages, countries
		WHERE languages.country_code=countries.code AND languages.language='$language'");
	foreach ($rows as $row) {
		print $row["name"] . "<br>";
	}
		
?>



