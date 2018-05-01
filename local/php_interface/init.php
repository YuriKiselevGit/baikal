<?
AddEventHandler('main', 'OnBeforeEventSend', Array("MyForm", "my_OnBeforeEventSend"));
class MyForm
{
	function my_OnBeforeEventSend($arFields, $arTemplate)
	{
		$arFields["FREND"] 	= $arTemplate["USER_DESCRIPTION"];
		$arFields["USER"] 	= $arTemplate["USER_DESCRIPTION"];
		$arFields["MESSAGE"]= $arTemplate["USER_DESCRIPTION"];
		$arFields["VAKANCY"]= $arTemplate["USER_DESCRIPTION"];
	}
}	
	
if (!function_exists('pre')) {
	function pre($var, $die = false)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';
		if ($die)
			die('Debug in PRE');
	}
}

function GetStrFileSize($size, $round=0)
{
   $sizes = array('B', 'Кб', 'Мб', 'Гб', 'Тб', 'Pb', 'Eb', 'Zb', 'Yb');
   for ($i=0; $size > 1024 && $i < count($sizes) - 1; $i++) $size /= 1024;
   return round($size,$round)." ".$sizes[$i];
}

?>