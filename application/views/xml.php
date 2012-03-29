<?php


echo '<?xml version="1.0"?>';
echo "<products>";

foreach ($var1 as $row) {
	echo "<product>";

	foreach ($row as $k => $v) {
		echo "<".$k.">" . xml_convert($v) . "</".$k.">";
	}
	#echo "<td><a href='index.php/home/delete/".$row['id']."'>delete</a></td>";
	echo "</product>";
}

echo "</products>";
?>