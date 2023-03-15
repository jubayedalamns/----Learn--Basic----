<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "PHP" ; echo " BASIC" ?></title>
    <!-- BootStrap Css Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <!-- ========== Strings & Strings Function Start ========== -->
    <div class="container mt-3">
      <?php 
        $name = "Jannatul Mawa";
        echo $name;
        echo "<br>";
        // strlen
        echo "My Name Lenght Is : " . strlen($name) . " . <br>";
        // str_word_count
        echo "My Name Lenght Is : " . str_word_count($name) . " Words . <br>";
        // strrev
        echo "My Name Revers Is : " . strrev($name) . ". <br>";
        // strpos
        echo "Search For a Text " . strpos($name, "Mawa");
        echo "<br>";
        // str_replace
        echo " Replace Text " . str_replace( "Mawa","Sujon" ,$name );
        echo "<br>";
        // str_repeat
        echo " Repeat Text " . str_repeat( $name , 20);
        echo "<br>";
        // rtrim & ltrim
        echo "<pre>";
        echo rtrim("    This is my Name    <br>"); //Remove Right Side Space
        echo ltrim("    This is my Name    <br>");//Remove Left Side Space
        echo "</pre>";
      ?>
    </div>
    <!-- ========== Strings & Strings Function End ========== -->
    <!-- BootStrap Js Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>