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
    <!-- ========== While Loops Start ========== -->
    <div class="container mt-3">
      <?php 
        echo " While Loop In PHP <br>";
        // Example 1 (1,2,3,4,5,6,7,8,9,10)
        $n = 0;
        while ($n <= 10) {
          echo $n;
          echo "<br>";
          $n++;
        }

        // Example 2 (1,3,5,7,9,11)
        $s = 0;
        while ($s <= 10) {
          echo $s + 1;
          echo "<br>";
          $s+=2;
        }
        
        // Example 2 (2,4,6,8,10,12)
        $s = 0;
        while ($s <= 10) {
          echo $s + 2;
          echo "<br>";
          $s+=2;
        }
      ?>
    </div>
    <!-- ========== While Loops End ========== -->
    <!-- BootStrap Js Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>