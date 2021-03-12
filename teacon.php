<?php

$con = mysqli_connect('localhost' , 'root', '', 'curd');

if ($con) {
	echo "connectesd";
}else{
	echo "not connectes";
}

?>