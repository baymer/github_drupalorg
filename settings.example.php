<?php

// Copy this file to settings.php and adjust to your repository/username.

// The repository owner, which should be you.
$owner = 'klausi';
// Create a personal access token at https://github.com/settings/applications
// and paste it here.
$oauth_token = '1234567890';
// Repository name on github. This will also be used as the project name on
// drupal.org.
$repo = 'drupal';
// URL where your webroot/index.php is reachable.
$webhook_url = 'http://example.com/index.php';
// Secret to validate incoming webhook requests (you can invent one).
$secret = 'change me, otherwise you have a security issue!';
