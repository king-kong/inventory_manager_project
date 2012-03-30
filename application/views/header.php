<html>
	<head>
		<title><?php   echo $title;?></title>
		<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery.dataTables.min.js"></script>
		<style type="text/css" title="currentStyle">
@import "<?php echo base_url();?>css/demo_page.css";
@import "<?php echo base_url();?>css/jquery.dataTables.css";
@import "<?php echo base_url();?>css/styles.css";
		</style>
		<script type="text/javascript"><?php
if (isset($error) && $error !== "") {
	echo "alert('" . $error . "');";
};
if (isset($success) && $success !== "") {
	echo "alert('" . $success . "');";
};
?>
	$(document).ready(function() {
		$('#productsTable').dataTable();
	});

		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<h1>Music Universe</h1>
				<h3><?php   echo $title;?></h3>
			</div>
			<div id="content">
				<hr/>
				<h3>Products:</h3>
				<?php
				echo '<table id="productsTable" class="display">';
				echo '<thead>';
				echo "<tr><th>id</th><th>name</th><th>cost</th><th>quantity</th></tr>\n";
				echo '</thead>';
				echo '<tbody>';
				foreach ($var1 as $row) {
					echo "<tr class='odd'>";

					foreach ($row as $v) {
						echo "<td>" . $v . "</td>";
					}
					#echo "<td><a href='index.php/home/delete/".$row['id']."'>delete</a></td>";
					echo "</tr>\n";
				}
				echo '</tbody>';
				echo "</table>";

				echo "<br />";
				echo "<hr />";
				?>
