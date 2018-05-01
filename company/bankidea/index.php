<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetPageProperty("title", "Байкал Электроникс");
	$APPLICATION->SetTitle("Банк идей");
?>
<div class="be-content">
	<div class="header-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Банк идей</h1>
			</div>
		</div>
	</div>
	<?/*	
	<div class="full-content main-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h3>Предложи свою идею</h3>
			</div>
		</div>
	
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<form id="form_ideya" action="#">
					<div class="form-group">
						<label>Описание идеи</label> <textarea required="" data-parsley-minlength="20" placeholder="Введите текст длинною не менее 30 символов" value="" name="bankidea" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<span class="file-input btn-file"> <span class="mdi mdi-attachment-alt text-muted"></span> Прикрепить файл <input type="file" multiple=""> </span>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-rounded btn-space btn-primary">Предложить идею</button>
						<!--<button type="button" data-toggle="modal" data-target="#md-success" class="btn btn-rounded btn-space btn-primary">[!]</button>
						<button type="reset" class="btn btn-rounded btn-space btn-default">Сбросить</button>-->
					</div>
				</form>
			</div>
		</div>
	
	</div>
	*/?>	
	
<?$APPLICATION->IncludeComponent(
	"bitrix:form", 
	".default", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "Y",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"NOT_SHOW_FILTER" => array(
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(
			0 => "",
			1 => "",
		),
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_EDIT_PAGE" => "Y",
		"SHOW_LIST_PAGE" => "Y",
		"SHOW_STATUS" => "Y",
		"SHOW_VIEW_PAGE" => "Y",
		"START_PAGE" => "new",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"WEB_FORM_ID" => "1",
		"COMPONENT_TEMPLATE" => ".default",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>	
	
	
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
					<div class="text-primary">
						<span class="modal-main-icon mdi mdi-check"></span>
					</div>
					<h3>Спасибо</h3>
					<p>
						Ваша заявка успешно отправлена
					</p>
					<div class="xs-mt-50">
						<button type="reset" data-dismiss="modal" class="btn btn-default btn-lg btn-rounded md-close">Закрыть</button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
			</div>
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
					<div class="text-danger">
						<span class="modal-main-icon mdi mdi-close-circle-o"></span>
					</div>
					<h3>Ошибка</h3>
					<p>
						Что-то пошло не так, заявка не отправлена.
					</p>
					<p>
						Попробуйте еще раз через некоторое время.
					</p>
					<div class="xs-mt-50">
						<button type="reset" data-dismiss="modal" class="btn btn-default btn-lg btn-rounded md-close">Закрыть</button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
	
	
	
</div>
<script>
	function send_email() {
		var form = $('#form_ideya').serialize();
		$.get("/ajax/sendideya.php", form, function(data) {
			
		});
		$('#md-success').modal('show');
		return true;
	}	  
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>