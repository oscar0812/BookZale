<?php
require '../vendor/autoload.php';

// adding an external config file
require '../config.php';
require '../data/generated-conf/config.php';

$app = new \Slim\App(["settings" => $config]);

$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("../app/views/");

// if url is not found (404)
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $c['view']->render($response->withStatus(404), '404.php', ['router' => $c->router]);
    };
};

$app->get('/{name}', function ($request, $response, $args) {
    try {
        return $this->view->render($response, $args["name"].".php", ['router' => $this->router]);
    } catch (\Exception $e) {
        throw new \Slim\Exception\NotFoundException($request, $response);
    }
});

$app->run();
