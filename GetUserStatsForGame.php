<?php 
	include "steamfunctions.php";

	$steam_id = "76561197960435530";

	$steamid = GetUserStatsForGame($api_key, $steam_id)->playerstats->steamID;
	$gamename = GetUserStatsForGame($api_key, $steam_id)->playerstats->gameName;

	echo "Steam ID:  &nbsp;" . $steamid . "</br>";
	echo "GameName:  &nbsp;" . $gamename . "</br>";
	foreach (GetUserStatsForGame($api_key, $steam_id)->playerstats->stats as $stats) {
		$name = $stats->name;
		$value = $stats->value;

		echo $name . "&nbsp; - &nbsp;" . $value . "</br>";
	}
 ?>