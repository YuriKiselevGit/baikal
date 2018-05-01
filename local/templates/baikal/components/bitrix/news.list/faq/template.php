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
	<div class="col-md-10 col-md-offset-1">
		<?
			$arFilter = array('IBLOCK_ID' => $arResult["ID"], 'DEPTH_LEVEL' => 1);
			$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter);
						
			if($_REQUEST['sec']=='') $activsection = 0; else $activsection = $_REQUEST['sec'];
					
			while ($arSection = $rsSections->Fetch())
			{
				if($activsection == 0) $activsection = $arSection['ID'];
				
				if($activsection == $arSection['ID']) 
					echo '<a href="/company/faq/?sec='.$arSection['ID'].'" class="btn btn-space btn-default btn-lg active">'.$arSection['NAME'].'</a>'; 
				else
					echo '<a href="/company/faq/?sec='.$arSection['ID'].'" class="btn btn-space btn-default btn-lg ">'.$arSection['NAME'].'</a>';
			}?>
	</div>
</div>

<div class="row" style="margin-top:30px;">
	<div class="col-md-10 col-md-offset-1">
		<div id="accordion1" class="panel-group accordion">
			<?	$num = 1;
			foreach($arResult["ITEMS"] as $arItem):?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#coll<?=$num?>"><i class="icon mdi mdi-chevron-down"></i> <?=$arItem['NAME']?></a></h4>
					</div>
					
					<div id="coll<?=$num?>" class="panel-collapse collapse <?if($num==1) echo 'in'?>">
						<div class="panel-body">
							<p><?=$arItem["DETAIL_TEXT"]?></p>
						</div>
					</div>			
				</div>	
				<?	$num = $num + 1;
			endforeach;?>
		</div>
	</div>
</div>
