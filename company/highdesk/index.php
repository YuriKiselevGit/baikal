<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetPageProperty("title", "Байкал Электроникс");
	$APPLICATION->SetTitle("Доска почета");
	
	$filter = Array("UF_DESK"=> true);
	$arParams["SELECT"] = array("UF_*");
	$rsUsers = CUser::GetList(($by="id"), ($order="asc"), $filter, $arParams);						
	$arUsers = array();
	while($arItem = $rsUsers->GetNext())
	{
		$arUsers[] = $arItem;
	}	
	
	$rsRewards = CUserFieldEnum::GetList(array(), array("USER_FIELD_NAME" => "UF_REWARDS"));
	while($arItem = $rsRewards->GetNext())
	{
		$arReward[$arItem['ID']] = $arItem;	
	}	
	
?>	

<div class="be-content">
	<div class="header-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Доска почета</h1>            
			</div>
		</div>
	</div>
	<div class="full-content main-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="rwl-carousel rwl-theme owl-loaded slide-four">
					<div class="owl-stage-outer">
						<div class="owl-stage">
							<?
								$num = 0;								
								foreach($arUsers as $arItem)
								{?>
								
								<div class="owl-item">
									<div class="row"> 
										<div class="col-md-4 img-dark text-center">
											<?$ind=$num-1;?>
											<?if($num==0) $ind=count($arUsers)-1;?>
											
											<img src="<?echo CFile::GetPath($arUsers[$ind]['PERSONAL_PHOTO'])?>" class="img-rounded img-responsive">
										</div>
										<div class="col-md-4 img-center text-center">
											<img src="<?echo CFile::GetPath($arItem['PERSONAL_PHOTO'])?>" class="img-rounded img-responsive">
											<h6><?echo $arItem['NAME'].' '.$arItem['LAST_NAME']?></h6>
											<span class="small"><?echo $arItem['WORK_POSITION']?></span>
										</div>
										<div class="col-md-4 img-dark text-center">
											<?$ind2=$num+1;?>
											<?if($num==(count($arUsers)-1)) $ind2=0;?>
											<img src="<?echo CFile::GetPath($arUsers[$ind2]['PERSONAL_PHOTO'])?>" class="img-rounded img-responsive">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<p class="small text-muted"><?=$arItem['UF_DATE_DOSKA']?></p>
											<p><?=$arItem['UF_TEXT_DOSKA']?></p>
										</div>
										<div class="col-md-12">
											<h3>Награды</h3>
										</div>
									</div>
									<div class="row">
										<?
											
											foreach($arItem['UF_REWARDS'] as $reward)
											{												
												?>
												<div class="col-md-4">
													<p><i class="fas fa-2x <?=$arReward[$reward]['XML_ID']?> text-primary"></i> <?=$arReward[$reward]['VALUE']?></p>
												</div>
										<?	}	?>									
									</div>
								</div>
								<?
									$num = $num + 1;
								}?>
								
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>																																																							