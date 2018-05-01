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
		if($num_elm == ($section*3-2)) echo '<div class="row">';
	?>

	<div class="col-lg-4 text-center main-blick blick<?=$num_elm?>">
		<div class="backover">
			<h5><a href="#"><?=$arItem["NAME"]?></a></h5>
		</div>
	</div>	

	<?
		if($num_elm == ($section*3)) {echo '</div>'; $section = $section + 1;}
	?>

<?endforeach;?>		
<?
	if($num_elm != (($section-1)*3)) echo '</div>';
?>

