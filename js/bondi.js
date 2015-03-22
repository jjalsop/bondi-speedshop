$(document).ready(function(){
	$(document).foundation();
	var currentPage = $('body').attr('id')
	console.log(currentPage)
	$('.' + currentPage).parent().addClass('active-page')
})