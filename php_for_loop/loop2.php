<?php
for($i=1; $i <= 5; $i++) {
	echo "<p>";
	for($j=1; $j <= $i; $j++) {
		echo "*";
		if ($j < $i) {
		echo " ";
		}
}
echo "</p>";
}
