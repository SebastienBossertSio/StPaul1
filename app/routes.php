
<?php
$app->get('/ping', function() use ($app) {
    return 'ping';
});

$app->get('/hello', function() use ($app) {

return 'Hello world';
});

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});


