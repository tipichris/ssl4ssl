SSL for SSL
===========

Plugin for [YOURLS](http://yourls.org). 

Description
-----------
Create SSL short links when shortening SSL URLs. Eg, when shortening `https://www.google.com`
you get `https://sho.rt/ggl`

I don't actually know if this is necessary or important, I just noticed that goo.gl do it :)

Installation
------------
1. In `user/plugins`, create a new folder named `ssl4ssl`.
2. Drop these files in that directory.
3. Go to the Plugins administration page ( *eg* `https://sho.rt/admin/plugins.php` ) and activate the plugin.
4. Have fun!


Obviously your webserver will need to be configured for SSL, in which case
I recommend that you also have the following in `user/config.php`

`define( 'YOURLS_ADMIN_SSL', true);`

License
-------
MIT License
