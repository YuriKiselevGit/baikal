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
<?
		global $USER;
		$rsUser = CUser::GetByID($USER->GetID());
		$arUser = $rsUser->Fetch();	
	
	foreach($arResult["ITEMS"] as $arItem):	?>			
			<tr>
				<td><?=$arItem['PROPERTIES']['DATEBEGIN']['VALUE']?></td>
				<td><?=$arItem['PROPERTIES']['DATEEND']['VALUE']?></td>
				<td><?=$arItem['NAME']?></td>
				<?
				if($arItem['PROPERTIES']['STATUS']['VALUE'] == 'Утверждена') $class = 'text-success';
				if($arItem['PROPERTIES']['STATUS']['VALUE'] == 'На рассмотрении') $class = 'text-warning';
				if($arItem['PROPERTIES']['STATUS']['VALUE'] == 'Отклонена') $class = 'text-danger';
				
				?>
				<td>
				<?
				if(($arItem['PROPERTIES']['STATUS']['VALUE'] == 'На рассмотрении') AND ($arUser['ID'] == $_REQUEST['chiefid']))
					{?>				
						<button type="button" class="btn btn-sm btn-rounded btn-space btn-success"><i class="mdi mdi-check-circle"></i> Утвердить</button> 
						<button type="button" class="btn btn-sm btn-rounded btn-space btn-danger"><i class="mdi mdi-minus-circle"></i> Отклонить</button>
					<?} 
					else 
					{?>
						<span class="<?=$class?>"><?=$arItem['PROPERTIES']['STATUS']['VALUE']?></span>
					<?} ?>			
				<td>
			</tr>
<? endforeach;?>