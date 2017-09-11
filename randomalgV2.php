<?php
/**
 * Created by PhpStorm.
 * User: vkostadinov
 * Date: 8/17/2017
 * Time: 3:34 PM
 */

$text = file_get_contents('testAll.txt');
$textArray = explode("\n", $text);
$randArrayIndexNum = array_rand($textArray);
$randPhrase = $textArray[$randArrayIndexNum];

if(isset($_POST['gen'])){

echo 'Partner and locale to test:'.$randPhrase;
}
?>




<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="styles.css">
        <title>LPS - Random Number Generator</title>
    </head>
<body>



    <h2 align="center">Click to generate a random partner and locale to test!</h2>

        <form align="center" action="randomalgV2.php" method="POST">
            <input  type="submit" name="submit" value="Generate!">
            <h2><?php echo $randPhrase?></h2>
            <hr>
        </form>
    <img src="layout.png" class="img-rounded" alt="Cinque Terre" width= 100% height=auto>
</body>
</html>






