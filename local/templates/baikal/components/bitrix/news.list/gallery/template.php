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


<?	$arFilter = array('IBLOCK_ID' => $arResult["ID"], 'DEPTH_LEVEL' => 1);
	$rsSections = CIBlockSection::GetList(array('NAME' => 'DESC'), $arFilter);

	while ($arSection = $rsSections->Fetch())
	{
		$arSections[$arSection['ID']] = $arSection;
	}
?>	
	
	<?	$arFilter = array('IBLOCK_ID' => $arResult["ID"], 'DEPTH_LEVEL' => 1);
		$rsSections = CIBlockSection::GetList(array('NAME' => 'DESC'), $arFilter);
	?>
					
	<?if($_REQUEST['year']=='') $_REQUEST["year"] = "2018";?>
					
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="row">
			<nav>
				<ul class="pagination">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true" class="mdi mdi-chevron-left"></span></a></li>
					<?
					foreach($arSections as $arSection)
						{   if($_REQUEST["year"]==$arSection['NAME']) $SEC_ID = $arSection['ID'];
							?>
							<li <?if($_REQUEST["year"]==$arSection['NAME']) echo 'class="active"'?>><a href="/company/gallery/?year=<?=$arSection['NAME']?>"><?=$arSection['NAME']?></a></li>
						<?}?>
					<li><a href="#" aria-label="Next"><span aria-hidden="true" class="mdi mdi-chevron-right"></span></a></li>
				</ul>
			</nav>
		</div>					

		
	<?	$arFilter = array('IBLOCK_ID' => $arResult["ID"], 'SECTION_ID' => $SEC_ID);
		$rsSections = CIBlockSection::GetList(array('NAME' => 'DESC'), $arFilter);
		
	while ($arSection = $rsSections->Fetch())
	{
		
		//pre($arSection);?>
		<div class="row">
			<div class="col-md-6">
				<h3><?=$arSection['NAME']?></h3>  
            </div>
        </div>		
		<div class="row">
		<?	$num = 1;
			foreach($arResult["ITEMS"] as $arItem):?>
       			<div class="col-md-3 portfo">
					<a href="<?=$arItem['DETAIL_PICTURE']['SRC']?>" class="image-popup" title="Название картинки"><img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" class="img-responsive"></a>
       			</div>
		<?	$num = $num + 1;
			endforeach;?>
		</div>
		
	<?	}	?>	
	
	
		<div class="row">
			<nav>
			<ul class="pagination">
				<li><a href="#" aria-label="Previous"><span aria-hidden="true" class="mdi mdi-chevron-left"></span></a></li>
				<?							
				foreach($arSections as $arSection)				
					{   
						?>
						<li <?if($_REQUEST["year"]==$arSection['NAME']) echo 'class="active"'?>><a href="/company/gallery/?year=<?=$arSection['NAME']?>"><?=$arSection['NAME']?></a></li>
					<?}?>
				<li><a href="#" aria-label="Next"><span aria-hidden="true" class="mdi mdi-chevron-right"></span></a></li>
			</ul>
			</nav>
		</div>		
</div>
</div>