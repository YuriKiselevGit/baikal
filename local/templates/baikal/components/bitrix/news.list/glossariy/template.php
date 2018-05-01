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
<div class="row">
	<!--
	<div class="col-md-10 col-md-offset-1">
	  <form action="#" class="form-horizontal">
		<div class="form-group">
			<div class="input-group">
			  <input type="text" class="form-control cbut2" aria-label="..." placeholder="Поиск">
					<div class="input-group-btn">
						<button type="button" class="btn btn-lg btn-default rbut"><span class="mdi mdi mdi-search"></span></button>
					</div>
			</div>
		</div>
		</form>
	</div>
	-->
	
    <div class="col-md-10 col-md-offset-1">
		<nav>
            <ul class="pagination">
				<li <?if($_REQUEST["sec"]=='') echo 'class="active"'?>><a href="/company/glossariy/">Все</a></li>
				<?	$arFilter = array('IBLOCK_ID' => $arResult["ID"], 'DEPTH_LEVEL' => 1);
					$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter);

					while ($arSection = $rsSections->Fetch())
					{?>
						<li <?if($_REQUEST["sec"]==$arSection['ID']) echo 'class="active"'?>><a href="/company/glossariy/?sec=<?=$arSection['ID']?>"><?=$arSection['NAME']?></a></li>
					<?}?>
			</ul>
        </nav>
	</div>
	
	<div class="row">
		<? foreach($arResult["ITEMS"] as $arItem):?>
			<div class="col-md-10 col-md-offset-1">
				<p><strong><?=$arItem['NAME']?></strong> — <?=$arItem["DETAIL_TEXT"]?></p>
			</div>
			<div class="col-md-12">&nbsp;</div>
		<?endforeach;?>
	</div>
</div>