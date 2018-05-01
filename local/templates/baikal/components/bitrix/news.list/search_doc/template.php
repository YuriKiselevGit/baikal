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
<div class="col-md-10 col-md-offset-1 sresults">
	<ol>
		<?foreach($arResult["ITEMS"] as $arItem):?>			
		<li><p><i class="far fa-2x fa-file-word text-primary"></i> <a href="#"><?=$arItem['NAME']?> <span class="text-muted">(2 Мб)</span></a></p></li>
		<? endforeach;?>
	</ol>	
</div>			


