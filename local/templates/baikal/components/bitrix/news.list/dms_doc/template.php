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
	$section = 1;
	$num_elm = 0;
	foreach($arResult["ITEMS"] as $arItem):?>
	<?  $num_elm = $num_elm + 1;		
		if($num_elm == ($section*4-3)) echo '<div class="col-md-6">';
	?>
			<div class="filer">
				<div class="filer_icon"><i class="far fa-2x <?=$arItem['PROPERTIES']['TYPE']['VALUE']?>"></i></div>
				<a href="#"><?=$arItem['NAME']?> <span class="text-muted">(<?=$arItem['PROPERTIES']['SIZE']['VALUE']?>)</span></a>
			</div>		
	<?
		if($num_elm == ($section*4)) {echo '</div>'; $section = $section + 1;}
	?>	
<?endforeach;?>
<?
	if($num_elm != (($section-1)*4)) echo '</div>';
?>

