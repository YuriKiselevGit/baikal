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
<?	$num = 2;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<!-- вакансия -->
    <div id="form-bp<?=$num?>" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary" style="display: none;">
      <div class="modal-dialog custom-width">
		  <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h4 class="modal-title"><?=$arItem['NAME']?></h4>
          </div>
          <div class="modal-body">
			<?=$arItem['DETAIL_TEXT']?>
          </div>
		  
		  <input type="hidden" id="text-form-bp<?=$num?>" value="<?=$arItem['DETAIL_TEXT']?>">
		  <input type="hidden" id="name-form-bp<?=$num?>" value="<?=$arItem['NAME']?>">
		  
		  
          <div class="modal-footer">
            <button onclick="vakancy(<?=$num?>);" type="button" data-dismiss="modal" data-toggle="modal" data-target="#form-bp1" class="btn btn-primary btn-lg btn-rounded md-close">Пригласить друга</button>
            <button type="button" data-dismiss="modal" class="btn btn-default btn-lg btn-rounded md-close">Закрыть</button>
          </div>
        </div>
      </div>
    </div>
<?$num = $num + 1;?>	
<?endforeach;?>
