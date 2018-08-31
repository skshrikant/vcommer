<?php
function label($label, $obj)
{
	$return = $obj->lang->line($label);
	if($return)
		echo $return;
	else
		echo $label;
}

function getHash($qtd){ 
//Under the string $characters you write all the characters you want to be used to randomly generate the code. 
$characters       = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789'; 
$charactersLength = strlen($characters); 
$charactersLength--; 

$hash=NULL; 
    for($x=1;$x<=$qtd;$x++){ 
        $randomVal = rand(0,$charactersLength); 
        $hash     .= substr($characters,$randomVal,1); 
    } 

return $hash; 
}