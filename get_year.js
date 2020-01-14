var year;
$(document).ready(function() {
	$(".years").bind("click", function(){
		if(year == this.textContent) 
			{
				$('.item-list').empty();
				year = undefined;
			}
		else
		{
			year = this.textContent;
			$.ajax({
				url: 'php/show_items.php',
				type: 'POST',
				dataType: 'html',
				data: {year: year},
				success: success_query
			});
		};			
	});
});
function success_query(data)
{
	$('.item-list').empty();
	$("#"+""+year+"").append(data);
};