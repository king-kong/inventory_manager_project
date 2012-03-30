<?php

//Form

echo "<br/>";
echo '<div id="deleteForm">';
echo '<h3>Delete Form:</h3>';
if ($error !== "") {
	echo '<div class="errorMsg">' . $error . '</div>';
}
echo form_open('home/delete');
echo "<label name='id'>Id:</label>&nbsp;&nbsp;&nbsp;";
echo form_input('id', $this -> input -> post('id', false));
echo "<br />";
echo form_submit('submit', 'Submit');
echo form_close();
echo "<br />";
echo '</div>';
?>