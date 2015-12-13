$(function(){
	var dataAsc='data-ask-target',
		duration=300;
	// manage *help* sections
	$('['+dataAsc+']').on('click', function(){
		$('#'+$(this).attr(dataAsc)).toggle(duration); //console.log('data-ask-target',{this:this, section:$('#'+$(this).attr(dataAsc))});
	});
	// hide *help* sections
	$('section.collapse>span:first-child').on('click', function(){
		$(this).parent('.collapse').hide(duration);
	});
	// manage visibility for the raw data block
	$('pre>h4:first-child').on('click', function(){
		$(this).next('.collapse').toggle(duration);
	});
});