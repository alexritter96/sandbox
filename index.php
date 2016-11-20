<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alexander's Sandbox|Whatever</title>

    <!-- Bootstrap core CSS -->
    <link href="/sandbox/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/sandbox/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/sandbox/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      .navbar {
        /*background-color: #0f8931;*/
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">My Sandbox</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 0.909091px;">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <!-- Cheating Div for header... -->
    <div style='height: 75px;'></div>

    <div class="container">

<h3>Affirmations</h3>
<ul>
  <li>I want to make $<?php echo number_format(rand(12000, 35000))?> per year!</li>
</ul>

<?php
// Crappy Weather Underground API Client (by Kenneth)
$api_response = file_get_contents('http://api.wunderground.com/api/7f38221bbed0e6fe/conditions/q/VA/Winchester.json');
$parsed_api_response = json_decode($api_response);

function weather_info($type) {
  global $parsed_api_response;
  echo $parsed_api_response->{'current_observation'}->{$type};
}
?>
<div style="height: 12px;"></div>
<div class='jumbotron'>
<p><strong>Weather for Winchester, Virginia</strong></h3>
<ul>
<li><strong>Weather</strong>: <?php weather_info('weather') ?></li>
<li><strong>Temperature</strong>: <?php weather_info('temperature_string') ?></li>
<li><strong>Wind</strong>: <?php weather_info('wind_string') ?></li>
<li><strong>Feels Like</strong>:<?php weather_info('feelslike_string') ?></li>
</ul>
</div>
<h3>Random Fortune</h3>
<p class='fortune'>
  <code><?php echo file_get_contents('http://fortunes.herokuapp.com/random/raw') ?></code>
</p>

<h3><code>lorem -> TAB</code></h3>
<pre>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam accusantium vitae aut, perspiciatis sit libero cumque iusto est similique ipsum nemo ipsam aperiam, ipsa autem! Eum, dolorem, nisi. Ullam, recusandae.
</pre>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/sandbox/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="sandbox/js/ie10-viewport-bug-workaround.js"></script>


</body></html>