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
<div class="tab-container">
	<ul class="nav nav-tabs">
		<?	$num = 1;
			foreach($arResult["ITEMS"] as $arItem):?>			
			<li <?if($num==1) echo 'class="active"'?>><a href="#<?=$arItem['CODE']?>" data-toggle="tab"><?=$arItem['NAME']?></a></li>
		<?	$num = $num + 1;
			endforeach;?>
	</ul>	
	<div class="tab-content">
		<?	$num = 1;
			foreach($arResult["ITEMS"] as $arItem):?>
				<div id="<?=$arItem['CODE']?>" class="tab-pane <?if($num==1) echo 'active'?> cont">
					<?=$arItem["DETAIL_TEXT"]?>
				</div>	
		<?	$num = $num + 1;
			endforeach;?>			
	</div>	
</div>
