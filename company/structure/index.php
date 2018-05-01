<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Байкал Электроникс");
$APPLICATION->SetTitle("Структура");?>

<div class="be-content">
	<div class="header-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Структура компании</h1>
			</div>
		</div>
	</div>
	<div class="full-content main-content container-fluid">
		
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list", 
			"structure_company", 
			array(
			"ADD_SECTIONS_CHAIN" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COUNT_ELEMENTS" => "N",
			"IBLOCK_ID" => "6",
			"IBLOCK_TYPE" => "Company",
			"SECTION_CODE" => "",
			"SECTION_FIELDS" => array(
			0 => "SORT",
			1 => "",
			),
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_URL" => "",
			"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
			),
			"TOP_DEPTH" => "3",
			"COMPONENT_TEMPLATE" => "structure_company",
			"VIEW_MODE" => "LIST",
			"ELEMENT_SORT_FIELD" => "name",
			"ELEMENT_SORT_ORDER" => "asc",
			"SHOW_PARENT_NAME" => "Y"
			),
			false
		);?>
		
	</div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>