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
    <!-- ========== Variables Start ========== -->
    <div class="container mt-3">
      <?php 
        $name = "Jannatul Mawa";
        $income = 50000;
        $hello = "Hello World<br>";
        echo $hello;
        echo " My Name Is $name & My Monthly Income Is $income TK <br>";
      ?>
        <br>
      <?php
        $x= 20;
        $y= 30;
        echo "Total : " . $x+$y;
        echo "<br>";
        echo "Total : " . $x-$y;
        echo "<br>";
        echo "Total : " . $x*$y;
        echo "<br>";
        echo "Total : " . $x/$y;
      ?>
    </div>
    <!-- ========== Variables End ========== -->
    <!-- BootStrap Js Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>