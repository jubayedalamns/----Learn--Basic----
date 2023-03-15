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
    <!-- ========== Data Types Start ========== -->
    <div class="container mt-3">
    <!-- 
      String
      Integer
      Float (floating point numbers - also called double)
      Boolean
      Array
      Object
      NULL
      Resource
     -->

     <?php 
    // ----- String - sequence of characters start -----
    $name = "Jannatul Mawa";
    $friend = "Mitu & Pency";
    echo "My name is $name , My friends name is $friend .. <br>";
    // var_dump ($name);
    // ----- String - sequence of characters end -----

    // ----- Integer - non-decimal number start -----
    $a = 500;
    $b = 600;
    echo " The integer number is ". $a-$b ;
    echo "<br>";
    var_dump ($a);
    // ----- Integer - non-decimal number end -----

    // ----- Float - floating point number start -----
    $a = 500.5678;
    $b = 300.345;
    echo " The Float number is ". $a-$b ;
    // var_dump ($a);
    echo "<br>";
    // ----- Float - floating point number end -----

    // ----- Boolean - TRUE or FALSE. start -----
    $a = True;
    $b = False;
    echo var_dump($a);
    echo "<br>";
    echo var_dump($b);
    echo "<br>";
    // var_dump ($a);
    // ----- Boolean - TRUE or FALSE. end -----

    // ----- Array - stores multiple values in one single variable start -----
    $friends = array("Shaown","Sakar","Feroz","Jamal","Soikot");
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[2];
    echo "<br>";
    echo $friends[3];
    echo "<br>";
    echo $friends[4];
    echo "<br>";
    // ----- Array - stores multiple values in one single variable end -----

    // ----- Null Start -----
    $a = null;
    echo $a;
    echo var_dump($a);
    // ----- Null End -----
     ?>
    </div>
    <!-- ========== Data Types End ========== -->
    <!-- BootStrap Js Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>