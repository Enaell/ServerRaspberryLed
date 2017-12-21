$(document).ready(function () 
{

    $('.gifList').click(function() 
    {
        var text = $( this ).text();
        $( "#gifVal" ).val( text );

	$('.gifList').removeClass('active');
	$(this).addClass('active');
    });

	 $(function () {

	   $('#colorpicker2').farbtastic({ callback: '#color2', width: 230 });
	 });

    $('#accordion1 .panel-collapse').on('shown.bs.collapse', function () 
    {
        $(this).prev().css("background-color","#337ab7");
        $(this).prev().find("a").css("color", "white");

    });

//The reverse of the above on hidden event:

    $('#accordion1 .panel-collapse').on('hidden.bs.collapse', function () 
    {
        $(this).prev().css("background-color", "white");
        $(this).prev().find("a").css("color", "#337ab7");

    });

    $('#accordion2 .panel-collapse').on('shown.bs.collapse', function () 
    {
        $(this).prev().css("background-color","#337ab7");
        $(this).prev().find("a").css("color", "white");

    });

//The reverse of the above on hidden event:

    $('#accordion2 .panel-collapse').on('hidden.bs.collapse', function () 
    {
        $(this).prev().css("background-color", "white");
        $(this).prev().find("a").css("color", "#337ab7");

    });

    $('#accordion3 .panel-collapse').on('shown.bs.collapse', function () 
    {
        $(this).prev().css("background-color","#337ab7");
        $(this).prev().find("a").css("color", "white");

    });

//The reverse of the above on hidden event:

    $('#accordion3 .panel-collapse').on('hidden.bs.collapse', function () 
    {
        $(this).prev().css("background-color", "white");
        $(this).prev().find("a").css("color", "#337ab7");

    });

    $('#accordion4 .panel-collapse').on('shown.bs.collapse', function () 
    {
        $(this).prev().css("background-color","#337ab7");
        $(this).prev().find("a").css("color", "white");

    });

//The reverse of the above on hidden event:

    $('#accordion4 .panel-collapse').on('hidden.bs.collapse', function () 
    {
    $(this).prev().css("background-color", "white");
    $(this).prev().find("a").css("color", "#337ab7");

    });



});

