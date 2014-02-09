 <?php 
require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'debug' => true,
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../templates',
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
);
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

$app->get('/', function () use ($app) {
    $app->render('index.html.twig');
})->name('home');

$app->get('/about/', function () use ($app) {
    $app->render('about.html.twig');
})->name('about');

$app->get('/hello/:name', function ($name) use ($app) {
    $app->render('hello.html.twig', array(
            'name' => $name
        ));
})->name('hello');

$app->run();