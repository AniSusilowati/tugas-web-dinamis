<?php

function kalkulator($string, $style="b" )
{
	switch ($style)
	{
		case "b" :
			return "<b>$string</b>";
		case "i" :
			return "<i>$string</i>";
		break;
		case "u" :
			return "<u>$string</u>";
		
		default :
			return "xxx";
	}
	echo "i'am a ". kalkulator("Backend web developer","i");
}

function kalkulator ($operator, $x, $y)
{
	switch ($operator)
	{
		case "x" :
			return ($x*$y);
		break;
		case "+" :
			return ($x+$y);
		break;
		case "^" :
			return ($x^$y);
		break;
	}	

	echo "i'am a ". kalkulator("Backend web developer","i");
	echo "<br />";
	echo "8x10=".kalkulator ("x",8,10);
	echo "<br />";
	echo "20+10=".kalkulator ("+",20,10);
	echo "<br />";
	echo "4^2=".kalkulator ("^",8,10);
}
?>