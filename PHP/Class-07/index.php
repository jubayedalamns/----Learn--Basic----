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
    <!-- ========== If Else Conditionals Start ========== -->
    <div class="container mt-3">
      <?php 
        $n = 10;
        $s = 5;
        if( $n > $s){
          echo " N is grater than S";
        }else{
          echo " N is smaller than S";
        }
      ?>
      <br>
      <?php 
        $age = 50;
        if( $age < 20 ){
          echo " You Can Drink Only Water ";
        }elseif( $age < 30 ){
          echo " You Can Drink Only Water With Tea ";
        }else{
          echo " You Can Drink Everything ";
        }
      ?>
    </div>
    <!-- ========== If Else Conditionals End ========== -->
    <!-- BootStrap Js Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>