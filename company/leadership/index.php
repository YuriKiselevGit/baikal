<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Байкал Электроникс");
	$APPLICATION->SetTitle("Руководство");
?>
<div class="be-content">
	<div class="header-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Руководство</h1>            
			</div>
		</div>
	</div>
	<div class="full-content main-content container-fluid">
		<?
			$filter = Array("GROUPS_ID"=> Array(6));
			$rsUsers = CUser::GetList(($by="id"), ($order="asc"), $filter);						
		?>		
		<div class="row">
			<?
				while($arItem = $rsUsers->GetNext())
			{?>
		
				<div class="col-md-10 col-md-offset-1 rukman">
					<div class="rukman-head">
						<img src="<?echo CFile::GetPath($arItem['PERSONAL_PHOTO'])?>" class="img-responsive">
						<h6><?echo $arItem['NAME'].' '.$arItem['LAST_NAME']?></h6>
						<p><?echo $arItem['WORK_POSITION']?></p>
						<p><a href="/company/employment/?uid=<?=$arItem['ID']?>"><span class="icon mdi mdi-account-circle"></span> Посмотреть профиль</a></p>
						<p><a href="/company/voprosruk/"><span class="icon mdi mdi-comment-text"></span> Задать вопрос</a></p>
					</div>
					<p><?echo html_entity_decode($arItem['WORK_PROFILE']);?></p>
				</div>
				<div class="col-md-12">&nbsp;</div>
			<?}?>  
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>															