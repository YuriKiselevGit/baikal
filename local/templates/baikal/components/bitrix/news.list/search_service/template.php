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
$c = count($arResult["ITEMS"]);
if($c == 1) $s = 'сервис'; 
else if(($c >= 2) AND ($c <=4)) $s = 'сервиса';
else if(($c >= 5) AND ($c <=20)) $s = 'сервисов';
else if($c == 21) $s = 'сервис';
else if(($c >= 22) AND ($c <=24)) $s = 'сервиса';
else $s = 'сервисов';

?>

<div class="col-md-10 col-md-offset-1">
    <h3>Найдено <?=count($arResult["ITEMS"])?> <?=$s?></h3>
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-10 col-md-offset-1 sresults">
	<ol>
		<?foreach($arResult["ITEMS"] as $arItem):?>			
	
			<li><p><a href="<?=$arItem['URL']?>"><?=$arItem['NAME']?></a></p></li>
		
		<? endforeach;?>
	<ol>
</div>
<div class="col-md-12">&nbsp;</div>


	


