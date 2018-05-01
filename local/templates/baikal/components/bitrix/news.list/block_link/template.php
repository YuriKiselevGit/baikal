<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	/** @var array $arParams */
	/** @var array $arResult */
	/** @global CMain $APPLICATION */
	/** @global CUser $USER */
	/** @global CDatabase $DB */
	/** @var CBitrixComponentTemplate $this */
	/** @var string $templateName */
	/** @var string $templateFile */
	/** @var string $templateFolder */
	/** @var string $componentPath */
	/** @var CBitrixComponent $component */
	$this->setFrameMode(true);
?>
<?
	//echo '<pre>';
	//print_r($arResult["ITEMS"]);
	//echo '</pre>';
?>
<?
	$section = 1;
	$num_elm = 0;
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?  $num_elm = $num_elm + 1;
		if($num_elm == 1) echo '<div class="row news">'; else 
		if($num_elm == ($section*3-2)) echo '<div class="row news" style="padding-bottom:90px">';
	?>

	<div class="col-lg-4 news">
		<div class="newser">
			<div class="signews">
				<span class="mdi <?=$arItem['PROPERTIES']['ICON']['VALUE']?>"></span>
			</div>
			<h6><a href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>"><?=$arItem["NAME"]?></a></h6>
			<p>
				<a href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>"><?=$arItem["PREVIEW_TEXT"]?></a>
			</p>
		</div>					
	</div>	

	<?
		if($num_elm == ($section*3)) {echo '</div>'; $section = $section + 1;}
	?>

<?endforeach;?>		
<?
	if($num_elm != (($section-1)*3)) echo '</div>';
?>

