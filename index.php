<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<SCRIPT SRC="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></SCRIPT>
</SCRIPT>
<html>

<head>
    <h1>Random generator - Dimensiunea fontului</h1>
</head>

<body>
    <form method="post">
        <pre class id="astronaut">
        _..._
      .'     '.      _
     /    .-""-\   _/ \
   .-|   /:.   |  |   |
   |  \  |:.   /.-'-./
   | .-'-;:__.'    =/
   .'=  *=|NASA _.='
  /   _.  |    ;
 ;-.-'|    \   |
/   | \    _\  _\
\__/'._;.  ==' ==\
         \    \   |
         /    /   /
         /-._/-._/
         \   `\  \
          `-._/._/</pre>
        <div class="mx-auto">
            <p>Introduceti limitele intervalului pentru marirea fontului.</p>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-describedby="button-addon2" name="input_minim" value="1">
            <input type="text" class="form-control" aria-describedby="button-addon2" name="input_maxim" value="50">
        </div>
        <input type="submit" name="button_random" value="Generate Number" />
    </form>
    <?php
    if (isset($_POST['button_random'])) {
        $dom = new DOMDocument();
        $dom->loadHTML("html");
        $pre_astronaut = $dom->getElementById('astronaut');

        $random_nr = rand($_POST['input_minim'], $_POST['input_maxim']);
        echo ('<h2>' . $random_nr . '</h2>');
        echo '<style type="text/css"> pre{ font-size:' . $random_nr . 'px; } </style>';
    }
    ?>

</body>

</html>