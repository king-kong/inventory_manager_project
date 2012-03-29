<<html>
	<head>
		<title>ADD</title>
	</head>
	<body>
		<?php

		echo "<table border='1'>\n";
		echo "<tr><th>id</th><th>name</th><th>cost</th></tr>\n";

		foreach ($var1 as $row) {
			echo "<tr>";

			foreach ($row as $v) {
				echo "<td>" . $v . "</td>";
			}
			#echo "<td><a href='index.php/home/delete/".$row['id']."'>delete</a></td>";
			echo "</tr>\n";
		}
		echo "</table>";
		
		//Form
		echo "<br/>";
		echo form_open('home/add');
		echo "id: " . form_input('id');
		echo "name: " . form_input('name');
		echo "cost: " . form_input('cost');
		echo "<br />";
		echo form_submit('submit', 'Submit');
		echo form_close();
		echo "<br />";
		echo "<a href='".base_url()."'>home</a>";
	?>
	</body>
</html>