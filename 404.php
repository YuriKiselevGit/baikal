<?
	include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
	
	CHTTP::SetStatus("404 Not Found");
	@define("ERROR_404","Y");
	
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	
	$APPLICATION->SetTitle("404 Not Found");
	?><div class="be-content"><?
		//$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
		//	"LEVEL"	=>	"3",
		//	"COL_NUM"	=>	"2",
		//	"SHOW_DESCRIPTION"	=>	"Y",
		//	"SET_TITLE"	=>	"Y",
		//	"CACHE_TIME"	=>	"36000000"
		//	)
		//);
	?>
	
        <div class="full-content main-content container-fluid" style="padding-top:200px;padding-bottom:200px;">
        	<div class="row">
            	<div class="col-md-12 text-center">
					<img src="/assets/img/404.png" class="img">
					<h2>Что-то пошло не так...</h2>
					<p>К сожалению, запрашиваемся страница не найдена.<p>
						<p>Попробуйте вернуться на <a href="/">главную</a><p>
				</div>
			</div>
		</div>        
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>					