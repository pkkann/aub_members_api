<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

/*$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});*/

$app->post('/login', function(Request $request, Response $response, array $args) {
    $data = array('error' => false, 'result' => []);
    $newResponse = $response->withJson($data);

    return $newResponse;
});

$app->post('/verify', function(Request $request, Response $response, array $args) {
    $data = array('error' => false, 'result' => true);
    $newResponse = $response->withJson($data);

    return $newResponse;
});