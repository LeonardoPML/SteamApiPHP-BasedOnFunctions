<?php include "steamapi.class.php"; ?>
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
		$api_key = "APIKEY";
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
 </body>
 </html>