<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Tamagotchi.php";

  session_start();
    if (empty($_SESSION['time'])) {
        $_SESSION['time'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('tomagotchis.html.twig');
    });

    $app->post("/tomagotchis", function() use ($app) {
        $userPet = new Tamagotchi($_POST['name']);
        echo $userPet->time;
        return $app['twig']->render('tomagotchis.html.twig', array('name' => $userPet->getName(),'attention' => $userPet->getAttention(), 'rest' => $userPet->getRest(), 'food' => $userPet->getFood(), 'times'=> $userPet->time));
    });
    $app->get("/walk", function() use ($app) {
        $walk = new DateTime;
        echo $walk->format('H:i:s');
        return $app['twig']->render('tomagotchis.html.twig');
    });
    $app->get("/food", function() use ($app) {
        $food = new DateTime;
        echo $food->format('H:i:s');
        return $app['twig']->render('tomagotchis.html.twig');
    });
    $app->get("/rest", function() use ($app) {
        $rest = new DateTime;
        echo $rest->format('H:i:s');
        return $app['twig']->render('tomagotchis.html.twig');
    });

    return $app;

?>
