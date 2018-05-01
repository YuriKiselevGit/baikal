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
	<div class="owl-carousel owl-theme owl-loaded slide-three">
        <div class="owl-stage-outer">
            <div class="owl-stage">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
        		<div class="owl-item newblock">
                   	<div class="newblock-img">
                       	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img	
						class="img-thumb"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"						
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"						
						/></a>
                    </div>
                    <div class="newblock-data">
                        <p><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
                    </div>
                    <div class="newblock-thm">
                        <p>
							<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
							<?
								$db_old_groups = CIBlockElement::GetElementGroups($arItem['ID'], false);
								while($ar_group = $db_old_groups->Fetch()) { echo $ar_group["NAME"]; }
							?>
							</a>
						</p>
                    </div>
                    <h4><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h4>
                    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                </div>
			<?endforeach;?>				
            </div>
        </div>
    </div>