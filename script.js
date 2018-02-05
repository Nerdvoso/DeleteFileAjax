$( document ).ready(function() {
   $('.delete-btn').click(function() {
		var id = $(this).closest('tr').attr("id");
		$.ajax({
			type: 'POST',
			url: 'ajax.php',
			data: { 'filename' : $(this).attr('data-file') },
			success: function(data) {
			    if(data == 'success') {
			        $('#' + id).remove();
			    }
			}
		});
	});
});