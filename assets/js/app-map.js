$(function() {

    for(i = 0; i < regions.length; i++) {
        $('#'+ regions[i].region_code)
        .data('region', regions[i]);
    }

    $('.map g').mouseover(function (e) {
        var region_data=$(this).data('region');
        $('<div class="info_panel">' +
            '<b>' + region_data.region_name + '</b><br>' +
            '<b class="text-primary">' + region_data.person + '</b><br>' +
            region_data.post + '<br>' +
            region_data.dept + '<br>' +
            '<b>Внутренний телефон:</b> ' + region_data.phone + '<br>' +
            '<b>E-mail:</b> ' + region_data.email + '<br>' +
            '</div>'
         ).appendTo('body');
    })
	.mouseleave(function () {
  		$('.info_panel').remove();
	})
    .mousemove(function(e) {
        var mouseX = e.pageX, //X coordinates of mouse
            mouseY = e.pageY; //Y coordinates of mouse

        $('.info_panel').css({
            top: mouseY-80,
            left: mouseX - ($('.info_panel').width()/2)
        });
    });

});
