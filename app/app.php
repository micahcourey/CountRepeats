<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/result", function() use($app) {
        $my_RepeatCounter = new RepeatCounter;
        $search_result = $my_RepeatCounter->countRepeats($_GET['word'], $_GET['string']);
        return $app['twig']->render('results.html.twig', array('result' => $search_result));
    });

    return $app;
?>
