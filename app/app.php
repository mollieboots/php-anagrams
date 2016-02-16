<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramGenerator.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('anagram_home.html.twig');
    });

    $app->get("/anagram_results", function() use ($app) {
        $new_anagram = new AnagramGenerator;
        $word_to_test = $new_anagram->breakDownWord($_GET['word']);
        $list_for_test = $new_anagram->splitUpMatches($_GET['tests']);
        $test_result = $new_anagram->testIfMatch($word_to_test, $list_for_test);
        return $app['twig']->render('anagram_results.html.twig', array('results' => $test_result));
    });

    return $app;
 ?>
