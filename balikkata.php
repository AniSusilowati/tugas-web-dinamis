>?php
function balikkata($str)
{
	$len = strlen($str);
	for($i=0; $i<$len/2; $i++)
	{
		$tmp = $str[$i];
		$str[$i] = $str[$len-$i-1];
		$str[$len-$len-$i-1] = $tmp;
	}
	return $str;
}
echo "<h1>Daftar Balik Nama Kendaraan Bermotor</h1>";
echo "<h2>Samsat Sewon</h2>";
echo "1. Bapak ".balikkata ("Tejo")."<br>";
echo "1. Bapak ".balikkata ("Lotek")."<br>";
echo "1. Ibu ".balikkata ("Maya Tilis")."<br>";
?>