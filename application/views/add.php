<?php

//Form
echo form_open('home/add');

echo "<br/>";
echo "<table align=center border=1 cellpadding=3 cellspacing=3>";
echo "<tr><td>";
echo "ID      : " . form_input('id', trim($this -> input -> post('id')));
echo "Name    : " . form_input('name', trim($this -> input -> post('name')));
echo "Quantity: " . form_input('quantity', trim($this -> input -> post('quantity')));
echo "Cost    : " . form_input('cost', trim($this -> input -> post('cost')));
echo "</td><tr align=center><td>";
echo form_submit('submit', 'Submit');
echo "</td></tr></table>";
echo form_close();
echo "<br />";
?>
