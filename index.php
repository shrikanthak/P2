<!DOCTYPE html>
<html>
	<head>
		
		<meta charset='utf-8'>
		
		<title> Password Generator</title>

		<?php require 'PWordLogic.php';?>

		<link rel='stylesheet' type='text/css' href='css/style.css'>



	</head>

	<body>
		<h1 style='font-weight:bold;text-align:center'>xkcd Password Generator</h1>
		<div class='passworddiv'>
			<?php if($password!=''):?>
				<p class='password'><?=$password?></p><br>
			<?php elseif($errorMessage != ''): ?>	
				<p class='errormessage'><?=$errorMessage?></p><br>
			<?php endif ?>
		</div>
		<form action='index.php' method='POST' class='formstyle'>
			<b>Input Number of Words:</b><input type='text' name='txtNumberOfWords'> <b>Maximum of <?=$upperLimit?> Words</b><br>
			
			<div class = 'optionsdiv'>
				<input type='checkbox' name='chkIncludeSymbol'><b>Include Symbol</b><br>
				<input type='checkbox' name='chkIncludeNumber'><b>Include Number</b><br>
			</div>
			<input type='submit' name='btnSubmit'>
		</form>
		<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
		</p>
	</body>

</html>