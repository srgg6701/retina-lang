$(function(){
	// on submit form
	$('#form-data').on('submit', function(event){
		event.preventDefault();
		var term = $('[name="data-entry"]',event.currentTarget).val();
		//console.log('data:', term);
		$.ajax('/api/data.php',{
			method:'post',
			data:{term:term}
		}).done(function(data){
			console.log('data: ', data);
		}).fail(function(){
			console.log('error');
		});
	});
});