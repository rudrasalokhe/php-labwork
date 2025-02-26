<?php
$string = "Rudra Salokhe";
$count = 0;
$i = 0;
$flag = false;
while(isset($string[$i])){
    if($string[$i]== " "){
        $flag = false;
    }
    else{
        if($flag!=true){
            $count++;
            $flag = true;
        }
    }
    $i++;
}
echo "The total number of words in the string is:" .$count;
?>