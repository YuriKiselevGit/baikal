<?
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$boss = explode(',',$_REQUEST["bossemail"]);


$arSend = array(
	"BOSS" => trim($boss[1]),	
	"BOSSEMAIL" => trim($boss[0]),	
	"EMPEMAIL" => trim($_REQUEST["email"]),	
	"USER" => trim($_REQUEST["user"]),	
	"TEXT" => trim($_REQUEST["voprosruk"])
);
    $idevent = CEvent::Send('EMAIL_VOPROS',SITE_ID,$arSend);
	
    