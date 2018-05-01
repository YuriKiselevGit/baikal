<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Байкал Электроникс");
	$APPLICATION->SetTitle("Командировки");
?>
<div class="be-content">
	<div class="header-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Командировки</h1>            
			</div>
		</div>
	</div>
	<?
		if($_REQUEST['uid']=='')
		{		
			global $USER;
			$rsUser = CUser::GetByID($USER->GetID());
			$arUser = $rsUser->Fetch();
		}
		else
		{
			$rsUser = CUser::GetByID($_REQUEST['uid']);
			$arUser = $rsUser->Fetch();			
			
			
			if($arUser['UF_RUK']=='1') $_REQUEST['chiefid'] = $arUser['ID'];
			if($_REQUEST['uid'] == $_REQUEST['chiefid']) unset($_REQUEST['chiefid']);
		}		
				
		
		
		if($_REQUEST['action']=='add')
		{
			
			$arFields = array(
			"ACTIVE" => "Y", 
			"IBLOCK_ID" => 16,		    
			"NAME" => $_REQUEST['komka'],			
			"PROPERTY_VALUES" => array(
			"WORKER" =>$_REQUEST['uid'], 
			//"LEADER" =>$_REQUEST['chiefid'], 
			"DATEBEGIN" =>$_REQUEST['calend1'], 
			"DATEEND" =>$_REQUEST['calend2'], 
			"STATUS" =>Array("VALUE" => 14 )
			)
			);
			if (CModule::IncludeModule("iblock")):
				$oElement = new CIBlockElement();
				
				$idElement = $oElement->Add($arFields, false, false, true);
			endif;
			
			unset($_REQUEST['action']);
		}	
		
	?>		
	<div class="full-content main-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<p>Сотрудник: <strong><?echo $arUser['NAME'].' '.$arUser['LAST_NAME']?></strong></p>
				<!--<p>Командировки утверждает:<strong> <?//=$arUser['UF_CHIEF']?></strong></p>-->
			</div>
		</div>
		<div class="row">
			<form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
				<div class="form-group">
					<div class="col-md-2 col-md-offset-1">
						<div data-min-view="2" data-date-format="dd.mm.yyyy" data-today-highlight="true" class="input-group date datetimepicker">
							<input size="8" type="text" value="" name="calend1" class="form-control"><span class="input-group-addon btn btn-default"><i class="icon-th mdi mdi-calendar"></i></span>
						</div>
					</div>
					<div class="col-md-2">
						<div data-min-view="2" data-date-format="dd.mm.yyyy" data-today-highlight="true" class="input-group date datetimepicker">
							<input size="8" type="text" value="" name="calend2" class="form-control"><span class="input-group-addon btn btn-default"><i class="icon-th mdi mdi-calendar"></i></span>
						</div>
					</div>
					<div class="col-md-4">
                    	<button type="submit" class="btn btn-default btn-rounded">Показать</button>
						<input type="hidden" name="action" value="date">
                	</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default panel-table">
					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th width="15%">C</th>           
									<th width="15%">По</th>        
									<th>Комментарий</th>
									<th width="20%">Статус</th>
								</tr>
							</thead>
							<tbody>
								
								<?  if($_REQUEST['uid']=='') 
										$arFilter = Array("PROPERTY_WORKER"=>$arUser['ID']);
									else
										$arFilter = Array("PROPERTY_WORKER"=>$_REQUEST['uid']);
										
									if($_REQUEST['action']=='date') 	
									{	
										$arFilter['>=PROPERTY_DATEBEGIN'] = trim(CDatabase::CharToDateFunction($_REQUEST['calend1'], 'FULL'), "\'");
										$arFilter['<=PROPERTY_DATEEND'] = trim(CDatabase::CharToDateFunction($_REQUEST['calend2'], 'FULL'), "\'");
									}											
									?>								
								
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.list", 
									"comandirovki", 
									array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(
									0 => "",
									1 => "",
									),
									"FILTER_NAME" => "arFilter",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "16",
									"IBLOCK_TYPE" => "Company",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "N",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "30",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Новости",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array(
									0 => "DATEBEGIN",
									1 => "DATEEND",
									2 => "LEADER",
									3 => "WORKER",
									4 => "STATUS",
									5 => "",
									),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "SORT",
									"SORT_BY2" => "",
									"SORT_ORDER1" => "ASC",
									"SORT_ORDER2" => "",
									"STRICT_SECTION_CHECK" => "N",
									"COMPONENT_TEMPLATE" => "comandirovki"
									),
									false
								);?>	
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
        <div class="row" style="padding-bottom:30px;padding-top:30px">
            <div class="col-lg-12 text-center">
				<a href="#" data-toggle="modal" data-target="#form-bp1" type="button" class="btn btn-rounded btn-space btn-default">Создать командировку</a>
			</div>
		</div>
	</div>
	
</div>

<div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary" style="display: none;">
	<div class="modal-dialog custom-width">
        <div class="modal-content">
			<form action="#">
				
				
				
				<div class="modal-header">
					<button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
					<h3 class="modal-title">Создать заявку на командировку</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group form-inline">
						<label>c</label>
						<div data-date-format="dd.mm.yyyy HH:ii" data-minute-step="15" class="input-group datetimepicker chour">
							<input size="15" type="text" required="" data-parsley-length="[15,16]" placeholder="дд.мм.гггг чч:мм" value="" name="calend1" class="form-control"><span class="input-group-addon btn btn-default"><i class="icon-th mdi mdi-calendar"></i></span>
						</div>
						<label for="checker">по</label>
						<div data-date-format="dd.mm.yyyy HH:ii" data-minute-step="15" data-today-btn="linked" class="input-group datetimepicker chour2">
							<input size="15" type="text" required="" data-parsley-length="[15,16]" placeholder="дд.мм.гггг чч:мм" value="" name="calend2" class="form-control"><span class="input-group-addon btn btn-default"><i class="icon-th mdi mdi-calendar"></i></span>
						</div>
					</div>
					<div class="form-group form-inline">
                        <div class="be-radio inline">
							<input checked name="rad3" id="rad5" type="radio">
							<label for="rad5">Другая организация</label>
						</div>
                        <div class="be-radio inline">
							<input name="rad3" id="rad6" type="radio">
							<label for="rad6">Работа из дома/удаленно</label>
						</div>
					</div>
					<div class="form-group">
						<label>Цель, задачи и место проведения командировки</label>
					<textarea required data-parsley-minlength="20" placeholder="Введите текст длинною не менее 30 символов" value="" name="komka" class="form-control"></textarea>
					<input type="hidden" name="uid" value="<?=$arUser['ID']?>">
					<input type="hidden" name="chiefid" value="">
					<input type="hidden" name="action" value="add">
					</div>
					</div>
					<div class="modal-footer">
					<button type="reset" data-dismiss="modal" class="btn btn-default btn-lg btn-rounded md-close">Отменить</button>
					<button type="submit" class="btn btn-primary btn-lg btn-rounded md-close">Добавить</button>
					</div>
					</form>
					</div>
					</div>
					</div>
		
		
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>					