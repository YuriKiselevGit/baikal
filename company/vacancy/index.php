<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Байкал Электроникс");
	$APPLICATION->SetTitle("Вакансии");
?>
<div class="be-content">
	<div class="header-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Вакансии</h1>            
			</div>
		</div>
	</div>
	<div class="full-content main-content container-fluid">
		<?
			if($_REQUEST['sec']!='') $arFilter = Array("SECTION_ID"=>$_REQUEST['sec']);	
		?>		
		
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"vacancy", 
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
			"IBLOCK_ID" => "13",
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
			0 => "OFFICE",
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
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "vacancy"
			),
			false
		);?>					
		
		
		
		
		
        <div class="row" style="padding-bottom:30px;padding-top:30px">
			<p style="text-align:center;">Выберите вакансию для просмотра подробностей</p>
            <?/*<div class="col-lg-12 text-center">
				<a href="#" data-toggle="modal" data-target="#form-bp1" type="button" class="btn btn-rounded btn-space btn-default">Пригласить друга</a>
				</div>
			*/?>
		</div>
	</div>
	



<?$APPLICATION->IncludeComponent("bitrix:news.list", "vacancy_form", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
	"DISPLAY_NAME" => "Y",	// Выводить название элемента
	"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
	"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"FIELD_CODE" => array(	// Поля
	0 => "",
	1 => "",
	),
	"FILTER_NAME" => "arFilter",	// Фильтр
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
	"IBLOCK_ID" => "13",	// Код информационного блока
	"IBLOCK_TYPE" => "Company",	// Тип информационного блока (используется только для проверки)
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
	"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
	"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	"NEWS_COUNT" => "30",	// Количество новостей на странице
	"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
	"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
	"PAGER_TITLE" => "Новости",	// Название категорий
	"PARENT_SECTION" => "",	// ID раздела
	"PARENT_SECTION_CODE" => "",	// Код раздела
	"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
	"PROPERTY_CODE" => array(	// Свойства
	0 => "OFFICE",
	1 => "",
	),
	"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
	"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
	"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
	"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
	"SET_STATUS_404" => "N",	// Устанавливать статус 404
	"SET_TITLE" => "N",	// Устанавливать заголовок страницы
	"SHOW_404" => "N",	// Показ специальной страницы
	"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
	"SORT_BY2" => "",	// Поле для второй сортировки новостей
	"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
	"SORT_ORDER2" => "",	// Направление для второй сортировки новостей
	"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	"COMPONENT_TEMPLATE" => "vacancy"
	),
	false
);?>		



<!-- форма отправки -->
<div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary" style="display: none;">
	<div class="modal-dialog custom-width">
		<form id="form_email">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
					<h3 class="modal-title">Пригласить друга на вакансию</h3>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Email друга</label>
						<input name="email" type="email" required="" parsley-type="email" placeholder="ivanov@baikal.com" class="form-control">
					</div>
					<div class="form-group">
						<label>Имя друга</label>
						<input name="frend" type="text" required="" placeholder="например, Андрей Малафеев" class="form-control">
					</div>
					<div class="form-group">
						<label>Сообщение</label>
						<textarea required name="message" class="form-control"></textarea>
						<input type="hidden" id="v_name" name="name_vakansiya" value="1">
						<input type="hidden" id="v_desc" name="descr_vakansiya" value="2">
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<div class="be-checkbox">
								<input id="checker" type="checkbox">
								<label for="checker">Прислать мне уведомление о получении другом сообщения</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					
					<button type="submit" onclick="send_email();"  class="btn btn-primary btn-lg btn-rounded md-close">Отправить</button>
					<button type="reset" data-dismiss="modal" class="btn btn-default btn-lg btn-rounded md-close">Закрыть</button>
					<!--<button type="submit" data-dismiss="modal" data-toggle="modal" data-target="#md-success" class="btn btn-primary btn-lg btn-rounded md-close">Успех</button>-->
					<!--<button type="submit" data-dismiss="modal" data-toggle="modal" data-target="#md-error" class="btn btn-primary btn-lg btn-rounded md-close">Ошибка</button>-->
				</div>
			</div>
		</form>
	</div>
</div>

<!-- успешная отправка -->
<div id="md-success" tabindex="-1" role="dialog" class="modal fade">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
					<h3>Спасибо</h3>
					<p>Ваша заявка успешно отправлена</p>
					<div class="xs-mt-50">
              			<button type="reset" data-dismiss="modal" class="btn btn-default btn-lg btn-rounded md-close">Закрыть</button>
					</div>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!-- ошибка отправк -->
<div id="md-error" tabindex="-1" role="dialog" class="modal fade">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
					<h3>Ошибка</h3>
					<p>Что-то пошло не так, заявка не отправлена.</p>
					<p>Попробуйте еще раз через некоторое время.</p>
					<div class="xs-mt-50">
              			<button type="reset" data-dismiss="modal" class="btn btn-default btn-lg btn-rounded md-close">Закрыть</button>
					</div>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>


<script>
	function send_email() {
		var form = $('#form_email').serialize();
		$.get("/ajax/send.php", form, function(data) {
			
		});
		$('#form-bp1').modal('hide');
		$('#md-success').modal('show');
		return true;
	}
	
	function vakancy(cod) {
		var vtext = $('#text-form-bp'+cod);
		var vname = $('#name-form-bp'+cod);
		
		var v_name = $('#v_name');
		var v_desc = $('#v_desc');
		
		v_name[0].value = vname[0].value
		v_desc[0].value = vtext[0].value;
	}	
</script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>