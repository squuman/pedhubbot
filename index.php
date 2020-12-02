<?php
require __DIR__ .'/vendor/autoload.php';

file_put_contents(__DIR__ .'/request.log',print_r($_REQUEST,true));
