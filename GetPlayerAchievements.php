<?php 
	include "steamfunctions.php";

	$api_key = "API KEY HERE";
	$steam_id = "76561197960435530";

	$steamid = GetPlayerAchievements($api_key, $steam_id)['playerstats']['steamID'];
	$gamename = GetPlayerAchievements($api_key, $steam_id)['playerstats']['gameName'];

	echo "Steam ID:  &nbsp;" . $steamid . "</br>";
	echo "GameName:  &nbsp;" . $gamename . "</br>";
	foreach (GetPlayerAchievements($api_key, $steam_id)['playerstats']['achievements'] as $achievements) {
		$apiname = $achievements['apiname'];
		$achieved = $achievements['achieved'];

		echo $apiname . "&nbsp; - &nbsp;" . $achieved . "</br>";
	}
 ?>