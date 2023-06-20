<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    

        <h2 class="fs-3 text-center pt-5 text-success ">Exercise -2- </h2>

<div class="exercise1 my-4">
        <div class="container ">
            <div class="row justify-content-center  ">
                <div class="col mb-3 ">
                    <div class="card ">
                        <div class="card-body  text-center py-4 ">
                            <p class="fs-5 text-success">Q : Write a PHP function that accepts an array of strings and return the longest string found in the array,the function should have a 2nd argument that will hold the index of the item that have the longest .</p>
                            <div class="row">
                                <div class="col-8">
                                <pre class="text-start text-secondary fs-6" style ="font-size: 11px;"> <span class= "text-dark fs-6">Solution :</span>
    function longestStringInArray($arrOfStr, &$index) {
    $longestStr = $arrOfStr[0];
    $indexOfLongestStr = 0;

    for ($i = 1; $i < count($arrOfStr); $i++) {
        if (strlen($arrOfStr[$i]) > strlen($longestStr)) {
            $longestStr = $arrOfStr[$i];
            $indexOfLongestStr = $i;
        }
    }
    return [$longestStr, $indexOfLongestStr];
}

$arrOfStr = ['Ammany', 'Tareeeq', 'Farah', 'Nagham'];
[$longestStr, $index] = longestStringInArray($arrOfStr, $index);

echo "The longest string is: $longestStr";
echo "The index of the longest string is: $index";

    </pre>  
                                </div>
                                <div class="col-4 text-start" style ="font-size: 11px;">
                                    <span  class= "text-dark fs-6">Output:</span>
                                    <p class=" text-secondary fs-6" >
                                    <!-- Array ( [0] => 4 [1] => 8 ) -->
                                    <?php
                                        function longestStringInArray($arrOfStr, &$index) {
                                            $longestStr = $arrOfStr[0];
                                            $indexOfLongestStr = 0;
                                        
                                            for ($i = 1; $i < count($arrOfStr); $i++) {
                                                if (strlen($arrOfStr[$i]) > strlen($longestStr)) {
                                                    $longestStr = $arrOfStr[$i];
                                                    $indexOfLongestStr = $i;
                                                }
                                            }
                                            return [$longestStr, $indexOfLongestStr];
                                        }
                                        
                                        $arrOfStr = ['Ammany', 'Tareeeq', 'Farah', 'Nagham'];
                                        [$longestStr, $index] = longestStringInArray($arrOfStr, $index);
                                        
                                        echo "The longest string is: $longestStr<br>";
                                        echo "The index of the longest string is: $index<br>";
                                        echo"<br>";
                                        
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