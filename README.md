# SteamApiPHP-BasedOnFunctions

Simple use , call the funciton and get the results.

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
