<?php

$password='';

$ArrayWords=Array('donkey',
	'excitement','philantropist','phosphate','fantabulous','bummer','cplusplus',
	'futuristic','horrendous','condescension','frustration','hydrangya',
	'androgynous','salubrious','sangria','byzantine','penitentiary','pastoral',
	'fraternity','sorority','buckingham','methyldihydroxy'
	);

$ArraySymbols=Array('~','!','@','#','$','%','^','&','*','(',')','<','>','?',':',';');
$errorMessage='';
$upperLimit=10;

$bPostFromSubmit=false;

//echo print_r($_POST);

foreach(array_keys($_POST) as $ControlName)
{
	if ($ControlName=='btnSubmit')
	{
		$bPostFromSubmit=true;
	}
}

if ($bPostFromSubmit)
{
	if(is_numeric($_POST['txtNumberOfWords']) ? ($_POST['txtNumberOfWords']>0) && ($_POST['txtNumberOfWords']<=10) : false)
	{
		$countWords=count($ArrayWords);
		$errorMessage='';
		for($i=0;$i<$_POST['txtNumberOfWords'];$i++)
		{
			$newWord=$ArrayWords[rand(0,$countWords-1)];
			while(!(strpos(strtolower($password),$newWord)===false))
			{
				$newWord=$ArrayWords[rand(0,$countWords-1)];
			}
			if (rand(1,3)==3)
			{
				$password.=ucfirst($newWord).'-';	
			}
			else
			{
				$password.=$newWord.'-';
			}
			
		}

		if(isset($_POST['chkIncludeSymbol']))
		{
			$password.=$ArraySymbols[rand(0,count($ArraySymbols)-1)];
		}
		if(isset($_POST['chkIncludeNumber']))
		{
			$password.=rand(0,100);
		}
	}
	else
	{
		$errorMessage="Please enter a numeric value between 1 and $upperLimit";
	}
}
else
{
	$password='';$errorMessage='';
}