<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	CJSCore::Init();
?>

<div class="be-wrapper be-login" style="background-color: #eee;">
	<?
		if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
		ShowMessage($arResult['ERROR_MESSAGE']);
	?>	
	<div class="be-content" style="margin-left: 0px !important; background-color: #eee;">
        <div class="main-content container-fluid">
			<div class="splash-container">
				<div class="panel panel-default">
					<div class="panel-heading"><img src="/assets/img/logo.png" alt="logo" class="logo-img"><span class="splash-description">Для доступа к порталу требуется авторизация</span></div>
					<div class="panel-body">
						<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
							<?if($arResult["BACKURL"] <> ''):?>
							<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
							<?endif?>
							
							<?foreach ($arResult["POST"] as $key => $value):?>
							<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
							<?endforeach?>
							<input type="hidden" name="AUTH_FORM" value="Y" />
							<input type="hidden" name="TYPE" value="AUTH" />
							<div class="form-group">
								<input id="username" name="USER_LOGIN" value="" type="text" placeholder="Логин" autocomplete="on" class="form-control" required="" data-parsley-minlength="5" placeholder="Логин должен быть не менее 6 символов">
								<script>
									BX.ready(function() {
										var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
										if (loginCookie)
										{
											var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
											var loginInput = form.elements["USER_LOGIN"];
											loginInput.value = loginCookie;
										}
									});
								</script>
								
							</div>
							<div class="form-group">
								<input id="password" name="USER_PASSWORD" type="password" autocomplete="off" placeholder="Пароль" required="" data-parsley-minlength="6" placeholder="Пароль должен быть не менее 6 символов" class="form-control">
								
								
								<?if($arResult["SECURE_AUTH"]):?>
								<span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
									<div class="bx-auth-secure-icon"></div>
								</span>
								<noscript>
									<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
										<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
									</span>
								</noscript>
								<script type="text/javascript">
									document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
								</script>
								<?endif?>
								
							</div>
							<div class="form-group row login-tools">
								<div class="col-xs-6 login-remember">
									<div class="be-checkbox">
										<input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
										<label for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>"><?echo GetMessage("AUTH_REMEMBER_SHORT")?></label>
									</div>
								</div>								
							</div>							
							<div class="form-group login-submit">
								<button type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" class="btn btn-primary btn-rounded btn-xl">Войти</button>
							</div>			
						</form>
					</div>
				</div>
				<div class="splash-footer"><span>Если у Вы забыли логин/пароль, пожалуйста, обратитесь к системному администратору</div>
				</div>
			</div>
		</div>
	</div>