var App = (function () {
  'use strict';
  
  App.dashboard = function( ){

    //Show loading class toggle
    function toggleLoader(){
      $('.toggle-loading').on('click',function(){
        var parent = $(this).parents('.widget, .panel');

        if( parent.length ){
          parent.addClass('be-loading-active');

          setTimeout(function(){
            parent.removeClass('be-loading-active');
          }, 3000);
        }
      });
    }

    //Calendar widget
    function calendar(){
      var widget = $("#calendar-widget");
      var now  = new Date();
      var year = now.getFullYear();
      var month = now.getMonth();

      var events = [year + '-' + (month+1) + '-16', year + '-' + (month+1) + '-20'];

      function checkRows(datepicker){
        var dp = datepicker.dpDiv;
        var rows = $("tbody tr", dp).length;
        
        if( rows == 6 ){
          dp.addClass('ui-datepicker-6rows');
        }else{
          dp.removeClass('ui-datepicker-6rows');
        }
      }

      //Extend default datepicker to support afterShow event
      $.extend($.datepicker, {
        _updateDatepicker_original: $.datepicker._updateDatepicker,
        _updateDatepicker: function(inst) {
          this._updateDatepicker_original(inst);
          var afterShow = this._get(inst, 'afterShow');
          if (afterShow){
            afterShow.apply(inst, [inst]);
          }
        }
      });

      if (typeof jQuery.ui != 'undefined') {
        widget.datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          beforeShowDay: function(date) {
            var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
            if($.inArray(y + '-' + (m+1) + '-' + d, events) != -1)  {
              return [true, 'has-events', 'This day has events!'];
            }else{
              return [true, "", ""];
            }
          },
          afterShow:function(o){
            //If datepicker has 6 rows add a class to the widget
            checkRows(o);
          }
        });
      }
    }

    //Loader show
    toggleLoader();
	
	  //Row 4
    calendar();

  };

  return App;
})(App || {});
