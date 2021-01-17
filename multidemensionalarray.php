<?php

$students = array('viaks'=>array('age'=>20,'marks'=>30,'class'=>'mca'),
    'rahul'=>array('age'=>30,'marks'=>40,'class'=>'dc'));
echo "<pre>";
print_r($students);
echo $students['viaks']['marks'];


?>