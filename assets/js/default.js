$(function(){
	var dataAsc='data-ask-target',
		duration=300;
	$('['+dataAsc+']').on('click', function(){
		$('#'+$(this).attr(dataAsc)).toggle(duration); //console.log('data-ask-target',{this:this, section:$('#'+$(this).attr(dataAsc))});
	});
	$('section.collapse>span:first-child').on('click', function(){
		$(this).parent('.collapse').hide(duration);
	});
});