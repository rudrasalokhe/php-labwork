<?php
$data = array(
    "1001" => array("php" => 20, "Mad" => 19, "pwp" => 20), 
    "1002" => array("php" => 20, "Mad" => 19, "pwp" => 20),
    "1003" => array("php" => 20, "Mad" => 19, "pwp" => 20)
);
$rollnos = array_keys($data);
$subjects = array_keys($data[$rollnos[0]]);

for($i =0;$i<$rollnos;$i++){
    $rollno = $rollnos[$i];
    echo "Roll no:" .$rollno;
    for($j=0;$j<count($subjects);$j++){
        $subject = $subjects[$j];
        $marks = $data[$rollno][$subject];
        echo "Roll no: " . $rollno . "marks: " . $marks . "<br>";   
    }
}
?>