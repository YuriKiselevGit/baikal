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
<div class="col-md-12">&nbsp;</div>
<div class="col-md-10 col-md-offset-1 sresults">
	<ol>
		<?foreach($arResult["ITEMS"] as $arItem):?>			
	
			<li><p><a href="<?=$arItem['URL']?>"><?=$arItem['NAME']?></a></p></li>
		
		<? endforeach;?>
	<ol>
</div>
<div class="col-md-12">&nbsp;</div>


	


