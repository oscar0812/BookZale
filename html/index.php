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
        return $c['view']->render(
            $response->withStatus(404),
            '404.php',
        ['router' => $c->router, 'user'=>currentUser()]
        );
    };
};

$app->get('/books', function ($request, $response, $args) {
    $get = $request->getParams();
    // get book category
    $category = isset($get['category'])?$get['category']:1;
    $category = \CategoryQuery::create()->findOneById($category);
    // parameter was illegal if $category == null
    $category = $category == null?\CategoryQuery::create()->findOneById(1):$category;
    return $this->view->render($response,"books.php", ['router' => $app->router,
        'user'=>currentUser(), 'category'=>$category,
        'categories'=>\CategoryQuery::create()->findByParent(0),
        'books'=>\BookQuery::create()->findByCategory($category)]);
})->setName("books");

$app->get('/detail', function ($request, $response, $args) {
    $get = $request->getParams();
    $book = \BookQuery::create()->findPk($get['book_id']);
    if($book == null) return $response->withRedirect("books");
    return $this->view->render($response,"detail.php", ['router' => $this->router,
        'user'=>currentUser(), 'category'=>$book->getCategory(),
        'categories'=>\CategoryQuery::create()->findByParent(0),
        'books'=>\BookQuery::create()->findByCategory($book->getCategory()),
        'current_book'=>$book]);
});

$app->get('/logout', function ($request, $response, $args) {
    // just log out and redirect home
    logUserOut();
    return $response->withRedirect("home");
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

// if the route doesnt fall in the previous routes, handle here
$app->get('/{name}', function ($request, $response, $args) {
    try {
        if (startsWith($args["name"], "customer") && currentUser() == null) {
            // not signed in, redirect to register page
            $response = $response->withRedirect("register");
        } elseif (currentUser() != null && $args["name"] == "register") {
            // user already signed in and seeing register page, dont allow
            $response = $response->withRedirect("customer-orders");
        } else {
            $response = $this->view->render(
                $response,
                $args["name"].".php",
            ['router' => $this->router, 'user'=>currentUser()]
            );
        }
        return $response;
    } catch (\RuntimeException $e) {
        // route doesn't exist? 404 it
        throw new \Slim\Exception\NotFoundException($request, $response);
    }
});

$app->run();
