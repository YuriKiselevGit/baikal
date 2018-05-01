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
<ol class="topnews">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<li><a href="/company/new/?news=<?=$arItem['ID']?>"><?=$arItem['NAME']?></a></li>
	<?endforeach;?>
</ol>