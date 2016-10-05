<?php 
	include "steamfunctions.php";
	$appid = "218620"; //Payday2

	$gameName = GetSchemaForGame($api_key, $appid)->game->gameName;
	$gameVersion = GetSchemaForGame($api_key, $appid)->game->gameVersion;

	echo "Game Name: &nbsp;" . $gameName . "</br>";
	echo "Game Version: &nbsp;" . $gameVersion . "</br>";

	foreach (GetSchemaForGame($api_key, $appid)->game->availableGameStats->achievements as $stats) {

		$name = $stats->name;
		$defaultvalue = $stats->defaultvalue;
		$displayName = $stats->displayName;
		$hidden = $stats->hidden;
		$description = $stats->description;
		$icon = $stats->icon;
		$icongray = $stats->icongray;

		echo "Name: &nbsp;" . $name . "</br>";
		echo "Default Value: &nbsp;" . $defaultvalue . "</br>";
		echo "Display Name: &nbsp;" . $displayName . "</br>";
		echo "Hidden: &nbsp;" . $hidden . "</br>";
		echo "Description: &nbsp;" . $description . "</br>";
		echo "Icon &nbsp; <img src='$icon'> &nbsp; &nbsp; Icongray &nbsp; <img src='$icongray'> </br>";
		echo "</br>";
	}
 ?>