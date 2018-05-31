<?php
$server = new swoole_http_server('0.0.0.0', 8080, SWOOLE_BASE);
$server->set(array(
    'worker_num' => NUMCORES
));

$server->on('request', function ($req, $res) {
    $res->header('Content-Type', 'text/plain; charset=utf-8');
    $res->end('Hello, World!');
});

$server->start();
