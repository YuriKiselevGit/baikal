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
<div class="header-content container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="newblock-data">
				<?=date_create($arItem['ACTIVE_FROM'])->Format('d.m.Y');?>
			</div>
			<div class="newblock-thm">
				<?
					$db_old_groups = CIBlockElement::GetElementGroups($arItem['ID'], false);
					while($ar_group = $db_old_groups->Fetch()) { echo $ar_group["NAME"];}
				?>	
			</div>			
			<div class="newblock-head"><h1><?=$arItem['NAME']?></h1></div>
		</div>
	</div>
</div>
<div class="full-content fullblock-content container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center" style="padding-bottom:50px">
			<img height="110px" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img">
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<p><?echo $arItem["PREVIEW_TEXT"];?>
			</p>
			<p><?echo $arItem["DETAIL_TEXT"];?>
			</p>					
			<a href="/company/news/"><span class="icon mdi mdi-long-arrow-left"></span> назад</a>
		</div>
	</div>
</div>
<?endforeach;?>		