bot
<?php

use Longman\TelegramBot\Request;

require __DIR__ .'/vendor/autoload.php';
$payload = json_encode($_REQUEST);
$ch = curl_init("http://squuman.beget.tech/pedhubbot/index.php?data=" . $payload);
# Setup request to send json via POST.
curl_setopt( $ch, CURLOPT_POSTFIELDS, $_REQUEST );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "<pre>$result</pre>";
