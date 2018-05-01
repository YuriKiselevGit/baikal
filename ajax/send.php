<?
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$arSend = array(
	"EMAIL" => trim($_REQUEST["email"]),
	"FREND" => trim($_REQUEST["frend"]),
	"MESSAGE" => trim($_REQUEST["message"]),
	"VAKANCY" => trim($_REQUEST["name_vakansiya"]),
	"TEXT" => trim($_REQUEST["descr_vakansiya"])

);
    $idevent = CEvent::Send('EMAIL_VAKANSY',SITE_ID,$arSend);
	
	