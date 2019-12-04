<?php

use Symfony\Component\Finder\Finder;

require_once(__DIR__.'/../vendor/autoload.php');

$finder = new Finder;
$images = $finder
    ->files()
    ->in(__DIR__.'/images/oppressors');
$images = iterator_to_array($images);
$image = $images[array_rand($images)];
$imageUrl = implode('/', array_slice(explode('/', $image->getPathName()), -3, 3));

$insults = file(__DIR__.'/insults.txt');
$insult = $insults[array_rand($insults)];
?>

<p><?php echo $insult ?></p>
<img src="images/<?php echo $imageUrl ?>" style="height:100%;"/>
