<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<div class="be-content">
	<div class="header-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Расположение сотрудников</h1>            
			</div>
		</div>
	</div>
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<?	
				$activeoffice = 0;
				if(!isset($_REQUEST['office']) OR $_REQUEST['office']=='') $_REQUEST['office'] = 0; else $activeoffice = $_REQUEST['office'];
				if(CModule::IncludeModule("iblock")) {
				
				$arSelect = array("ID", "IBLOCK_ID", "NAME", "UF_*");
				$arFilter = array('IBLOCK_ID' => 17, 'DEPTH_LEVEL' => 1);
				$rsSections = CIBlockSection::GetList(array('NAME' => 'ASC'), $arFilter, false, $arSelect);

					
					while ($arSection = $rsSections->Fetch())
					{	
						if($activeoffice==0) {$activeoffice = $arSection['ID'];	};
					?>						
						<a href="/company/collocation/?office=<?=$arSection['ID']?>" class="btn btn-space btn-default btn-lg <?if($activeoffice==$arSection['ID']) {echo 'active'; $arCurSection = $arSection;}?>"><?=$arSection['NAME']?></a>
					<?	
					}
				}			
			?>
				
			</div>
		</div>
		
		<?if($arCurSection['UF_MAP']!='') {?>
		<div class="row">
            <div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="map" style="width: 938px; height: 624px; background:url(<?echo CFile::GetPath($arCurSection['UF_MAP'])?>) bottom center no-repeat">
							<svg version="1.1" id="_x3C_Group_x3E__148_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="938px" height="624px" viewBox="0 0 938 624" xml:space="preserve">
								<g id="sa1">
									<rect class="st0" x="55.3" y="65" width="34" height="17"/>
								</g>
								<g id="sa2">
									<rect class="st0" x="63.5" y="83.2" width="17" height="34"/>
								</g>
								<g id="sb1">
									<rect class="st0" x="115.7" y="65" width="34" height="17"/>
								</g>
								<g id="sb2">
									<rect class="st0" x="123.8" y="83.2" width="17" height="34"/>
								</g>
								<g id="sc1">
									<rect class="st0" x="173.7" y="65" width="34" height="17"/>
								</g>
								<g id="sc2">
									<rect class="st0" x="181.8" y="83.2" width="17" height="34"/>
								</g>
								<g id="sd1">
									<rect x="231.7" y="65" width="34" height="17"/>
								</g>
								<g id="sd2">
									<rect x="231.8" y="83.2" width="17" height="34"/>
								</g>
								<g id="se1">
									<rect x="289.7" y="65" width="34" height="17"/>
								</g>
								<g id="se2">
									<rect x="289.8" y="83.2" width="17" height="34"/>
								</g>
								<g id="se3">
									<rect x="289.8" y="118.2" width="17" height="34"/>
								</g>
								<g id="se4">
									<polygon points="393.3,99 359.3,99 359.3,82 376.9,82 376.9,65.1 393.3,65 "/>
								</g>
								<g id="sf1">
									<polygon points="394.7,99 394.7,65 411.7,65 411.7,82.6 428.6,82.6 428.7,98.9 "/>
								</g>
								<g id="sf2">
									<polygon points="394.7,100 428.7,100 428.7,117 411.1,117 411.1,133.9 394.8,134 "/>
								</g>
								<g id="sg2">
									<polygon points="393.3,100 393.3,134 376.3,134 376.3,116.4 359.4,116.4 359.3,100.1 "/>
								</g>
								<g id="sg2">
									<polygon points="393.3,179 359.3,179 359.3,162 376.9,162 376.9,145.1 393.3,145 "/>
								</g>
								<g id="sf3">
									<polygon points="394.7,179 394.7,145 411.7,145 411.7,162.6 428.6,162.6 428.7,178.9 "/>
								</g>
								<g id="sg4">
									<polygon points="510,178 476,178 476,161 493.6,161 493.6,144.1 509.9,144 "/>
								</g>
								<g id="s">
									<polygon points="511.3,178 511.3,144 528.3,144 528.3,161.6 545.3,161.6 545.3,177.9 "/>
								</g>
								<g id="s">
									<polygon points="511.3,179 545.3,179 545.3,196 527.8,196 527.8,212.9 511.4,213 "/>
								</g>
								<g id="s">
									<polygon points="510,179 510,213 493,213 493,195.4 476.1,195.4 476,179.1 "/>
								</g>
								<g id="s">
									<polygon points="510,278 476,278 476,261 493.6,261 493.6,244.1 509.9,244 "/>
								</g>
								<g id="s">
									<polygon points="511.3,278 511.3,244 528.3,244 528.3,261.6 545.3,261.6 545.3,277.9 "/>
								</g>
								<g id="s">
									<polygon points="511.3,279 545.3,279 545.3,296 527.8,296 527.8,312.9 511.4,313 "/>
								</g>
								<g id="s">
									<polygon points="510,279 510,313 493,313 493,295.4 476.1,295.4 476,279.1 "/>
								</g>
								<g id="s">
									<polygon points="626,178 592,178 592,161 609.6,161 609.6,144.1 625.9,144 "/>
								</g>
								<g id="s">
									<polygon points="627.3,178 627.3,144 644.3,144 644.3,161.6 661.3,161.6 661.3,177.9 "/>
								</g>
								<g id="s">
									<polygon points="627.3,179 661.3,179 661.3,196 643.8,196 643.8,212.9 627.4,213 "/>
								</g>
								<g id="s">
									<polygon points="626,179 626,213 609,213 609,195.4 592.1,195.4 592,179.1 "/>
								</g>
								<g id="s">
									<rect x="765.5" y="334.2" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="765.5" y="382.2" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="433.7" y="344.3" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="433.7" y="362.3" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="376.2" y="557.2" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="520.3" y="434.5" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="580.3" y="434.5" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="860.3" y="434.5" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="825.3" y="434.5" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="851.5" y="452.5" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="875" y="520.3" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="875.2" y="538.5" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="875.7" y="577.5" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="839.7" y="577.5" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="768.2" y="542.5" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="759.7" y="577.5" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="695.9" y="559.6" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="660.8" y="559.8" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="881.8" y="241.2" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="55.3" y="156.7" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="55.3" y="189.3" width="96.3" height="17"/>
								</g>
								<g id="s">
									<rect x="55.7" y="259.3" width="96.3" height="17"/>
								</g>
								<g id="s">
									<rect x="499.3" y="343.7" width="96.3" height="17"/>
								</g>
								<g id="s">
									<rect x="499.3" y="393.7" width="96.3" height="17"/>
								</g>
								<g id="s">
									<rect x="568.9" y="560.3" width="17" height="34"/>
								</g>
								<g id="s">
									<rect x="454.9" y="560.3" width="34" height="34"/>
								</g>
								<g id="s">
									<rect x="609.9" y="560.3" width="34" height="34"/>
								</g>
								<g id="s">
									<rect x="533.8" y="560.4" width="34" height="17"/>
								</g>
								<g id="s">
									<rect x="489.8" y="560.4" width="34" height="17"/>
								</g>
								<g id="s">
									<polygon points="743,178 709,178 709,161 726.6,161 726.6,144.1 742.9,144 "/>
								</g>
								<g id="s">
									<polygon points="744.3,178 744.3,144 761.3,144 761.3,161.6 778.3,161.6 778.3,177.9 "/>
								</g>
								<g id="s">
									<polygon points="744.3,179 778.3,179 778.3,196 760.8,196 760.8,212.9 744.4,213 "/>
								</g>
								<g id="s">
									<polygon points="743,179 743,213 726,213 726,195.4 709.1,195.4 709,179.1 "/>
								</g>
								<g id="s">
									<polygon points="859,178 825,178 825,161 842.6,161 842.6,144.1 858.9,144 "/>
								</g>
								<g id="s">
									<polygon points="860.3,178 860.3,144 877.3,144 877.3,161.6 894.3,161.6 894.3,177.9 "/>
								</g>
								<g id="s">
									<polygon points="860.3,179 894.3,179 894.3,196 876.8,196 876.8,212.9 860.4,213 "/>
								</g>
								<g id="s">
									<polygon points="859,179 859,213 842,213 842,195.4 825.1,195.4 825,179.1 "/>
								</g>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<? } else echo '<h4>Нет данных для отображения</h4>';

	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "CODE");
	$arFilter = Array("IBLOCK_ID"=>17, "SECTION_ID" =>$activeoffice);
	
	if(CModule::IncludeModule("iblock")) {
		
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	
		while($ob = $res->GetNext()){ 
			$arOfficePlace[$ob['ID']] = $ob;			
		}	
	}

?>	
<script>
var regions=[
	<?
	foreach($arOfficePlace as $place)
	
	{	
		$arFilter = array("UF_OFFICE_PLACE" => $place['ID']);
		$arParams["SELECT"] = array("UF_*");
		$rsUsers = CUser::GetList(($by="id"), ($order="asc"), $arFilter, $arParams);
	
		unset($arUser);
		if ($rsUsers->SelectedRowsCount() > 0 )
			{ $arUser = $rsUsers->Fetch(); }
		else 
			{ $arUser['NAME'] = 'свободно';}		
		?>
		{
			"region_name": "<?=$place['NAME']?>",
			"region_code": "<?=$place['CODE']?>",
			"person": "<?echo $arUser['NAME'].' '.$arUser['LAST_NAME']?>",
			"post": "<?echo $arUser['WORK_POSITION']?>",
			"dept": "<?echo $arUser['WORK_DEPARTMENT']?>",
			"phone": "<?echo $arUser['WORK_FAX']?>",
			"email": "<?echo $arUser['EMAIL']?>"
		},
<?}?>			
];
</script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>