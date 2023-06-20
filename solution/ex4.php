<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    

        <h2 class="fs-3 text-center pt-5 text-success ">Exercise -4- </h2>

<div class="exercise1 my-4">
        <div class="container ">
            <div class="row justify-content-center  ">
                <div class="col mb-3 ">
                    <div class="card ">
                        <div class="card-body  text-center py-4 ">
                            <p class="fs-5 text-success">Q :Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.</p>
                            <div class="row">
                                <div class="col-8">
                                <pre class="text-start text-secondary fs-6" style ="font-size: 11px;"> <span class= "text-dark fs-6">Solution :</span>
    function fectorialNum($num){
    $factorial=1 ;
    for ($i=$num; $i>=1; $i--) {  
      $factorial = $factorial * $i;  
    } 
    return $factorial;
    }
    $num = 4;
    echo "Factorial Of ".$num." Is ".fectorialNum($num);

    </pre>  
                                </div>
                                <div class="col-4 text-start" style ="font-size: 11px;">
                                    <span  class= "text-dark fs-6">Output:</span>
                                    <p class=" text-secondary fs-6" >
                                    <?php
                                        function fectorialNum($num){
                                            $factorial=1 ;
                                            for ($i=$num; $i>=1; $i--) {  
                                              $factorial = $factorial * $i;  
                                            } 
                                            return $factorial;
                                        }
                                        $num = 4;
                                        echo "Factorial Of ".$num." Is ".fectorialNum($num);
                                        
                                    ?>
                                </p>
                                </div>
                            </div>
                            <a  href="../index.php" class="btn btn-outline-success  w-100 " >All Exercises </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>