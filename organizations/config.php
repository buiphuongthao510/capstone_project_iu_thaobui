<?php

$servername = "db.luddy.indiana.edu";
$username = "i494f21_team21";
$password = "my+sql=i494f21_team21";
$dbname = "i494f21_team21";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

error_reporting(E_ALL);
ini_set('display_errors','Off');

?>

 config.php 

<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require './autoload.php';

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
    'client_id' => 'AQUEYoQSYN_rCeR3FZ_xN8XEau6D467F7s1CnY54QFfBUMoSvQLkby8rDSSY1CadwM-b_yX4s44NxOsU',
    'client_secret' => 'EIDh3tuJ70_jrAoQYA_HGMHvd98ETOnklgPQWiNhKCaljxG4gYAtb68-re5byX545G-UwnB66ROWbYHL',
    'return_url' => 'http://cgi.luddy.indiana.edu/~team21/organizations/response.php',
    'cancel_url' => 'http://cgi.luddy.indiana.edu/~team21/organizations/payment-cancelled.html'
];

// Database settings. Change these for your database configuration.
$dbConfig = [
    'host' => 'db.luddy.indiana.edu',
    'username' => 'i494f21_team21',
    'password' => 'my+sql=i494f21_team21',
    'name' => 'i494f21_team21'
];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );

    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox' : 'live'
    ]);

    return $apiContext;
}