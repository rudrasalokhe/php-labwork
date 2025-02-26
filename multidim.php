<?php
$data = array(
    "1001" => array("php" => 20, "Mad" => 19, "pwp" => 20), 
    "1002" => array("php" => 20, "Mad" => 19, "pwp" => 20),
    "1003" => array("php" => 20, "Mad" => 19, "pwp" => 20)
);

foreach ($data as $rollno => $result) {
    echo "Roll no: " . $rollno . "<br>";
    foreach ($result as $subject => $marks) {
        echo "Subject:" . $subject ."Marks:" . $marks . "<br>";
    }
    echo "<br>"; 
}
?>
