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
				{
					echo '<a href="/company/vacancy/?sec='.$arSection['ID'].'" class="btn btn-space btn-default btn-lg active">'.$arSection['NAME'].'</a>'; $active=false;
				} else
					echo '<a href="/company/vacancy/?sec='.$arSection['ID'].'" class="btn btn-space btn-default btn-lg ">'.$arSection['NAME'].'</a>';
			}?>
	</div>
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default panel-table">
            <div class="panel-body">
                <table class="table">
					<thead>
						<tr>
							<th class="number">№</th>                      
							<th>Наименование вакансии</th>
							<th>Офис</th>
							<th class="actions">
								<div class="be-checkbox be-checkbox-sm">
									
								</div>
							</th>
						</tr>
                    </thead>
                    <tbody>
						<?	$num = 2;
						
							foreach($arResult["ITEMS"] as $arItem):?>
								<tr>
									<td class="number"><?=$num?></td>
									<td><a href="#" data-toggle="modal" data-target="#form-bp<?=$num?>"><?=$arItem['NAME']?></a></td>									
									<td><?=$arItem['PROPERTIES']['OFFICE']['VALUE']?></td>
									<td class="actions">
									<div class="be-checkbox be-checkbox-sm">
										<!--<input id="check<?=$num?>" type="checkbox" onclick="vakancy(<?=$num?>);return false;">
										<label for="check<?=$num?>"></label>-->
									</div>
									</td>
								</tr>
								
							<?	$num = $num + 1;
								endforeach;?>
					</tbody>
				</table>
            </div>
        </div>
    </div>
</div>