<?php
header('Strict-Transport-Security: max-age=15768000');
header('X-Xss-Protection: 1; mode=block');
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header("Content-Security-Policy: default-src 'self'; style-src 'unsafe-inline' https://fonts.typotheque.com/; font-src https://*.amazonaws.com/; script-src 'self' 'unsafe-inline'");
?>
