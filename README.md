# SteamApiPHP-BasedOnFunctions

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
