<!DOCTYPE html>
<html>
<head>
<title> test </title>

	<script src="http://code.jquery.com/jquery-latest.min.js"</script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="jscript.js" type="text/javascript"></script>

</head>

<body>

<h1> WORLD DATABASE </h1>

<form method="get" action="code.php" onchange="show(languagebtn.value)">
	What do you want to look up? <br>
	<input type="textbox" name="languagebtn"> Language <br>
	Population<br>
	<input type="radio" name="overbtn"> > 100,000 <br>
	<input type="radio" name="underbtn"> < 100,000 <br>
	<input type="submit" name="submitbtn">
</form>

<div id="txtfield">aasdf</div>

</body>
</html>