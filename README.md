# CTBan Website

This website was created as a website for [this](https://forums.alliedmods.net/showthread.php?p=1544101) SourceMod plugin. I created it in about an hour to help a friend out so his community could easily view the CTBans from their CS:S Jailbreak server. There are probably better ways to do this than what I did, but I made something quick and dirty so that others should be able to use it if they want.

---

## Adding to your Website:

To add to your website, all you need to do is drag/drop the files to whatever directory you want; my friend did something like baseurl/ctbans. Make sure you set up the database connection first, or else nothing will work.

## Connecting to Database:

In the file `core/database.php`, there are variables that need to be set in order to connect to a MySQL database (the same MySQL database that your CTBans are stored). This should be all you need to set in here:


```php
$servername = "IP ADDRESS";
$username = "USERNAME";
$password = "PASSWORD";
$dbname = "CTBANS DATABASE";
```

## Adding your Community Name:

In the file `core/global.php`, there is a variable called `$GROUP_NAME`; just put the name of your group in here and it will update it across the rest of the site.

---

If you have any issues about this plugin, please feel free to open up an issue here and I will try to respond to it. Again, this was a pretty quick project I did for a friend.