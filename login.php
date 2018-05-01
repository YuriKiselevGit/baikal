<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="assets/img/logo-fav.png">
		<title>Байкал Электроникс - корпоративный портал</title>
		<link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
	</head>
	<body class="be-splash-screen">
		<div class="be-wrapper be-login">
			<div class="be-content">
				<div class="main-content container-fluid">
					<div class="splash-container">
						<div class="panel panel-default">
							<div class="panel-heading">
								<img src="assets/img/logo.png" alt="logo" class="logo-img"><span class="splash-description">Для доступа к порталу требуется авторизация</span></div>
							<div class="panel-body">
								<form action="index.html" method="get">
									<div class="form-group">
										<input id="username" type="text" placeholder="Логин" autocomplete="on" class="form-control" required="" data-parsley-minlength="5" placeholder="Логин должен быть не менее 6 символов">
									</div>
									<div class="form-group">
										<input id="password" type="password" placeholder="Пароль" required="" data-parsley-minlength="6" placeholder="Пароль должен быть не менее 6 символов" class="form-control">
									</div>
									<div class="form-group row login-tools">
										<div class="col-xs-6 login-remember">
											<div class="be-checkbox">
												<input type="checkbox" id="remember">
												<label for="remember">Запомнить меня</label>
											</div>
										</div>
										<!-- <div class="col-xs-6 login-forgot-password"><a href="#">Забыли пароль?</a></div> -->
									</div>
									<div class="form-group login-submit">
										<button type="submit" class="btn btn-primary btn-rounded btn-xl">Войти</button>
									</div>
								</form>
							</div>
						</div>
						<div class="splash-footer"><span>Если у Вы забыли логин/пароль, пожалуйста, обратитесь к системному администратору</div>
						</div>
					</div>
				</div>
			</div>
			<script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
			<script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
			<script src="/assets/js/main.js" type="text/javascript"></script>
			<script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
			<script src="/assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
			<script src="/assets/js/app-form-elements.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					//initialize the javascript
					App.init();
					$('form').parsley();
				});
				
			</script>
		</body>
	</html>	