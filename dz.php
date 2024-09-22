<?php
// $arr1 =  [4, 0, -5, 8];
// $arefm =array_sum($arr1)/count($arr1);
// // echo min($arr1) +  max($arr1);

// var_dump($arefm);
// // $arr2 = [6, -22, 5, 1];
$sum =0;
$arr = [[1, 5, 7, 0], [0, -3, 2, 4], [9, 4, 1, 5]];
echo $arr[0][2];"\n";

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . " ";
        if($arr[$i][$j]>=0){
            $sum += $arr[$i][$j];
            
        }
        
    }
    echo "\n";
    
}
echo $sum;


//  двовимірний масив
