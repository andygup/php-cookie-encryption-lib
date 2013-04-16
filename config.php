<?php

/**
 * @file
 * A single location to store configuration.
 */

define('OAUTH_COOKIE_DOMAIN', '');

//REQUIRED - Encrypt your cookies
//http://si0.twimg.com/images/dev/oauth_diagram.png
//Create your own unique ENCRYPTION_KEY via Encrypt.get_RandomKey()
define('ENCRYPTION_KEY','Q83dBef2tgmHKZ9T1htFA2Y+jZgdler0szN28rjBf8o='); 
//Create your own unique initialization vector via Encrypt.get_IV()
define('IV','C2Oez0DLMQ8rCcgYFJwzCw==');
define('DEFAULT_TIME_ZONE','America/Los_Angeles');
