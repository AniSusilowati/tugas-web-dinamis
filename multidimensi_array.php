<?php

$MultArray = array
(
	$MultArray["Manual"] = array("supraX", "revo", "astrea"),
	$MultArray["Matic"] = array("vario", "beat", "PCX"),
	$MultArray["kopling"] = array("CBR", "sonic", "verza")
	);
	
	for($i = 0; $i < 3; $i++)
	{
	for($j = 0; $j < 3; $j++)
		{
		if($i == 0)
		{
		echo "Jenis motor : manual<br>";
		echo $MultArray[$i][$j]."<br>";
		}
		else if($i == 1)
		{
		echo "Jenis motor : matic<br>";
		echo $MultArray[$i][$j]."<br>";
		}	
			else
			{
			echo "Jenis motor : kopling<br>";
			echo $MultArray[$i][$j]."<br>";	
			}
		}
	}
	
?>