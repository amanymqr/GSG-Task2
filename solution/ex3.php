<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    

        <h2 class="fs-3 text-center pt-5 text-success ">Exercise -3- </h2>

<div class="exercise1 my-4">
        <div class="container ">
            <div class="row justify-content-center  ">
                <div class="col mb-3 ">
                    <div class="card ">
                        <div class="card-body  text-center py-4 ">
                            <p class="fs-5 text-success">Q :Write a function that accepts 2 arrays and return a new array that holds the value of multiplying each item in the first array by the corresponding item in the second array.</p>
                            <div class="row">
                                <div class="col-8">
                                <pre class="text-start text-secondary fs-6" style ="font-size: 11px;"> <span class= "text-dark fs-6">Solution :</span>
    function multiplyingArrays($arr1 , $arr2){
    $new_array = [];
    for ($i = 0; $i < count($arr1); $i++) {
      $new_array[] = $arr1[$i] * $arr2[$i];
    }
    return $new_array;
}

$arr1 =[1 , 2];
$arr2 =[5 , 1 ];
$multiplidedArray = multiplyingArrays($arr1 , $arr2);
print_r($multiplidedArray) ;

    </pre>  
                                </div>
                                <div class="col-4 text-start" style ="font-size: 11px;">
                                    <span  class= "text-dark fs-6">Output:</span>
                                    <p class=" text-secondary fs-6" >
                                    <?php
                                        function multiplyingArrays($arr1 , $arr2){
                                            $new_array = [];
                                            for ($i = 0; $i < count($arr1); $i++) {
                                              $new_array[] = $arr1[$i] * $arr2[$i];
                                            }
                                            return $new_array;
                                        }
                                        
                                        $arr1 =[1 , 2];
                                        $arr2 =[5 , 1 ];
                                        $multiplidedArray = multiplyingArrays($arr1 , $arr2);
                                        print_r($multiplidedArray) ;
                                        
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