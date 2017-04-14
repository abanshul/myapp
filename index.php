<?php 
echo "anshul";
$another=$a=array(5,4,3,2,1);
$n=5;
echo "anshul";
for($c=0;$c<$n-1;$c++)
{
	for($p=0;$p<$n-$c-1;$p++)
	{
		if($a[$p]>$a[$p+1])
		{
			$t=$a[$p+1];
			$a[$p+1]=$a[$p];
			$a[$p]=$t;
		}
	}
}
for($c=1;$c<$n;$c++)
{
	$d=$c;
	while($d > 0 && $another[$d] < $another[$d-1])
	{
		
			 $t          = $another[$d];
				$another[$d]   = $another[$d-1];
			$another[$d-1] = $t;
 
      $d--;
		
	}
}
print_r($a);
print_r($another);
?>