<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'YOUR CLIENT ID',     // ClientID
        'YOUR CLIENT SECRET'      // ClientSecret
    )
);
?>