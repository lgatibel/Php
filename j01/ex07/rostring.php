#!/usr/bin/php
<?php
function ft_split2($str)
{
	$tab;
	$i = 0;
	$cpt = 0;
	$start = 0;
	while (isset($str[$i]))
	{
		while ($str[$i] == ' ')
			$i++;
		$start = $i;
		while(isset($str[$i]) && $str[$i] != ' ')
		{
			$i++;
		}
		if ($i != $start)
		$tab[$cpt] = substr($str, $start, $i - $start);
		$cpt++;
	}
	return ($tab);
}
$tab = ft_split2($argv[1]);
$i = 0;
$str;
while (isset($tab[$i]))
{
	if ($i == 0)
		$premier = $tab[$i];
	else
		$str .= $tab[$i]." ";
	$i++;
}
$str .=$premier;
if (strlen($str))
	echo "$str\n";
?>
