<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Байкал Электроникс");
$APPLICATION->SetTitle("Телефонный справочник");
?>
 <div class="be-content">
        <div class="header-content container-fluid">
        	<div class="row">
            	<div class="col-md-10 col-md-offset-1">
					<h1>Телефонный справочник</h1>            
            	</div>
            </div>
        </div>
        <div class="full-content main-content container-fluid">
        	<div class="row">		
            	<div class="col-md-12">
                      <div class="panel panel-default panel-table">
                        <div class="panel-body">
                          <table id="table1" class="table table-striped table-hover table-fw-widget">
                            <thead>						
                              <tr>
                                <th>Фамилия Имя</th>
                                <th>Подразделение</th>
                                <th>Офис</th>
                                <th>Вн.телефон</th>
                                <th>Мобильный</th>
                                <th>Email</th>
                                <th>Дата рождения</th>
                              </tr>
                            </thead>
                            <tbody>
							<?							
								$filter = Array();
								$arParams["SELECT"] = array("UF_OFFICE");
								$rsUsers = CUser::GetList(($by="id"), ($order="asc"), $filter, $arParams);
								
								$odd = true;
								while($arItem = $rsUsers->GetNext())
								{	
									//pre($arItem);
									$usergroup = '';									
									$arGroups = CUser::GetUserGroup($arItem['ID']);									
									if (in_array(6,$arGroups)) {$usergroup = 'Руководство';}									
								?> 				
							
                              <tr class="<?if($odd) echo 'odd'; else echo 'even'; $odd = (!$odd);?>">
                                <td class="namest"><img width="50px" src="<?echo CFile::GetPath($arItem['PERSONAL_PHOTO'])?>" class="img-circle"><br><strong><a href="/company/employment/?uid=<?=$arItem['ID']?>"><?echo $arItem['NAME'].' '.$arItem['LAST_NAME']?></a></strong><br><span class="text-muted"><?echo $arItem['WORK_POSITION']?></span></td>
                                <td><?=$usergroup?></td>
                                <td><?=$arItem['UF_OFFICE']?></td>
                                <td><?=$arItem['WORK_FAX']?></td>
                                <td><?=$arItem['WORK_PHONE']?></td>
                                <td><?=$arItem['EMAIL']?></td>
                                <td><?=$arItem['PERSONAL_BIRTHDATE']?></td>
                              </tr>
							<?}?>   							
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
        	</div>        	
        </div>        
      </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>