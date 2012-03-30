
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
		
		//Form
		if ($error !== "")
		{
			echo $error;
		}
		echo "<br/>";
		echo form_open('home/delete');
		echo "id: " . form_input('id', $this->input->post('id', false));
		echo "<br />";
		echo form_submit('submit', 'Submit');
		echo form_close();
		echo "<br />";
		echo "<a href='".base_url()."'>home</a>";
	?>