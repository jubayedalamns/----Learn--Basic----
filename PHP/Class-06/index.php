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
    <!-- ========== Operators Start ========== -->
    <!-- 
      Arithmetic Operators
      Assignment Operators
      Comparison Operators
      Increment / Decrement Operators
      Logical Operators
      Array Operators
      Conditional Assignment Operators 
    -->
    <div class="container mt-3">
    <?php 
    //Arithmetic Operators
    $a = 20;
    $b = 15;
    echo " For a+b , The Result Is : " . $a+$b . "<br>";
    echo " For a-b , The Result Is : " . $a-$b . "<br>";
    echo " For a*b , The Result Is : " . $a*$b . "<br>";
    echo " For a/b , The Result Is : " . $a/$b . "<br>";
    echo " For a%b , The Result Is : " . $a%$b . "<br>";
    echo " For a**b , The Result Is : " . $a**$b . "<br>";

    //Assignment Operators
    // $x = $a;
    // $a += 6 ;
    // $a -= 6 ;
    // $a *= 6 ;
    // $a %= 6 ;
    $a **= 6 ;
    echo " For x , The Value Is : ". $a . "<br>";


    //Comparison Operators
    $x = 7;
    $y = 9;
    // echo " For x==y, The Result Is : " . $x==$y . "<br>";
    echo " For x==y, The Result Is : ";
    echo var_dump($x==$y) . "<br>";
    echo var_dump($x<$y) . "<br>";
    echo var_dump($x<>$y) . "<br>";

    //Logical Operators
    $n = True;
    $s = False;
    echo " For n and s , there result is : ";
    echo var_dump($n && $s);
    // echo var_dump($n and $s);
    echo "<br>";
    echo " For n or s , there result is : ";
    echo var_dump($n || $s);
    // echo var_dump($n or $s);
    echo "<br>";

    echo " For !n , there result is : ";
    echo var_dump(!$n);
    // echo var_dump($n or $s);
    echo "<br>";
    ?>
    </div>
    <!-- ========== Operators End ========== -->
    <!-- BootStrap Js Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>