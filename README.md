# SteamApiPHP-BasedOnFunctions

[![S](https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png)](https://steamcommunity.com/)

## Functions Included
  - GetNewsForApp (v0002)
  - GetGlobalAchievementPercentagesForApp (v0002)
  - GetGlobalAchievementPercentagesForApp (v0002)
  - GetGlobalStatsForGame (v0001)
  - GetPlayerSummaries (v0002)
  - GetFriendList (v0001)
  - GetPlayerAchievements
  - GetUserStatsForGame
  - GetOwnedGames
  - GetRecentlyPlayedGames
  - GetSchemaForGame
  - GetPlayerBans
  
  To use get a API Key - Steam Community [here](https://steamcommunity.com/dev)

Simple use , call the function and get the results.

## Example

```
 echo GetPlayerSummaries($api_key, $steam_id)['realname'];
```

**The result**

```
 Robin Walker
```

**Getting an image**

```
  echo "<img src='" . GetPlayerSummaries($api_key, $steam_id)['avatarfull'] ."'>";
```

**Getting an image using GetRecentlyPlayedGames**

```
	echo "<img src='http://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/$appid/$img_logo_url.jpg'> </br>";
```
