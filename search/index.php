<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Руководство");
	?><div class="be-content">
	<div class="header-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Поиск</h1>
			</div>
		</div>
	</div>
	<div class="full-content main-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form action="#" class="form-horizontal">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-btn">
								<select name="type" class="selectpicker lbut">
									<option <?if($_REQUEST['type']=='Сотрудники') echo 'selected';?> >Сотрудники</option>
									<option <?if($_REQUEST['type']=='Сервисы') echo 'selected';?>>Сервисы</option>
									<option <?if($_REQUEST['type']=='Документы') echo 'selected';?>>Документы</option>
								</select>
							</div>
							<input name="s" type="text" class="form-control cbut" aria-label="..." placeholder="Поиск" value="<?=$_REQUEST['s']?>">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-lg btn-default rbut"><span class="mdi mdi mdi-search"></span></button>
							</div>
						</div>
						<!-- /input-группа -->
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			
		<?
			if($_REQUEST['type']=='Сотрудники') 
			{	
				$text ='%'.$_REQUEST['s'].'%';			
				$rsUsers =CUser::GetList($by = "ID", $order = "desc", array(
				'NAME' => $text,								
				), array('SELECT' => array('UF_*')));
				while($arItem = $rsUsers->GetNext())
				{
					$arSearchUser[$arItem['ID']] = $arItem;		
				}
				$rsUsers =CUser::GetList($by = "ID", $order = "desc", array(
				'WORK_POSITION' => $text,
				), array('SELECT' => array('UF_*')));			
				while($arItem = $rsUsers->GetNext())
				{
					$arSearchUser[$arItem['ID']] = $arItem;		
				}
				
				$c = count($arSearchUser);
				if($c == 1) $s = 'сотрудник'; 
				else if(($c >= 2) AND ($c <=4)) $s = 'сотрудника';
				else if(($c >= 5) AND ($c <=20)) $s = 'сотрудникков';
				else if($c == 21) $s = 'сотрудник';
				else if(($c >= 22) AND ($c <=24)) $s = 'сотрудника';
				else $s = 'сотрудников';	
				
			?>
			
				<? if($c==0) {?>
					<div class="col-md-10 col-md-offset-1">
						<h3>К сожалению, по Вашему запросу ничего не найдено</h3>
					</div>
					<?} else {?>
					<div class="col-md-10 col-md-offset-1">
						<h3>Найдено <?=count($arSearchUser)?> <?=$s?></h3>
					</div>
					<div class="col-md-12">
						&nbsp;
					</div>
					<div class="col-md-10 col-md-offset-1 sresults">
						<ol>
							<?foreach($arSearchUser as $key=>$tarUser):?>
							<li><img width="40px" src="<?echo CFile::GetPath($tarUser['PERSONAL_PHOTO'])?>" class="img-circle">
								<p>
									<a href="/company/employment/?uid=<?=$tarUser['ID']?>"><?echo $tarUser['NAME'].' '.$tarUser['LAST_NAME']?></a><br>
									<span class="small"><?echo $tarUser['WORK_POSITION']?></span>
								</p>
							</li>
							<?endforeach;?>
						</ol>
					</div>
					<div class="col-md-12">
						&nbsp;
					</div>
				<?}?>
			
			<?}?> <?	
			
			if($_REQUEST['type']=='Документы') 
			{
			$arrFilter = array('NAME' => '%'.$_REQUEST['s'].'%');?> 
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"search_doc",
				Array(
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
				"COMPONENT_TEMPLATE" => "documents",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(0=>"",1=>"",),
				"FILTER_NAME" => "arrFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "15",
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
				"PROPERTY_CODE" => array(0=>"",1=>"",),
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
			"STRICT_SECTION_CHECK" => "N"
			)
			);?> 
			<?}
			
			if($_REQUEST['type']=='Сервисы') 
			{
				$arrFilter = array('NAME' => '%'.$_REQUEST['s'].'%');?> 
				
				<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"search_service", 
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
		"COMPONENT_TEMPLATE" => "search_service",
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
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "CONTENTS",
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
			0 => "URL",
			1 => "",
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
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?> 
			<?}?>			
		</div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>									