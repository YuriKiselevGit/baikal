<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?
	if ($USER->IsAuthorized()) 
	{	?>
        <div class="footer-content container-fluid">
        	<div class="row">
            	<div class="col-md-12 text-center">
                    <p class="text-uppercase">АО «БАЙКАЛ ЭЛЕКТРОНИКС», 2018</p>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
	<?}?>


<?if(CSite::InDir('/company/structure/')) { ?>
	<script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="/assets/js/app-ui-nestable-lists.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.uiNestableLists();
      });
    </script> 
<?}?>

<?if(CSite::InDir('/company/collocation/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/app-map.js" type="text/javascript"></script> 
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/new/')) { ?>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/lib/datetimepicker/js/locales/bootstrap-datetimepicker.ru.js" charset="UTF-8"></script>
    <script src="assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
$('#datetimepicker').datetimepicker({
  format:'d.m.Y',
  inline:true,
  weekStart: 1,
  minView:'month',
  language:'ru'
});

      });
    </script>
<?}?>

<?if(CSite::InDir('/index.php')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.countTo.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.appear.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
	<script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
    $('.timer').countTo();
    $('.data-info').appear(function() {
        $('.timer').countTo({
  formatter: function (value, options) {
    value = value.toFixed(options.decimals);
    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
    return value;
  }
});
    },{
    	accY: -100
    });


$('.slide-one').owlCarousel({
	autoplay: true,
	autoplayHoverPause: true,
	items: 1,
	loop:true,
    margin:10,
    dots:true,
	dotsEach:true,
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:3000 //Время смены слайда
	});
$('.slide-two').owlCarousel({
	autoplay: true,
	autoplayHoverPause: true,
	items: 1,
	loop:true,
    margin:10,
    dots:true,
	dotsEach:true,
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:3000 //Время смены слайда
});
$('.slide-three').owlCarousel({
	autoplay: true,
	autoplayHoverPause: true,
	items: 3,
	loop:true,
    margin:10,
    dots:true,
	dotsEach:true,
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:5000 //Время смены слайда
});
$('.slide-four').owlCarousel({
	autoplay: true,
	autoplayHoverPause: true,
	items: 5,
	loop:true,
    margin:10,
    dots:false,
	dotsEach:false,
		smartSpeed:3000, //Время движения слайда
		autoplayTimeout:5000 //Время смены слайда
});
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/comandirovki/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script src="/assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="/assets/lib/datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<script type="text/javascript" src="/assets/lib/datetimepicker/js/locales/bootstrap-datetimepicker.ru.js" charset="UTF-8"></script>
    <script src="/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets/js/app-form-elements.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      	App.formElements();
      });
    </script>		
<?}?>	

<?if(CSite::InDir('/company/leadership/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
<?}?>	

<?if(CSite::InDir('/company/new_employee/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>	
<?}?>		

<?if(CSite::InDir('/company/dms/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>	
<?}?>

<?if(CSite::InDir('/company/faq/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/glossariy/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/news/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/lib/datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<script type="text/javascript" src="/assets/lib/datetimepicker/js/locales/bootstrap-datetimepicker.ru.js" charset="UTF-8"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
$('#datetimepicker').datetimepicker({
  format:'d.m.Y',
  inline:true,
  weekStart: 1,
  minView:'month',
  language:'ru'
});

      });
    </script>
<?}?>

<?if(CSite::InDir('/company/vacancy/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery.maskedinput/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="/assets/js/app-form-masks.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      	App.masks();
      	$('form').parsley();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/gallery/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery.magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
	<script src="/assets/js/magnific-popup-options.js"></script>
    <script src="/assets/lib/masonry/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="/assets/js/app-page-gallery.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	
      });
      
      $(window).on('load',function(){
      	App.pageGallery();
      });
    </script>
<?}?>

<?if(CSite::InDir('/404.html')) { ?>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/spravochnik/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>  
    <script src="/assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="/assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="/assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="/assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="/assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="/assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="/assets/js/app-tables-datatables.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/employment/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-map.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/highdesk/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.countTo.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.appear.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
$('.slide-four').owlCarousel({
    navText: ['<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>',
              '<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>'],
    autoplay:true,
	autoplayHoverPause: true,
	items: 1,
	loop:true,
	nav: true,
    margin:10,
    dots:false,
	dotsEach:false,
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:5000 //Время смены слайда
});
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/documents/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/voprosruk/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script src="/assets/lib/fuelux/js/wizard.js" type="text/javascript"></script>
    <script src="/assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="/assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery.maskedinput/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="/assets/js/app-form-masks.js" type="text/javascript"></script>
    <script src="/assets/js/app-form-elements.js" type="text/javascript"></script>
    <script src="/assets/js/app-form-wizard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      	App.masks();
      	App.wizard();
      	$('form').parsley();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/bankidea/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script src="/assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="/assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery.maskedinput/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="/assets/js/app-form-masks.js" type="text/javascript"></script>
    <script src="/assets/js/app-form-elements.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      	App.masks();
      	$('form').parsley();
      });
    </script>
<?}?>

<?if(CSite::InDir('/search/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
<?}?>

<?if(CSite::InDir('/company/services/')) { ?>
    <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="/assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
<?}?>



	</body>
</html>