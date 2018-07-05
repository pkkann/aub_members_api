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

$app->get('/groups', function(Request $request, Response $response, array $args) {
    $data = array('error' => false, 'result' => [
        [
            'id'    => 1,
            'name'  => 'Morbærhavens netværksgruppe'
        ],
        [
            'id'    => 2,
            'name'  => 'Morbærhavens Gamer-gruppe'
        ],
        [
            'id'    => 3,
            'name'  => 'Den våde høne'
        ],
        [
            'id'    => 4,
            'name'  => 'Kreagruppen'
        ]
    ]);
    $newResponse = $response->withJson($data);

    return $newResponse;
});