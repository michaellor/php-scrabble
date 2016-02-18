<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array(
        "twig.path"=>__DIR__."/../views/"
    ));

    $app->get("/", function() use ($app)
    {
        return $app["twig"]->render("form.html.twig");
    });

    $app->get("/results", function() use ($app)
    {
        $new_scrabble = new Scrabble;
        $user_input = $_GET["input"];
        $final_score = $new_scrabble->scoreGenerator($user_input);
        return $app["twig"]->render("results.html.twig", array("result" => $final_score));
    });



    return $app;
?>
