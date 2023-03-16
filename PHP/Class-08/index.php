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
    <!-- ========== Switch Case Statements Start ========== -->
    <div class="container mt-3">
      <?php 
        $age = 20;
        switch($age){
          case 10 :
            echo " You Are Only 10 Years Old <br>";
          case 15 :
            echo " You Are Only 15 Years Old <br>";
          case 20 : 
            echo " You Are Only 20 Years Old <br>";
          default :
            echo " Your Age Is Weird <br>";
          }
      ?>

      <?php 
        $age = 15;
        switch($age){
          case 10 :
            echo " You Are Only 10 Years Old <br>";
            break;
          case 15 :
            echo " You Are Only 15 Years Old <br>";
            break;
          case 20 : 
            echo " You Are Only 20 Years Old <br>";
            break;
          default :
            echo " Your Age Is Weird ";
          }
      ?>
    </div>
    <!-- ========== Switch Case Statements End ========== -->
    <!-- BootStrap Js Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>