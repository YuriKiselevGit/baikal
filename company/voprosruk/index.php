<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Байкал Электроникс");
$APPLICATION->SetTitle("Вопросы руковдству");
?>

    <div class="be-content">
        <div class="header-content container-fluid">
        	<div class="row">
            	<div class="col-md-10 col-md-offset-1">
					<h1>Вопросы руководству</h1>            
            	</div>
            </div>
        </div>
        <div class="full-content main-content container-fluid">
        	<div class="row">
            	<div class="col-md-10 col-md-offset-1">
					<h3>Задать вопрос</h3>
                </div>
            </div>
        	<div class="row">
            	<div class="col-md-6 col-md-offset-1">
                  <form action="#" id="form_ideya" class="form-horizontal group-border-dashed">
					<div class="row">
                         <div class="col-md-6">
					<div class="form-group">
                            <label>Кому</label>
                            <select name="bossemail" class="select2">
							<?
								$filter = Array("GROUPS_ID"=> Array(6));
								$rsUsers = CUser::GetList(($by="id"), ($order="asc"), $filter);						
							
							while($arItem = $rsUsers->GetNext())
							{?>						
                                <option value="<?echo $arItem['EMAIL'].', '.$arItem['NAME'].' '.$arItem['LAST_NAME']?>"><?echo $arItem['NAME'].' '.$arItem['LAST_NAME']?></option>                                
							<?}?>	
								
                            </select>
                          </div>
                          </div>
                         <div class="col-md-6">
						<div class="be-checkbox inline">
                        <p>&nbsp;</p>
                          <input id="anonim"  type="checkbox">
                          <label for="anonim">Отправить анонимно</label>
                          </div>
                        </div>
						<? global $USER;						
						?>
						<input type="hidden" name="email" value="<?=CUser::GetEmail()?>">
						<input type="hidden" name="user" value="<?=CUser::GetFullName()?>">
                    </div>
					<div class="form-group">
                      <label>Ваш вопрос</label>
                      <textarea required data-parsley-minlength="20" placeholder="Введите текст длинною не менее 30 символов" value="" name="voprosruk" class="form-control"></textarea>
					</div>
					<div class="form-group">
                          <button type="submit" onclick="send_email();" class="btn btn-rounded btn-space btn-primary">Отправить</button>
                          <!--<button type="button" data-toggle="modal" data-target="#md-success" class="btn btn-rounded btn-space btn-primary">[!]</button>
                          <button type="reset" class="btn btn-rounded btn-space btn-default">Сбросить</button>-->
                    </div>
                </form>
                </div>
            </div>
        </div>
        
      </div>
	  
<script>
	function send_email() {
		var form = $('#form_ideya').serialize();
		$.get("/ajax/sendvop.php", form, function(data) {
			
		});
		$('#md-success').modal('show');
		return true;
	}	  

</script>		  

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>