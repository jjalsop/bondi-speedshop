$(document).ready(function(){

	// init foundation (for form validation via abide)
	$(document).foundation();

	// current page indicator
	var currentPage = $('body').attr('id')
	console.log(currentPage)
	$('.' + currentPage).parent().addClass('active-page')

	// mobile menu trigger
	$('.mobile-menu-trigger a').click(function(e){
		e.preventDefault()
		$('#main-nav ul').toggle()
	})

})