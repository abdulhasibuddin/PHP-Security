<?php
//Define input length of the permitted data through input field using Regex::

	$message = $color = "";
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(preg_match("/^[a-zA-Z0-9_]{4,}$/", $_POST['input'])) 
		{
			$message = "<div style='color:green'>Length is >= 4.</div>";
		}
		elseif(preg_match('/^[a-zA-Z0-9_]{3}$/', $_POST['input']))
		{
			$message = "<div style='color:green'>Length is = 3.</div>";
		}
		elseif(preg_match('/^[a-zA-Z0-9_]{1,2}$/', $_POST['input']))
		{
			$message = "<div style='color:green'>Length is <= 2.</div>";
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
