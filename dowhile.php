<!-- <?php

$num = 2; 
do {
	$num +=2;
	echo $num, "\n";
}while ($num <12);

?> -->

<?php
$num = 2;

while($num !=2) {
	echo "in case of while the code is skipped";
	echo $num, "\n";
}
do {
	$num++;
	echo " the do.. while code is excuted atleat once";
}while($num == 2);


?>