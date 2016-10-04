<?php
	$api_key = "API KEY HERE";

	function GetNewsForApp($appid, $count) {
		$api_url = "http://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/?appid=$appid&count=$count&maxlength=300&format=json";
		$api_file = file_get_contents("$api_url");
		$api_decode = json_decode($api_file, FALSE);

		return $api_decode;
	}
	function GetGlobalAchievementPercentagesForApp($appid) {
		$api_url = "http://api.steampowered.com/ISteamUserStats/GetGlobalAchievementPercentagesForApp/v0002/?gameid=$appid&format=json";
		$api_file = file_get_contents("$api_url");
		$api_decode = json_decode($api_file, FALSE);

		return $api_decode;
	}
	function GetPlayerSummaries($api_key, $steam_id){
	$api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steam_id";
	$api_file = file_get_contents("$api_url");
	$api_decode = json_decode($api_file, TRUE);

	$steamid = $api_decode['response']['players'][0]['steamid'];
	$communityvisibilitystate = $api_decode['response']['players'][0]['communityvisibilitystate'];
	$profilestate = $api_decode['response']['players'][0]['profilestate'];
	$personaname = $api_decode['response']['players'][0]['personaname'];
	$lastlogoff = $api_decode['response']['players'][0]['lastlogoff'];
	$profileurl = $api_decode['response']['players'][0]['profileurl'];
	$avatar = $api_decode['response']['players'][0]['avatar'];
	$avatarmedium = $api_decode['response']['players'][0]['avatarmedium'];
	$avatarfull = $api_decode['response']['players'][0]['avatarfull'];
	$personastate = $api_decode['response']['players'][0]['personastate'];
	$realname = $api_decode['response']['players'][0]['realname'];
	$primaryclanid = $api_decode['response']['players'][0]['primaryclanid'];
	$timecreated = $api_decode['response']['players'][0]['timecreated'];
	$personastateflags = $api_decode['response']['players'][0]['personastateflags'];
	$loccountrycode = $api_decode['response']['players'][0]['loccountrycode'];
	$locstatecode = $api_decode['response']['players'][0]['locstatecode'];
	$loccityid = $api_decode['response']['players'][0]['loccityid'];

	return array(
	"steamid" 					=> "$steamid",		
	"communityvisibilitystate" 	=> "$communityvisibilitystate",
	"profilestate" 				=> "$profilestate",				
	"personaname" 				=> "$personaname",			
	"lastlogoff" 				=> "$lastlogoff",		
	"profileurl"			 	=> "$profileurl",			
	"avatar" 					=> "$avatar",	
	"avatarmedium" 				=> "$avatarmedium",				
	"avatarfull" 				=> "$avatarfull",		
	"personastate" 				=> "$personastate",			
	"realname" 					=> "$realname",		
	"primaryclanid" 			=> "$primaryclanid",		
	"timecreated" 				=> "$timecreated",		
	"personastateflags" 		=> "$personastateflags",	
	"loccountrycode" 			=> "$loccountrycode",
	"locstatecode" 				=> "$locstatecode",	
	"loccityid" 				=> "$loccityid",
	);
}
	function GetFriendList($api_key, $steam_id) {
		$api_url = "http://api.steampowered.com/ISteamUser/GetFriendList/v0001/?key=$api_key&steamid=$steam_id&relationship=friend";
		$api_file = file_get_contents("$api_url");
		$api_decode = json_decode($api_file, FALSE);

		return $api_decode;
	}

	function GetPlayerAchievements($api_key, $steam_id) {
		$api_url = "http://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/?appid=440&key=$api_key&steamid=$steam_id";
		$api_file = file_get_contents("$api_url");
		$api_decode = json_decode($api_file, FALSE);

		return $api_decode;
	}
	function GetUserStatsForGame($api_key, $steam_id) {
		$api_url = "http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=440&key=$api_key&steamid=$steam_id";
		$api_file = file_get_contents("$api_url");
		$api_decode = json_decode($api_file, FALSE);

		return $api_decode;
	}
	function GetOwnedGames($api_key, $steam_id) {
		$api_url = "http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=$api_key&steamid=$steam_id&format=json";
		$api_file = file_get_contents("$api_url");
		$api_decode = json_decode($api_file, FALSE);

		return $api_decode;
	}
	function GetRecentlyPlayedGames($api_key, $steam_id) {
		$api_url = "http://api.steampowered.com/IPlayerService/GetRecentlyPlayedGames/v0001/?key=$api_key&steamid=$steam_id&format=json";
		$api_file = file_get_contents("$api_url");
		$api_decode = json_decode($api_file, FALSE);

		return $api_decode;
	}
	function IsPlayingSharedGame($api_key, $steam_id) {
		$api_url = "http://api.steampowered.com/IPlayerService/IsPlayingSharedGame/v0001/?key=$api_key&steamid=$steam_id&appid_playing=240&format=json";
		$api_file = file_get_contents("$api_url");
		$api_decode = json_decode($api_file, FALSE);

		return $api_decode;
	}
?>