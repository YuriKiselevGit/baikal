<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
		<meta name="author" content=""> 
		
		<?$APPLICATION->ShowHead();?>
		<title>Байкал Электроникс - корпоративный портал></title>
		
		<link rel="shortcut icon" href="/assets/img/logo-fav.png">
		<link rel="stylesheet" type="text/css" href="/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" type="text/css" href="/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
		
		<link rel="stylesheet" type="text/css" href="/assets/lib/datatables/css/dataTables.bootstrap.min.css"/>
		
		<link rel="stylesheet" type="text/css" href="/assets/lib/select2/css/select2.min.css"/>
		
		<link rel="stylesheet" type="text/css" href="/assets/lib/jquery.magnific-popup/magnific-popup.css"/>
		
		<link rel="stylesheet" type="text/css" href="/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/lib/bootstrap-slider/css/bootstrap-slider.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/lib/bootstrap-select/css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/lib/owlcarousel/assets/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="/assets/lib/owlcarousel/assets/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/lib/fontawesome/css/fontawesome-all.css"/>
	</head>	
	
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<?
			global $USER;
			
			if ((!$USER->IsAuthorized()) AND ($APPLICATION->GetCurPage() != '/login/')) LocalRedirect('/login/', false, "301 Moved permanently"); 
			
			if ($USER->IsAuthorized()) 
			{					
				$rsUser = CUser::GetByID($USER->GetID());
				$arUser = $rsUser->Fetch();
			?>			
		
		<div class="be-wrapper be-fixed-sidebar">
			<nav class="navbar navbar-default navbar-fixed-top be-top-header">
				<div class="container-fluid">
					<div class="be-right-navbar">
							<ul class="nav navbar-nav navbar-right be-user-nav">
								<li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img alt="Avatar" src="<?if($arUser['PERSONAL_PHOTO']=='') echo '/assets/img/user.png'; else  echo CFile::GetPath($arUser['PERSONAL_PHOTO']);?>"><span class="user-name">Николай Левский</span></a>
									<ul role="menu" class="dropdown-menu">
										<li>
											<div class="user-info">
												<div class="user-name">
													<?echo $arUser['NAME'].' '.$arUser['LAST_NAME']?>
												</div>
											</div>
										</li>
										<li><a href="/company/employment/?uid=<?=$arUser['ID']?>"><span class="icon mdi mdi-account-circle"></span> Профиль</a></li>
										<!--<li><a href="#"><span class="icon mdi mdi-settings"></span> Настройки</a></li>-->
										<li><a href="/?logout=yes"><span class="icon mdi mdi-power"></span> Выход</a></li>
									</ul>
								</li>
							</ul>						
						<ul class="nav navbar-nav navbar-right be-icons-nav">
							<li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
								<ul class="dropdown-menu be-notifications">
									<li>
										<div class="title">
											Уведомления<span class="badge">3</span>
										</div>
										<div class="list">
											<div class="be-scroller">
												<div class="content">
													<ul>
														<li class="notification notification-unread"><a href="#">
															<div class="image">
																<img alt="Avatar" src="/assets/img/hrenov.jpg">
															</div>
															<div class="notification-info">
																<div class="text">
																	<span class="user-name">Григорий Хренов</span> резервирование переговорной №2 на 12:00
																</div>
															</div>
														</a></li>
														<li class="notification"><a href="#">
															<div class="image">
																<img alt="Avatar" src="/assets/img/doroshenko.jpg">
															</div>
															<div class="notification-info">
																<div class="text">
																	<span class="user-name">Елена Дорошенко</span> оставил сообщение
																</div>
															</div>
														</a></li>
														<li class="notification"><a href="#">
															<div class="image">
																<img alt="Avatar" src="/assets/img/osipenko.jpg">
															</div>
															<div class="notification-info">
																<div class="text">
																	<span class="user-name">Павел Осипенко</span> оставил сообщение
																</div>
															</div>
														</a></li>
														<li class="notification"><a href="#">
															<div class="image">
																<img alt="Avatar" src="/assets/img/malafeev.jpg">
															</div>
															<div class="notification-info">
																<span class="text"><span class="user-name">Андрей Малафеев</span> оставил сообщение</span>
															</div>
														</a></li>
													</ul>
												</div>
											</div>
											</div>
										<div class="footer">
											<a href="#">Все уведомления</a>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
								<ul class="dropdown-menu be-connections">
									<li>
										<div class="list">
											<div class="content">
												<div class="row">
													<div class="col-xs-4">
														<a href="#" class="connection-item"><img alt="Outlook" src="/assets/img/outlook.png">Outlook</a>
													</div>
													<div class="col-xs-4">
														<a href="#" class="connection-item"><img alt="Github" src="/assets/img/github.png">GitHub</a>
													</div>
													<div class="col-xs-4">
														<a href="#" class="connection-item"><img alt="Redmine" src="/assets/img/redmine.png">Redmine</a>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-4">
														<a href="#" class="connection-item"><img alt="Outlook" src="/assets/img/outlook.png">Outlook</a>
													</div>
													<div class="col-xs-4">
														<a href="#" class="connection-item"><img alt="Github" src="/assets/img/github.png">GitHub</a>
													</div>
													<div class="col-xs-4">
														<a href="#" class="connection-item"><img alt="Redmine" src="/assets/img/redmine.png">Redmine</a>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>		
			
			<div class="be-left-sidebar">
				<div class="navbar-header">
					<a href="/" class="navbar-brand"><img src="/assets/img/logo.png"></a>
				</div>
				<div class="left-sidebar-wrapper">
					<div class="left-sidebar-spacer">
						<div class="left-sidebar-scroll ps-container ps-theme-default" data-ps-id="8894c805-1861-9f80-5348-96a3ba9722fb">
							<div class="left-sidebar-content">
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"left_menu", 
									array(
									"ROOT_MENU_TYPE" => "top",
									"MAX_LEVEL" => "2",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "Y",
									"COMPONENT_TEMPLATE" => "left_menu",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(
									),
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N"
									),
									false
								);?>		
								
								<div style="height:40px;"></div>
								
								<div style="padding: 20px 20px 0;
								color: #b0b0b0;
								line-height: 30px;
								font-weight: 600;
								text-transform: uppercase;
								font-size: 11px;
								border: 0px;" >Мы в соцсетях</div>
								
								<div class="icon-container">
									<div class="icon">
										<a href=""><span class="mdi mdi-facebook"></span></a>
									</div>
								</div>
								<div class="icon-container">
									<div class="icon">
										<a href=""><span class="mdi mdi-linkedin"></span></a>
									</div>
								</div>
								<div class="icon-container">
									<div class="icon">
										<a href=""><span class="mdi mdi-youtube-play"></span></a>
									</div>
								</div>
								
							</div>
						</div>	
					</div>
				</div>
			</div>
	
	<?}?>