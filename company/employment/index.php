<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сотрудник");
?>
      <div class="be-content">
        <div class="header-content container-fluid">
        	<div class="row">
            	<div class="col-md-10 col-md-offset-1">
					<h1>Сотрудник</h1>            
            	</div>
            </div>
        </div>
        <div class="user-content main-content container-fluid">
			<?
				global $USER;				
				if($_REQUEST['uid']!='') $arFilter = array("ID" => $_REQUEST['uid']); else $arFilter = array("ID" => $USER->GetID());
				$arParams["SELECT"] = array("UF_OFFICE", "UF_OFFICE_PLACE", "UF_CHIEF");
				$rsUsers = CUser::GetList(($by="id"), ($order="asc"), $arFilter, $arParams);
				$arItem = $rsUsers->Fetch();
				
				$usergroup = '';									
				$arGroups = CUser::GetUserGroup($arItem['ID']);									
				if (in_array(6,$arGroups)) {$usergroup = 'Руководство';}	
				
				$arSelect = Array("ID", "IBLOCK_ID", "NAME", "CODE");
				$arFilter = Array("IBLOCK_ID"=>17, "SECTION_ID" =>33);
				
				if(CModule::IncludeModule("iblock")) {
					
				$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
				
					while($ob = $res->GetNext()){ 
						$arOfficePlace[$ob['ID']] = $ob;			
					}	
				}				
			?>		
        	<div class="row">
            	<div class="col-md-2 col-md-offset-1">
                	<img src="<?echo CFile::GetPath($arItem['PERSONAL_PHOTO'])?>" class="img-rounded img-responsive">
                </div>
            	<div class="col-md-6">
                <h3><?echo $arItem['NAME'].' '.$arItem['LAST_NAME']?></h3>
                <p class="text-muted small"><?echo $arItem['WORK_POSITION']?></p>
                <p><strong>Руководитель:</strong> <a href="#"> <?echo $arItem['UF_CHIEF']?></a></p>
                <p><strong>Подразделение:</strong> <?=$usergroup?></p>
                <p><strong>День рождения:</strong> <?echo $arItem['PERSONAL_BIRTHDATE']?></p>
                <p><strong>Внутренний телефон:</strong> <?echo $arItem['WORK_FAX']?></p>
                <p><strong>Мобильный телефон:</strong> <?echo $arItem['WORK_PHONE']?></p>
                <p><strong>Email:</strong> <?echo $arItem['EMAIL']?></p>
                <p><strong>Офисное пространство:</strong> <?echo $arOfficePlace[$arItem['UF_OFFICE_PLACE']]['NAME']?></p>
                <p><strong>Местоположение:</strong> </p>
				<p><strong>Командировки:</strong> <a href="/company/comandirovki/?uid=<?=$arItem['ID']?>">перейти</a></p>
                </div>
            </div>
			
        	<div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                	<div class="map" style="width: 938px; height: 624px; background:url(/assets/img/seat.png) bottom center no-repeat">
					<svg version="1.1" id="_x3C_Group_x3E__148_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="938px" height="624px" viewBox="0 0 938 624" xml:space="preserve">
					    <g id="sa1" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sa1') echo 'class="current"';?>>
							<rect x="55.3" y="65" width="34" height="17"/>
						</g>
					    <g id="sa2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sa2') echo 'class="current"';?>>
							<rect x="63.5" y="83.2" width="17" height="34"/>
						</g>					    
						<g id="sb1" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sb1') echo 'class="current"';?>>
							<rect x="115.7" y="65" width="34" height="17"/>
						</g>					    
						<g id="sb2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sb2') echo 'class="current"';?>>
							<rect x="123.8" y="83.2" width="17" height="34"/>
						</g>					    
						<g id="sc1" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sc1') echo 'class="current"';?>>
							<rect x="173.7" y="65" width="34" height="17"/>
						</g>					    
						<g id="sc2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sc2') echo 'class="current"';?>>
							<rect x="181.8" y="83.2" width="17" height="34"/>
						</g>					    
						<g id="sd1" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sd1') echo 'class="current"';?>>
							<rect x="231.7" y="65" width="34" height="17"/>
						</g>					    
						<g id="sd2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sd2') echo 'class="current"';?>>
							<rect x="231.8" y="83.2" width="17" height="34"/>
						</g>					    
						<g id="se1" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'se1') echo 'class="current"';?>>
							<rect x="289.7" y="65" width="34" height="17"/>
						</g>					    
						<g id="se2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'se2') echo 'class="current"';?>>
							<rect x="289.8" y="83.2" width="17" height="34"/>
						</g>					    
						<g id="se3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'se3') echo 'class="current"';?>>
							<rect x="289.8" y="118.2" width="17" height="34"/>
						</g>					    
						<g id="sf1" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sf1') echo 'class="current"';?>>
							<polygon points="393.3,99 359.3,99 359.3,82 376.9,82 376.9,65.1 393.3,65 "/>
						</g>					    
						<g id="sg1" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sg1') echo 'class="current"';?>>
							<polygon points="394.7,99 394.7,65 411.7,65 411.7,82.6 428.6,82.6 428.7,98.9 "/>
						</g>					    
						<g id="sg2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sg2') echo 'class="current"';?>>
							<polygon points="394.7,100 428.7,100 428.7,117 411.1,117 411.1,133.9 394.8,134 "/>
						</g>					    
						<g id="sf2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sf2') echo 'class="current"';?>>
							<polygon points="393.3,100 393.3,134 376.3,134 376.3,116.4 359.4,116.4 359.3,100.1 "/>
						</g>					    
						<g id="sf3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sf3') echo 'class="current"';?>>
							<polygon points="393.3,179 359.3,179 359.3,162 376.9,162 376.9,145.1 393.3,145 "/>
						</g>					    
						<g id="sg3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sg3') echo 'class="current"';?>>
							<polygon points="394.7,179 394.7,145 411.7,145 411.7,162.6 428.6,162.6 428.7,178.9 "/>
						</g>					    
						<g id="sh2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sh2') echo 'class="current"';?>>
							<polygon points="510,178 476,178 476,161 493.6,161 493.6,144.1 509.9,144 "/>
						</g>					    
						<g id="si2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si2') echo 'class="current"';?>>
							<polygon points="511.3,178 511.3,144 528.3,144 528.3,161.6 545.3,161.6 545.3,177.9 "/>
						</g>					    
						<g id="si3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si3') echo 'class="current"';?>>
							<polygon points="511.3,179 545.3,179 545.3,196 527.8,196 527.8,212.9 511.4,213 "/>
						</g>					    
						<g id="sh3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sh3') echo 'class="current"';?>>
							<polygon points="510,179 510,213 493,213 493,195.4 476.1,195.4 476,179.1 "/>
						</g>					    
						<g id="sh4" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sh4') echo 'class="current"';?>>
							<polygon points="510,278 476,278 476,261 493.6,261 493.6,244.1 509.9,244 "/>
						</g>					    
						<g id="si4" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si4') echo 'class="current"';?>>
							<polygon points="511.3,278 511.3,244 528.3,244 528.3,261.6 545.3,261.6 545.3,277.9 "/>
						</g>					    
						<g id="si5" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si5') echo 'class="current"';?>>
							<polygon points="511.3,279 545.3,279 545.3,296 527.8,296 527.8,312.9 511.4,313 "/>
						</g>					    
						<g id="sh5" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sh5') echo 'class="current"';?>>
							<polygon points="510,279 510,313 493,313 493,295.4 476.1,295.4 476,279.1 "/>
						</g>					    
						<g id="sk2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sk2') echo 'class="current"';?>>
							<polygon points="626,178 592,178 592,161 609.6,161 609.6,144.1 625.9,144 "/>
						</g>					    
						<g id="sl2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sl2') echo 'class="current"';?>>
							<polygon points="627.3,178 627.3,144 644.3,144 644.3,161.6 661.3,161.6 661.3,177.9 "/>
						</g>					    
						<g id="sl3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sl3') echo 'class="current"';?>>
							<polygon points="627.3,179 661.3,179 661.3,196 643.8,196 643.8,212.9 627.4,213 "/>
						</g>					    
						<g id="sk3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sk3') echo 'class="current"';?>>
							<polygon points="626,179 626,213 609,213 609,195.4 592.1,195.4 592,179.1 "/>
						</g>					    
						<g id="sn6" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sn6') echo 'class="current"';?>>
							<rect x="765.5" y="334.2" width="17" height="34"/>
						</g>					    
						<g id="sn7" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sn7') echo 'class="current"';?>>
							<rect x="765.5" y="382.2" width="17" height="34"/>
						</g>					    
						<g id="sg6" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sg6') echo 'class="current"';?>>
							<rect x="433.7" y="344.3" width="34" height="17"/>
						</g>					    
						<g id="sg7" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sg7') echo 'class="current"';?>>
							<rect x="433.7" y="362.3" width="34" height="17"/>
						</g>					    
						<g id="sf10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sf10') echo 'class="current"';?>>
							<rect x="376.2" y="557.2" width="17" height="34"/>
						</g>					    
						<g id="si8" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si8') echo 'class="current"';?>>
							<rect x="520.3" y="434.5" width="34" height="17"/>
						</g>					    
						<g id="sk8" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sk8') echo 'class="current"';?>>
							<rect x="580.3" y="434.5" width="34" height="17"/>
						</g>					    
						<g id="ss8" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'ss8') echo 'class="current"';?>>
							<rect x="860.3" y="434.5" width="34" height="17"/>
						</g>					    
						<g id="sr7" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sr7') echo 'class="current"';?>>
							<rect x="825.3" y="434.5" width="34" height="17"/>
						</g>					    
						<g id="sr8" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sr8') echo 'class="current"';?>>
							<rect x="851.5" y="452.5" width="17" height="34"/>
						</g>					    
						<g id="ss9" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'ss9') echo 'class="current"';?>>
							<rect x="875" y="520.3" width="34" height="17"/>
						</g>					    
						<g id="sr9" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sr9') echo 'class="current"';?>>
							<rect x="875.2" y="538.5" width="17" height="34"/>
						</g>					    
						<g id="ss10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'ss10') echo 'class="current"';?>>
							<rect x="875.7" y="577.5" width="34" height="17"/>
						</g>					    
						<g id="sr10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sr10') echo 'class="current"';?>>
							<rect x="839.7" y="577.5" width="34" height="17"/>
						</g>					    
						<g id="sn9" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sn9') echo 'class="current"';?>>
							<rect x="768.2" y="542.5" width="17" height="34"/>
						</g>					    
						<g id="sn10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sn10') echo 'class="current"';?>>
							<rect x="759.7" y="577.5" width="34" height="17"/>
						</g>					    
						<g id="sm10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sm10') echo 'class="current"';?>>
							<rect x="695.9" y="559.6" width="17" height="34"/>
						</g>					    
						<g id="sm9" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sm9') echo 'class="current"';?>>
							<rect x="660.8" y="559.8" width="34" height="17"/>
						</g>					    
						<g id="ss4" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'ss4') echo 'class="current"';?>>
							<rect x="881.8" y="241.2" width="17" height="34"/>
						</g>					    
						<g id="sa3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sa3') echo 'class="current"';?>>
							<rect x="55.3" y="156.7" width="34" height="17"/>
						</g>					    
						<g id="sa4" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sa4') echo 'class="current"';?>>
							<rect x="55.3" y="189.3" width="96.3" height="17"/>
						</g>					    
						<g id="sa5" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sa5') echo 'class="current"';?>>
							<rect x="55.7" y="259.3" width="96.3" height="17"/>
						</g>					    
						<g id="si6" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si6') echo 'class="current"';?>>
							<rect x="499.3" y="343.7" width="96.3" height="17"/>
						</g>					    
						<g id="si7" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si7') echo 'class="current"';?>>
							<rect x="499.3" y="393.7" width="96.3" height="17"/>
						</g>					    
						<g id="sk10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sk10') echo 'class="current"';?>>
							<rect x="568.9" y="560.3" width="17" height="34"/>
						</g>					    
						<g id="sh10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sh10') echo 'class="current"';?>>
							<rect x="454.9" y="560.3" width="34" height="34"/>
						</g>					    
						<g id="sl10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sl10') echo 'class="current"';?>>
							<rect x="609.9" y="560.3" width="34" height="34"/>
						</g>					    
						<g id="si10" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si10') echo 'class="current"';?>>
							<rect x="533.8" y="560.4" width="34" height="17"/>
						</g>					    
						<g id="si9" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'si9') echo 'class="current"';?>>
							<rect x="489.8" y="560.4" width="34" height="17"/>
						</g>					    
						<g id="sm2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sm2') echo 'class="current"';?>>
							<polygon points="743,178 709,178 709,161 726.6,161 726.6,144.1 742.9,144 "/>
						</g>					    
						<g id="sn2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sn2') echo 'class="current"';?>>
							<polygon points="744.3,178 744.3,144 761.3,144 761.3,161.6 778.3,161.6 778.3,177.9 "/>
						</g>					    
						<g id="sn3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sn3') echo 'class="current"';?>>
							<polygon points="744.3,179 778.3,179 778.3,196 760.8,196 760.8,212.9 744.4,213 "/>
						</g>					    
						<g id="sm3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sm3') echo 'class="current"';?>>
							<polygon points="743,179 743,213 726,213 726,195.4 709.1,195.4 709,179.1 "/>
						</g>					    
						<g id="so2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'so2') echo 'class="current"';?>>
							<polygon points="859,178 825,178 825,161 842.6,161 842.6,144.1 858.9,144 "/>
						</g>					    
						<g id="sr2" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sr2') echo 'class="current"';?>>
							<polygon points="860.3,178 860.3,144 877.3,144 877.3,161.6 894.3,161.6 894.3,177.9 "/>
						</g>					    
						<g id="sr3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'sr3') echo 'class="current"';?>>
							<polygon points="860.3,179 894.3,179 894.3,196 876.8,196 876.8,212.9 860.4,213 "/>
						</g>					    
						<g id="so3" <?if($arOfficePlace[$arItem['UF_OFFICE_PLACE']]['CODE'] == 'so3') echo 'class="current"';?>>
							<polygon points="859,179 859,213 842,213 842,195.4 825.1,195.4 825,179.1 "/>
						</g>
						</svg>
                    </div>
                </div>
              </div>
            </div>
          </div>        	
        </div>
      
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>