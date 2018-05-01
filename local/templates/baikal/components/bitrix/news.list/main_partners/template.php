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
	<div class="lwl-carousel owl-theme owl-loaded slide-four">
        <div class="owl-stage-outer">
            <div class="owl-stage">
				<?foreach($arResult["ITEMS"] as $arItem):?>
        		<div class="owl-item loger text-center">                   	
					<a href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-loger"></a>
                </div>
				<?endforeach;?>				
            </div>			
        </div>
    </div>
    