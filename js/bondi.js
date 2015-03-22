$(document).ready(function(){
	var currentPage = $('body').attr('id')
	console.log(currentPage)
	$('.' + currentPage).parent().addClass('active-page')
})