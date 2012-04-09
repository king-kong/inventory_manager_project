<html>
	<head>
		<title>Home</title>
	</head>
		<body>
		<?php

		echo "<table border='1'>\n";
		echo "<tr><th>id</th><th>name</th><th>cost</th><th>quantity</th></tr>\n";

		foreach ($var1 as $row) {
			echo "<tr>";

			foreach ($row as $v) {
				echo "<td>" . $v . "</td>";
			}
			#echo "<td><a href='index.php/home/delete/".$row['id']."'>delete</a></td>";
			echo "</tr>\n";
		}
		echo "</table>";
		echo "<br />";
		echo "<a href='index.php/home/add'>add</a><br />";
		echo "<a href='index.php/home/delete'>delete</a><br />";
		echo "<a href='index.php/home/xml'>display xml</a>";
	?>
	</body>
</html>
