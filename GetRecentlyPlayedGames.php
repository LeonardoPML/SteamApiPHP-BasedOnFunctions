<?php 
	include "steamfunctions.php";

	$steam_id = "76561198090227506"; //Using another ID because it only contain 10 recently games played

	$total_count = GetRecentlyPlayedGames($api_key, $steam_id)->response->total_count;
	echo "Total Games: &nbsp;" . $total_count . "</br>";

	foreach (GetRecentlyPlayedGames($api_key, $steam_id)->response->games as $games) {
		$appid = $games->appid;
		$name = $games->name;
		$playtime_2weeks = $games->playtime_2weeks;
		$playtime_forever = $games->playtime_forever;
		$img_icon_url = $games->img_icon_url;
		$img_logo_url = $games->img_logo_url;

		echo $name . "&nbsp; - &nbsp;" . $appid . "&nbsp; - &nbsp; <img src='http://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/$appid/$img_icon_url.jpg'> </br>";
		echo "Playtime 2 Weeks: &nbsp;" . $playtime_2weeks . "</br>";
		echo "Playtime Forever: &nbsp;" . $playtime_forever . "</br>";
		echo "<img src='http://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/$appid/$img_logo_url.jpg'> </br>";
		echo "</br>";

		//Using Images http://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/APPID HERE/logo or icon ID HERE.jpg
	}
 ?>