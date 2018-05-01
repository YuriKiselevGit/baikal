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
		<div id="accordion1" class="panel-group accordion">
			<?
			$arFilter = array('IBLOCK_ID' => $arResult["ID"], 'ID' => 24); 
			$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter);
			
			$num = 1;
			$active=true;
			while ($arSection = $rsSections->Fetch())
			{?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" <?if($num>1) echo 'class="collapsed"'?> href="#coll<?=$num?>"><i class="icon mdi mdi-chevron-down"></i> <?=$arSection['NAME']?></a></h4>
					</div>
					
					<div id="coll<?=$num?>" class="panel-collapse collapse <?if($num==1) echo 'in'?>">
						<div class="panel-body">
							<?
							foreach($arResult["ITEMS"] as $arItem):
								$arFile=CFile::GetById($arItem['PROPERTIES']['DOCFILE']['VALUE']);
								$fs = $arFile->Fetch();
							
								if($arItem['IBLOCK_SECTION_ID'] == $arSection['ID'])
								{
									?>			
									<div class="filer">
										<div class="filer_icon"><i class="far fa-2x fa-file-pdf"></i></div>
											<a href="<?echo CFile::GetPath($arItem['PROPERTIES']['DOCFILE']['VALUE'])?>"><?=$arItem['NAME']?> <span class="text-muted">(<?echo GetStrFileSize($fs['FILE_SIZE']);?>)</span></a>
									</div>
							<?  }
						
								
							endforeach;?>
						</div>
					</div>		
				</div>
		<?		$num = $num + 1;
			}?>
		</div>
	</div>
</div>
