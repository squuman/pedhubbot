bot
<?php

use Longman\TelegramBot\Request;

require __DIR__ .'/vendor/autoload.php';

$result = Request::sendMessage([
    'chat_id' => $_REQUEST['chat_id'],
    'text'    => 'sosat',
]);