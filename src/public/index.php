<?php

use Symfony\Component\Finder\Finder;

require_once(__DIR__.'/../vendor/autoload.php');

$finder = new Finder;
$images = $finder
    ->files()
    ->in(__DIR__.'/images/oppressors');
$images = iterator_to_array($images);
$image = str_replace('/usr/local/src/public/','',$images[array_rand($images)]);

$insults = file(__DIR__.'/insults.txt');
$insult = $insults[array_rand($insults)];

exec('convert $file -gravity South -pointsize 196 -stroke black -fill "#FFFFFF" -colorspace Gray -separate -average -annotate 0 "" ./var/coller/$(basename $file)')
?>

<p><?php echo $insult ?></p>
<img src="<?php echo urlencode($image) ?>" style="height:100%;"/>
