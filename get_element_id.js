$(document).ready(function(){
	$('body').on('mouseenter','.sl',function(){
		var item_id = this.id;
		$.ajax({
			url: "php/ssd.php",
			type: "POST",
			data: ({i_id: item_id}),
			dataType: "text",
			success: func_success
		});
	});
});

function func_success(data)
{
	var coords_array = data.split(';');
	$('.icon').remove();
	$('#map-container').append('<img src="images/event_icon.png" class="icon" alt="" />');
	$('.icon').css({
		'rigth':'0',
		'bottom':'0',
		'left': coords_array[0]+'px',
		'top':coords_array[1]+'px',
		'position':'relative'
	});
}