$(function(){
	console.log('default here');
	$('#form-data').on('submit', function(event){
		event.preventDefault();
		var term = $('[name="data-entry"]',event.currentTarget).val();
		console.log('data:', term);
		$.ajax({
			method:'post',
			url:'/api/data.php',
			data:{term:term}
		}).success(function(data){
			console.log('data: ', data);
		}).error(function(){
			console.log('error');
		});
	});
});