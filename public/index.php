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

//$app->get('/', function () use ($app) {
//    $app->render('index.html.twig');
//})->name('home');

$app->get('/', function () use ($app) {
    $app->render('/pages/index.html.twig', array("active" => "home"));
})->name('home');

$app->get('/company', function () use ($app) {
    $app->render('/pages/company.html.twig', array("active" => "company"));
})->name('company');

$app->get('/products', function () use ($app) {
    $app->render('/pages/products.html.twig', array("active" => "products"));
})->name('products');

$app->get('/product', function () use ($app) {
    $app->render('/pages/product.html.twig', array("active" => "product"));
})->name('product');

$app->get('/contacts', function () use ($app) {
    $app->render('/pages/contacts.html.twig', array("active" => "contacts"));
})->name('contacts');

// lai twig varetu izmantot kaut kadus mainigos, mainigie ir japadod (ar array)


//$app->get('/hello/:name', function ($name) use ($app) {
//    $app->render('hello.html.twig', array(
//            'name' => $name
//        ));
//})->name('hello');

$app->run();