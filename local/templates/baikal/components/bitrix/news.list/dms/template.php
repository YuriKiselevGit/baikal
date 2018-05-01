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

<?	$num = 1;
	foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#coll<?=$num?>">
				<i class="icon mdi mdi-chevron-down"></i> <?=$arItem['NAME']?></a></h4>
			</div>
		<div id="coll<?=$num?>" class="panel-collapse collapse <?if($num==1) echo ' in'?>">
			<div class="panel-body">
				<?=$arItem["PREVIEW_TEXT"]?>
			</div>
		</div>
	</div>
	
<?	$num = $num + 1;
	endforeach;?>

