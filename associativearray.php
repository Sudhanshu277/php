<?php

$courses = array("c++"=>"1000", "java"=>"1200","php"=>"12000");
echo $courses['java'];
echo "<pre>";
//print_r($courses);
foreach ($courses as $key => $value) {
      echo "course is ". $key ." fees is ". $value."<br>";
}



?>