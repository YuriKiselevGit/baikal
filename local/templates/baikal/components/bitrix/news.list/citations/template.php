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

<div class="owl-carousel cwl-theme owl-loaded slide-two">
	<div class="owl-stage-outer">
		<div class="owl-stage">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="owl-item cite text-center">
					<p>
						<?=$arItem["NAME"]?>
					</p>
					<div class="citesign">
						“
					</div>
					<div class="citeimg">
						<?
							$rsUser = CUser::GetByID($arItem['PROPERTIES']['AUTHOR']['VALUE']);
							$arUser = $rsUser->Fetch();
						?>
						<img src="<?echo CFile::GetPath($arUser['PERSONAL_PHOTO'])?>" class="img-circle">
					</div>
					<div class="cite-head">
						<h6><?echo $arUser['NAME']." ".$arUser['LAST_NAME']?></h6>
						<p>
							<?echo $arUser['WORK_POSITION']?>
						</p>
					</div>
				</div>	
			<?endforeach;?>
		</div>
	</div>
</div>



								
