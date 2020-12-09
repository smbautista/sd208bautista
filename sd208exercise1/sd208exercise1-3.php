<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $str = "Hello, heLLo, 1236 !343 world! world!";
       function countWords($str){ 
         $arr = explode(" " , $str);
          $unique = [];
          foreach ($arr as $el){
            $key = strtolower($el);
            if (array_key_exists($key , $unique)){
            // update value
              $value = $unique[$key];
              $unique[$key] = ++$value;
            }else{
              // create new pair 
              $unique[$key] = 1;
            }
          }
          return $unique;
        }
        print_r(countWords($str));
      
      // array_key_exists
      // explode
      // print_r
    
    ?>
</body>
</html>