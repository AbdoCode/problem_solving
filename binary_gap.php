<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/23/19
 * Time: 12:25 PM
 */

if(isset($_GET['number'])){

    $number = $_GET['number'];
    $binaryArray  = array_map('intval', str_split(decbin($number)));
    $maxGap = 0;
    $lastOneKey = 0;
    if(array_count_values($binaryArray)[1] > 1){
     $firstOneKey = array_search(1, $binaryArray);
     echo $firstOneKey."<br>";
     foreach($binaryArray as $key => $value){
         if($value == 1 && $key > $firstOneKey) {
             $indexGap = $key - ($lastOneKey+1);
             if($maxGap < $indexGap){
                 $maxGap = $indexGap;
             }
             $lastOneKey = $key;
         }
         echo "K= ".$key." V= ".$value." G= ".$maxGap." L= ".$lastOneKey."<br>";
     }

     echo "<br>Max gap= ".$maxGap;

    }
    else{
        echo "Binary gab is 0";
    }

}
