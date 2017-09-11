<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random Number Auditor</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/justified-nav.css">
    

</head>

<body>

    <div class="container">

      <div class="masthead">
      <img class="d-flex mr-3" src="img/trivago_rna.png" alt="RNA">
        <h3 class="text-muted">Random Number Auditor</h3>

        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Downloads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <?php
        $text = file_get_contents('testAll.txt');
        $textArray = explode("\n", $text);
        $randArrayIndexNum = array_rand($textArray);
        $randPhrase = $textArray[$randArrayIndexNum];

        $arr = explode("Locale", $randPhrase, 2);
        $first = $arr[0];
        $second = $arr[1];
      ?>

      <!-- Jumbotron -->

      <div class="jumbotron">
        <form align="center" action="index.php" method="POST">
          
          <h1><?php echo $first?></h1>
          <h1><?php echo "Locale" . $second?></h1>

          <p class="lead">Some description goes here!</p>
          <input class="btn btn-lg btn-success" role="button" type="submit" name="submit" value="Generate!">
          <hr>
        </form>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Something might go here!</h2>
          <p>The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Something might go here!</h2>
          <p>The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Something might go here!</h2>
          <p>The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah! The partners that you tested also could go here and blah blah blah!</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; trivago AQM Development 2017</p>
      </footer>

    </div> <!-- /container -->

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

