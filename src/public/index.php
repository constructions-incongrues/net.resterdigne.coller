<?php
use Symfony\Component\Finder\Finder;

require_once(__DIR__.'/../vendor/autoload.php');

$finder = new Finder;
$images = iterator_to_array(
  $finder
    ->files()
    ->in(__DIR__.'/coller/png')
);
$image = $images[array_rand($images)];

$bgColors = ['red', 'lime', 'yellow', 'black', 'aqua', 'fuchsia'];
$bgColors = ['#777', '#666', '#555', '#444', '#333', '#222', '#111', '#000'];
$bgColor = $bgColors[array_rand($bgColors)];
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Coller | Rester Digne</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">

  <style>
    body {
      background-color: <?php echo $bgColor ?>;
      font-family: sans-serif;
    }
    .image {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
        overflow: auto;
    }
    .doc {
      margin: 5em;
      color: #fff;
      width: 20%;
    }
    .doc h1 {
      -webkit-text-stroke: 0.5px #333;
    }
    a, a:visited {
      color: #fff;
    }
  </style>
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <div class="doc">
    <h1>Rester Digne : Coller</h1>
    <p>
      Ce site génère des affiches au format A4 prêtes à être <a href="#" onclick="window.print(); return false;">imprimées</a> et collées sur un mur.
    </p>
    <p>
      Les affiches sont générées à partir d'une <a href="https://github.com/constructions-incongrues/net.resterdigne.coller/blob/master/etc/pinacotron/keywords.txt">liste de complices / zélateurs / chiens de gardes / etc</a> de l'ordre néo-libéral en place et d'une <a href="https://github.com/constructions-incongrues/net.resterdigne.coller/blob/master/etc/insults.txt">base de données d'insultes</a>.
    </p>
    <h2>Affiche</h2>
    <ul>
      <li><a href="#" onclick="window.print(); return false;">Imprimer</a></li>
      <li><a target="_blank" href="coller/pdf/<?php echo rawurlencode(pathinfo($image->getRelativePathName())['filename']) ?>.pdf">Télécharger</a></li>
      <li><a href="">Regénérer</a></li>
    </ul>
    <h2>Contribuer</h2>
    <ul>
      <li><a target="_blank" href="https://github.com/constructions-incongrues/net.resterdigne.coller/edit/master/etc/insults.txt">Proposer une insulte</a></li>
      <li><a target="_blank" href="https://github.com/constructions-incongrues/net.resterdigne.coller/edit/master/etc/pinacotron/oppressors/keywords.txt">Proposer un individu</a></li>
    </ul>
    <h2>Crédits</h2>
    <p>
      Une grande partie des insultes est extraite des merveilleux coffrets du <a target="_blank" href="http://le-tampographe-sardon.blogspot.com/">Tampographe Sardon</a>.
    </p>
    <p>
      Le code source est <a href="https://github.com/constructions-incongrues/net.resterdigne.coller">diffusé</a> sous licence <a href="https://www.gnu.org/licenses/quick-guide-gplv3.fr.html">GPLv3</a>.
    </p>
  </div>
  <a target="_blank" title="IMPRIMER" href="coller/pdf/<?php echo urlencode(pathinfo($image->getRelativePathName())['filename']) ?>.pdf" class="print" onclick="window.print(); return false;">
    <img class="image" src="coller/png/<?php echo urlencode($image->getRelativePathName()) ?>"></img>
  </a>

  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
