var year;
$(document).ready(function() {
	$(".years").bind("mouseenter", function(){
	year = this.textContent;
	$.ajax({
		url: 'php/show_items.php',
		type: 'POST',
		dataType: 'html',
		data: {year: year},
		success: success_query
		});			
	});
	$('#events').bind('mouseleave', function(){
		$('#events').empty();
		$('#left-menu').css({
			width: '20%'
		});
		$('#years').css({
			width:"100%"
		});
	});
	$('#left-menu').bind('mouseleave', function() {
		$('#events').empty();
		$('#left-menu').css({
			width: '20%'
		});
		$('#years').css({
			width:"100%"
		});
	});
});

function success_query(data)
{
	$('#events').empty();
	$("#events").append(data);
	$('#left-menu').css({
		width:"40%"
	});
	$('#years').css({
		width: '50%'
	});
};