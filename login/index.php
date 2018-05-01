<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Байкал Электроникс - корпоративный портал");
?>
<?	global $USER;
	if ($USER->IsAuthorized()) LocalRedirect('/', false, "301 Moved permanently"); 
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "/auth/",
		"SHOW_ERRORS" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>