<?php

echo "<?xml version='1.0'?>\n";
echo "<products>\n";

foreach ($var1 as $row) {
	echo "<product>";

	foreach ($row as $k => $v) {
		echo "<".$k.">" . $v . "</".$k.">";
	}
	#echo "<td><a href='index.php/home/delete/".$row['id']."'>delete</a></td>";
	echo "</product>\n";
}

echo "</products>\n";
?>