<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Emanuel Imhof - Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home of web developer Emanuel Imhof.">
    <meta name="author" content="emanuel, imhof, web, developer">
    <meta name="keywords" content="web, developer, php, ruby, javascript, symfony, extjs, rails, jquery, kickboxing, bern">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Sarina|Monda&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.png">
</head>

<body>

<header>
    <h1>Emanuel Imhof</h1>
    <div class="hidden-phone">
        <span>I'am a web developer from Switzerland who </span><br/>
        <span>works part-time at his own company twy GmbH and</span><br/>
        <span>the other part at the University of Bern.</span>
    </div>
</header>

<div class="container">

    <div class="row">
        <div class="span4">
            <p class="muted">
                My name is Emanuel Imhof. I'm <?php $birthDate = array(9, 19, 1988); echo (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2])); ?> years young, born and raised in Switzerland.
                I work part-time for my own company <a href="http://twygmbh.ch" target="_blank">twy GmbH</a>
                and the other part at the <a href="http://www.iml.unibe.ch" target="_blank">University of Bern</a>.
                I practice Kickboxing since <?php $birthDate = array(9, 1, 2005); echo (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2])); ?> years at <a href="http://gojukan.ch" target="_blank">Goju Kan Bern</a>
                and participated at several tournaments in Switzerland. 
		I live in <a href="http://de.wikipedia.org/wiki/Bern" target="_blank">Bern</a>, together with my beautiful girlfriend <a href="https://www.facebook.com/nuria.emmenegger" target="_blank">Nuria</a>.
            </p>
        </div>
        <div class="span4">
            <p class="muted">
                I see HTML5 and CSS3, speak PHP, ruby, Javascript, Java and C#.
                Following the philosophy of <abbr title="test-driven development">TDD</abbr>, <abbr title="behaviour-driven development">BDD</abbr> and fell in love with design patterns.
                I write symfony, ruby on rails, Ext JS and jQuery.
                And can't keep my nose out of new shiny things.
            </p>
        </div>
        <div class="span4">
            <p class="muted">
                I'm always looking for all kind of projects for my own company <a href="http://twygmbh.ch" target="_blank">twy GmbH</a>.
                We are young, enthusiastic and love to work on web-projects, have a look at <a href="http://www.twygmbh.ch/referenzen" target="_blank">what we did</a>.
                Interested? Why not <a href="http://twitter.com/twy_gmbh" target="_blank">connect with us?</a>
            </p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; <?php echo date("Y") ?>. <a href="http://m43nu.ch">Emanuel Imhof</a>. All rights reserved.</p>
        <ul>
            <li>
                <a href="https://github.com/m43nu" target="_blank">GitHub</a>
            </li>
            <li>
                <a href="http://facebook.com/da.hesch.ne" target="_blank">Facebook</a>
            </li>
            <li>
                <a href="http://twitter.com/m43nu" target="_blank">Twitter</a>
            </li>
            <li>
                <a href="https://www.xing.com/profile/Emanuel_Imhof2" target="_blank">Xing</a>
            </li>
        </ul>
    </footer>

</div> <!-- /container -->

<!-- Le javascript -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
