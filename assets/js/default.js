$(function(){
	var callMethod,
		$results_clear=$('#results-clear'),
		$content=$('#content');

	$results_clear.on('click', function(){
		$content.html('');
		$(this).addClass('invisible');
	});
	//
	$('[name="api-method"]').on('click', function(){
		callMethod=this.id;
		$('.visibility')[(this.id=='getSimilarTerms')? 'show':'hide']();
	});
	// on submit form
	$('#form-data').on('submit', function(event){
		event.preventDefault();
		var $checked = $('[name="api-method"]:checked'),
			term = $('[name="data_entry"]',event.currentTarget).val() || '',
			errors = [];
		if(!$checked.length){
			errors.push('You should choose a method');
		}
		if($checked[0].id=='getSimilarTerms'&&!term){
			errors.push('You should point the term for the chosen method');
		}
		if(errors.length){
			var mess='';
			for(var i= 0, j=errors.length; i<j; i++){
				if(i) mess+='\n';
				mess+=errors[i];
			}
			alert(mess);
			return false;
		}

		var api_method = $checked[0].id,
			retina_name = $('[name="retina_name"] option:selected').val(),
			context_id = $('#context-id').val(),
			start_index = $('#start-index').val(),
			max_results = $('#max-results').val(),
			pos_type = $('[name="pos_type"] option:selected').val(),
			get_fingerprint = $('[name="get_fingerprint"] option:selected').val(),
			$wait=$('#h4-results>img');
		//console.log('data:', term);
		$.ajax('/api/data.php',{
			method:'post',
			data:{
				term:term,
				api_method:api_method,
				retina_name:retina_name,
				context_id:context_id,
				start_index:start_index,
				max_results:max_results,
				pos_type:pos_type,
				get_fingerprint:get_fingerprint
			},
			beforeSend: function() {
				$content.html('');
				$wait.fadeIn(300);
			}
		}).done(function(data){
			console.log('data: ', data);
			$content.html(data);
			$results_clear.removeClass('invisible');
		}).fail(function(){
			console.log('error');
		}).complete(function(){
			$wait.fadeOut(300);
		});
	});
});