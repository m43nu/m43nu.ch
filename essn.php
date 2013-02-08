<?php
$restaurants = array(
    'Beck' => 'http://hirschibeck.ch/aktueller-mittags-menueplan',
    'Meinen' => '#',
    'Kinderspital' => 'http://www.insel.ch/fileadmin/inselspital/users/Bildung/Allgemein/Menueplaene/Sole.pdf',
    'Donna' => 'http://www.insel.ch/fileadmin/inselspital/users/Bildung/Allgemein/Menueplaene/Donna.pdf',
    'Stella' => 'http://www.insel.ch/fileadmin/inselspital/users/Bildung/Allgemein/Menueplaene/Stella.pdf',
    'Pizza' => 'http://dieci.ch/pizzakurier-bern',
    'Thai' => 'http://www.thaifoodkurier.ch/',
    'Denner' => 'http://www.denner.ch/de/'
);
$selection = array_keys($restaurants);
shuffle($selection);
$actualSelection = reset($selection);
$date = new \DateTime();
if (!file_exists('selection.txt') || $date->format('Y-m-d') != current(explode('/', file_get_contents('selection.txt')))) {
    file_put_contents('selection.txt', $date->format('Y-m-d') . '/' . $actualSelection);
} else {
    $actualSelection = end(explode('/', file_get_contents('selection.txt')));
}
?><html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Wo Essen wir Heute? - proudly sponsored by m43nu.ch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="emanuel, imhof, web, developer">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Sarina|Monda&subset=latin,latin-ext" rel="stylesheet"
          type="text/css">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.png">
</head>
<body>
<div class="container">
    <h1>Wo Essen wir Heute?!</h1>

    <p>Zur Auswahl stehen:</p>
    <ul>
        <?php foreach ($restaurants as $restaurant => $link): ?>
        <li>
            <?php echo $link != '#' ? sprintf('<a href="%s" target="_blank">%s</a>', $link, $restaurant) : $restaurant ?>
        </li>
        <?php endforeach ?>
    </ul>
    <div class="hero-unit">
        <p>Der Zufall sagt:</p>
        <strong>
        <?php
            echo $actualSelection;
        ?>
        </strong>
    </div>
    <br/>
    <blockquote>
        <p>hei luegsch für dir</p>
        <small>Tscheggebim</small>
    </blockquote>

    <br/>
    <blockquote>
        <p>mini mueter isch au en firewall, si luegt was ine und use geit.</p>
        <small>Artan</small>
    </blockquote>

    <hr>

    <footer>
        <p class="pull-right">
            Proudly sponsored by <a href="http://m43nu.ch">m43nu.ch</a>
        </p>
    </footer>
</div>
</body>
</html>
