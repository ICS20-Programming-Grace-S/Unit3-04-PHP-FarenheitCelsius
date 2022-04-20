<?php
	// get the input from text field
	$fahrenheit = $_POST['fahrenheit'];
?>
<?php
	// calculate the volume
	$celsius = 5/9 * ($fahrenheit - 32) 
?>

<?php
  $celsius = number_format($celsius, 2);
?>

<h3>Results:</h3>
The temperature from fahrenheit to celsius is: <?php echo "$celsius" ?> °C
</div>