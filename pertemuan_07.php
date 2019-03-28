<?php

function cetak($string, $style="b" )
{
	switch ($style)
	{
		case "b" :
			return "<b>$string</b>";
		break;
		case "i" :
			return "<i>$string</i>";
		break;
		case "u" :
			return "<u>$string</u>";
		break;
		default :
			return "xxx";
	}
}
	echo "i'am a ". cetak("Backend web developer","x");

?>