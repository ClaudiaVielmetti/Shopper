<!-- /*
This code prints the value of $data using the "pre" tag.
The code starts by defining a function named "show" that accepts 1 parameter.
The code then prints "pre" tags and the value of the parameter.
The code then prints "pre" tags again.
The code has another function that returns the value of the parameter after adding backslashes to it.
The code has another function that redirects the user to the specified link in the website.
*/ -->


<?php 


function show($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function check_error()
{

	if(isset($_SESSION['error']) && $_SESSION['error'] != "")
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
}

function esc($data)
{
	return addslashes($data);
}

function redirect($link)
{
	header("Location: " . ROOT . $link);
	die;
}

