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
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="col-md-4 newblock">
			<div class="newblock-img">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-thumb">
			</div>
			<div class="newblock-data">				
				<?=date_create($arItem['ACTIVE_FROM'])->Format('d.m.Y');?>
			</div>
			<div class="newblock-thm">
			<?
					$db_old_groups = CIBlockElement::GetElementGroups($arItem['ID'], false);
					while($ar_group = $db_old_groups->Fetch()) { echo '<a href="/company/new/?news='.$arItem['ID'].'">'.$ar_group["NAME"].'</a>';}
			?>								
			</div>
			<h4><a href="/company/new/?news=<?=$arItem['ID']?>"><?echo $arItem["NAME"]?></a></h4>
			<p><?echo $arItem["PREVIEW_TEXT"];?></p>
		</div>	
	<?endforeach;?>