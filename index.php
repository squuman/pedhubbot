bot1
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$payload = json_encode($_REQUEST);
$ch = curl_init("http://squuman.beget.tech/pedhubbot/index.php");
# Setup request to send json via POST.
curl_setopt( $ch, CURLOPT_POSTFIELDS, $_REQUEST );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
echo "<pre>$result</pre>";
# Print response.

