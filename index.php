<?php include "steamfunctions.php"; ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<title>Steam API - PHP</title>
 	<link rel="stylesheet" type="text/css" href="estilos.css">
 </head>
 <body>
 	<div class="GetPlayerSummaries">
 		<center><h3>GetPlayerSummaries</h3></center>
 	<?php 
		$api_key = "API KEY HERE";
		$steam_id = "76561197960435530";

		echo "<img src='" . GetPlayerSummaries($api_key, $steam_id)['avatarfull'] ."'></br>"; 
		echo "Steam ID:&nbsp;" . GetPlayerSummaries($api_key, $steam_id)['steamid'] . "</br>";
		echo "Real Name:&nbsp;" . GetPlayerSummaries($api_key, $steam_id)['realname'] . "</br>";
		echo "Profile URL:&nbsp;" . GetPlayerSummaries($api_key, $steam_id)['profileurl'] . "</br>";
 	 ?>
 	</div>
 	</br>
 	<div class="GetNewsForApp">
 		<center><h3>GetNewsForApp</h3></center>
 	<?php 
 		$appid = "440";
		$count = "1"; //count of news
		
		foreach (GetNewsForApp($appid, $count)->appnews->newsitems as $news) {
			$gid = $news->gid;
			$title = $news->title;
			$url = $news ->url;
			$is_external_url = $news ->is_external_url;
			$author = $news ->author;
			$contents = $news ->contents;
			$feedlabel = $news ->feedlabel;
			$date = $news ->date;
			$feedname = $news ->feedname;

			echo "News Title: &nbsp;" . $title . "&nbsp; &nbsp; News Gid: &nbsp;" . $gid . "</br>";
			echo "News URL: &nbsp;" . $url . "</br>";
			echo "News Contents: &nbsp;" . $contents . "<br/>";
			echo "News Author: &nbsp;" . $author . "</br>";
			
		}
 	 ?>
 	</div>
 	</br>
 	<div class="GetGlobalAchievementPercentagesForApp">
 		<center><h3>GetGlobalAchievementPercentagesForApp</h3></center>
 	<?php 
 		foreach (GetGlobalAchievementPercentagesForApp("250600")->achievementpercentages->achievements as $achievements) {
 			$name = $achievements->name;
 			$percent = $achievements->percent;

 			echo "Achievement Name: &nbsp;" . $name . "</br>";
 			echo "Achievement Percent: &nbsp;" . $percent . "</br>";
 		}
 		
 	 ?>
 	</div>
 	</br>
 	<div class="GetFriendList">
 		<center><h3>GetFriendList</h3></center>
 		<?php 							//using another ID because it contains only 2 friends
 		foreach (GetFriendList($api_key, "76561198250284526")->friendslist->friends as $friends) {
 			$steamid = $friends->steamid;
 			$relationship = $friends->relationship;
 			$friend_since = $friends->friend_since;

 			echo "Friend ID: &nbsp;" . $steamid . "</br>";
 			echo "Relationship: &nbsp;" . $relationship . "</br>";
 			echo "Fiend Since: &nbsp;" . $friend_since . "</br>";
 			echo "</br>";
 		}
 	 ?>
 	</div>
 	</br>
 	<div class="GetPlayerAchievements">
 		<center><h3>GetPlayerAchievements</h3></center>
 		<a href="GetPlayerAchievements.php" target="_BLANK"> See here </a>
 	</div>
 	</br>
 	<div class="GetUserStatsForGame">
 		<center><h3>GetUserStatsForGame</h3></center>
 		<a href="GetUserStatsForGame.php" target="_BLANK"> See here </a>
 	</div>
 </body>
 </html>