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
    } catch (\RuntimeException $e) {
        // route doesn't exist? 404 it
        throw new \Slim\Exception\NotFoundException($request, $response);
    }
});

$app->post("/email", function ($request, $response, $args) {
    // checking if user email is available
    $post = $request->getParsedBody();
    $info = \UserQuery::create()->findOneByEmail($post['email']);
    echo ($info== null)?"true":"false";
});

// post /register
$app->post('/register', function ($request, $response, $args) {
    $post = $request->getParsedBody();
    if ($post['type'] == 'login') {
        // check if valid login credentials, if yes, sign in
        $user = UserQuery::create()->findOneByEmail($post['email']);

        if ($user == null || !$user->login($post['password'])) {
            // user doesn't exist or wrong password
            $response = $response->withJson(['success'=>false]);
        } else {
            logUserIn($user->getId());
            $response = $response->withJson(['success'=>true]);
        }
    } else {
        // register
        $user = new User();
        $user->setName($post['name']);
        $user->setEmail($post['email']);
        $user->setPassword($post['password']);

        if (!$user->validate()) {
            // an error occured
            $response = $response->withJson(['success'=>false]);
        } else {
            // all good
            $user->setDateJoined(getCurrentDate()->getTimestamp());
            $user->save();
            logUserIn($user->getId());
            $response = $response->withJson(['success'=>true]);
        }
    }
    return $response;
});

$app->run();
