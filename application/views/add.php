<html>
	<head>
		<title>ADD</title>
		 <script>
           <?php if ($error !== "")
             {
               echo "alert('". $error. "');";
			 }
           ;
           ?>
        </script>
	</head>
	<body>
		<?php

		echo "<table align=center border=1 cellpadding=3 cellspacing=3>\n";
		echo "<tr><th>Id</th><th>Name</th><th>Cost</th><th>Quantity</th></tr>\n";

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
		echo form_open('home/add');
		echo "<br/>";
		echo "<table align=center border=1 cellpadding=3 cellspacing=3>";
		echo "<tr><td>";
		echo "Id      : " . form_input('id');
		echo "Name    : " . form_input('name');
		echo "Quantity: " . form_input('quantity');
		echo "Cost    : " . form_input('cost');
		echo "</td><tr align=center><td>";
		echo form_submit('submit', 'Submit');
		echo "<a href='".base_url()."'>home</a>";
		echo "</td></tr></table>";
		echo form_close();
		echo "<br />";
		
	?>
	</body>
</html>