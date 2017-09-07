<?php
//Pass only permitted data through input field using Regex::

	$message = $color = "";
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(preg_match("/^[a-zA-Z0-9_]*$/", $_POST['input'])) 
		{
			$message = "<div style='color:green'>Valid!</div>";
		}
		else
		{
			$message = "<div style='color:red'>Invalid input!</div>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pass Only Permitted Characters</title>
</head>
	<body>
		<form method="post" action="">
			<div>
				<div>
					<label>Input:</label>
				</div>
				<div>
					<input type="text" name="input" autofocus>
					<span><?php echo $message; ?></span>
				</div>
			</div>
			<div>
				<div></div>
				<div>
					<button type="submit">Submit</button>
				</div>
			</div>
		</form>
	</body>
</html>