#!/usr/bin/php

<?php
$bool = TRUE;
while ($bool == TRUE)
{
	echo "Enter a number: ";
	$answer = fgets(STDIN);
	$answer = trim($answer);
	if (!is_numeric($answer))
		echo "'$answer' is not a number\n";
	else if (is_numeric($answer))
	{
		if ($answer % 2 == 0)
			echo "The number $answer is even\n";
		else
			echo "The number $answer is odd\n";
	}
	else
		$bool = FALSE;
		exit (0);
}

?>
