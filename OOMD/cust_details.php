<?php
	extract($_GET);

	$file=fopen("customers","r");

	$flag=0;	
	while($line=fgets($file))
	{
		$cust=trim($line);
		$cust=explode(':',$cust);

		if($cust[0]==$phone)
		{
			$flag=1;
			break;
		}
	}

	if($flag==1)
		echo $cust[1];
	else
		echo 0;

?>









