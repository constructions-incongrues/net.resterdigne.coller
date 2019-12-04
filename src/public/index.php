<?php

use Symfony\Component\Finder\Finder;

require_once(__DIR__.'/../vendor/autoload.php');

$finder = new Finder;
$images = $finder
    ->files()
    ->in(__DIR__.'/images/oppressors');
$images = iterator_to_array($images);
$image = $images[array_rand($images)];
$urlParts = array_slice(explode('/', $image->getPathName()), -3, 3);
$urlParts[2] = rawurlencode($urlParts[2]);
$imageUrl = implode('/', $urlParts);

$insults = file(__DIR__.'/insults.txt');
$insult = $insults[array_rand($insults)];
?>
<html>
    <head>
        <style>
        body {
            background-color: #000;
            overflow: hidden;
            text-align: center;
            font-family: 'Serif'
        }

        #image {
            height: 100%;
            width: 50%;
        }

        #overlay {
            color: #EEE;
            font-size: 5em;
            /* text-shadow: 2px 2px 2px #000; */
            text-align: center;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            -webkit-text-stroke: 1px #777;
        }
        </style>
    </head>

    <body>
        <p id="overlay"><?php echo $insult ?></p>
        <img id="image" src="images/<?php echo $imageUrl ?>" />
    </body>
</html>
