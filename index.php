<?	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
	$APPLICATION->SetPageProperty("TITLE", "Байкал Электроникс");
	$APPLICATION->SetTitle("Байкал Электроникс");
?>
<div class="be-content">
	<div class="main-content main-finder container-fluid">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="/search/" class="form-horizontal">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-btn">
								<select name="type" class="selectpicker lbut">
									<option>Сотрудники</option>
									<option>Сервисы</option>
									<option>Документы</option>
								</select>
							</div>
							<input type="text" class="form-control cbut" aria-label="..." placeholder="Поиск">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-lg btn-default rbut"><span class="mdi mdi mdi-search"></span></button>
							</div>
							</div>
						<!-- /input-группа -->
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-lg-4 text-center main-peoples">
				<div class="backover">
					<h5><a href="/company/spravochnik/">Сотрудники</a></h5>
				</div>
			</div>
			<div class="col-lg-4 text-center main-services">
				<div class="backover">
					<h5><a href="/company/services/">Сервисы</a></h5>
				</div>
			</div>
			<div class="col-lg-4 text-center main-docs">
				<div class="backover">
					<h5><a href="/company/documents/">Документы</a></h5>
				</div>
			</div>
			</div>
		</div>
		<div class="main-content container-fluid">
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list", 
						"block_link", 
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
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "4",
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
								0 => "ICON",
								1 => "",
							),
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_BY2" => "SORT",
							"SORT_ORDER1" => "DESC",
							"SORT_ORDER2" => "ASC",
							"STRICT_SECTION_CHECK" => "N",
							"COMPONENT_TEMPLATE" => "block_link"
						),
						false
					);?>		
		</div>
		<div class="right-content container-fluid">
			<div class="row">
				<div class="col-md-12 section-head text-center">
					<h2>О компании</h2>
				</div>
				<div class="col-md-6 col-md-offset-3 desc-head text-center">
					<p>
						Far far away, behind the word mountains, far from the countries Vokalia and Consonantia there live the blind texts. Separated they
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<?
						$filter = Array("GROUPS_ID"=> Array(6));
						$rsUsers = CUser::GetList(($by="id"), ($order="asc"), $filter);						
					?>					
					<div class="owl-carousel owl-theme owl-loaded slide-one">
						<div class="owl-stage-outer">
							<div class="owl-stage">
							<?
							while($arItem = $rsUsers->GetNext())
							{	?>
								<div class="owl-item rukman">
									<div class="rukman-head">
										<img src="<?echo CFile::GetPath($arItem['PERSONAL_PHOTO'])?>" class="img-responsive">
										<h6><?echo $arItem['NAME'].' '.$arItem['LAST_NAME']?></h6>
										<p>
											<?echo $arItem['WORK_POSITION']?>
										</p>
									</div>
									<p><?echo html_entity_decode($arItem['WORK_PROFILE']);?></p>
								</div>								
							<?}?>	
								
							</div>
						</div>
					</div>				
				</div>
				<div class="col-md-6">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file", 
						"AREA_FILE_SUFFIX" => "inc", 
						"AREA_FILE_RECURSIVE" => "Y", 
						"PATH" => "/local/templates/baikal/include/about.php" 
						)
					);?>				
				</div>
			</div>
		</div>
		<div class="main-content container-fluid" style="background-color:#f8f8f8">
			<div class="row">
				<div class="col-md-12 section-head text-center">
					<h2>О компании</h2>
				</div>
				<div class="col-md-6 col-md-offset-3 desc-head text-center">
					<p>
						Far far away, behind the word mountains, far from the countries Vokalia and Consonantia there live the blind texts. Separated they
					</p>
				</div>
			</div>		
			
					<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"block_link2", 
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
		"FILTER_NAME" => "",
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
			0 => "",
			1 => "ICON",
			2 => "",
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
		"COMPONENT_TEMPLATE" => "block_link2"
	),
	false
);?>
		</div>
		<div class="count-content container-fluid">
			<div class="row">
				<div class="col-lg-3 text-center">
					<div class="widget widget-tile">
						<div class="data-info">
							<div class="value">
								<span class="timer" data-from="0" data-to="25000" data-speed="3000" data-refresh-interval="33" decimals="3"></span>
							</div>
							<div class="desc">
								произведено процессоров
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-center">
					<div class="widget widget-tile">
						<div class="data-info">
							<div class="value">
								<span class="timer" data-from="0" data-to="895" data-speed="5000"></span>
							</div>
							<div class="desc">
								заключено договоров
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-center">
					<div class="widget widget-tile">
						<div class="data-info">
							<div class="value">
								<span class="timer" data-from="0" data-to="95" data-speed="7000"></span>%
							</div>
							<div class="desc">
								производительность
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-center">
					<div class="widget widget-tile">
						<div class="data-info">
							<div class="value">
								<span class="timer" data-from="0" data-to="16" data-speed="9000"></span>
							</div>
							<div class="desc">
								открытые вакансии
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-cite container-fluid">
			<div class="row">
				<div class="col-md-12 section-head text-center">
					<h2>Цитата</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list", 
						"citations", 
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
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "3",
						"IBLOCK_TYPE" => "CONTENTS",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "N",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "5",
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
						0 => "AUTHOR",
						1 => "",
						),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "DESC",
						"SORT_ORDER2" => "ASC",
						"STRICT_SECTION_CHECK" => "N",
						"COMPONENT_TEMPLATE" => "citations"
						),
						false
					);?>					
				</div>
			</div>
		</div>
		<div class="right-content container-fluid">
			<div class="row">
				<div class="col-md-12 section-head text-center">
					<h2>Новости</h2>
				</div>
				<div class="col-md-6 col-md-offset-3 desc-head text-center">
					<p>
						Far far away, behind the word mountains, far from the countries Vokalia and Consonantia there live the blind texts. Separated they
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "main_news", Array(
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
						"DISPLAY_BOTTOM_PAGER" => "Y",	
						"DISPLAY_DATE" => "Y",	
						"DISPLAY_NAME" => "Y",	
						"DISPLAY_PICTURE" => "Y",	
						"DISPLAY_PREVIEW_TEXT" => "Y",	
						"DISPLAY_TOP_PAGER" => "N",	
						"FIELD_CODE" => array(	
						0 => "",
						1 => "",
						),
						"FILTER_NAME" => "",	
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",	
						"IBLOCK_ID" => "1",	
						"IBLOCK_TYPE" => "NEWS",	
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	
						"INCLUDE_SUBSECTIONS" => "N",	
						"MESSAGE_404" => "",	
						"NEWS_COUNT" => "5",	
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
						0 => "",
						1 => "",
						),
						"SET_BROWSER_TITLE" => "N",	
						"SET_LAST_MODIFIED" => "N",	
						"SET_META_DESCRIPTION" => "N",	
						"SET_META_KEYWORDS" => "N",	
						"SET_STATUS_404" => "N",	
						"SET_TITLE" => "N",	
						"SHOW_404" => "N",	
						"SORT_BY1" => "ACTIVE_FROM",	
						"SORT_BY2" => "SORT",	
						"SORT_ORDER1" => "DESC",	
						"SORT_ORDER2" => "ASC",	
						"STRICT_SECTION_CHECK" => "N",	
						),
						false
					);?>
				</div>
				<div class="row" style="padding-bottom:30px;padding-top:30px">
					<div class="col-lg-12 text-center">
						<a href="/company/news/" class="btn btn-rounded btn-space btn-primary">Все новости</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main-content container-fluid" style="padding-bottom:50px;background-color:#f8f8f8">
			<div class="row">
				<div class="col-md-12 loger-head text-center">
					<h2>Наши партнеры</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_partners", 
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
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "partners",
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
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_partners"
	),
	false
);?>				
				</div>
			</div>
		</div>
		
	<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>									