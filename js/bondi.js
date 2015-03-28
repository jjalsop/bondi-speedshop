$(document).ready(function(){

	// init foundation (for form validation via abide)
	$('#form1_name, #form1_email, #form1_message').prop('required', true)
	$('#form1_email').prop('pattern', 'email')
	$('form').attr('data-abide', '')
	$(document).foundation();

	setTimeout(function(){
		$('.success').fadeOut(1000)
	}, 5000)

	// current page indicator
	var currentPage = $('body').attr('id')
	$('.' + currentPage).parent().addClass('active-page')

	// mobile menu trigger
	$('.mobile-menu-trigger a').click(function(e){
		e.preventDefault()
		$('#main-nav ul').toggle()
	})

	$("#slider").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      pagination: false,
      navigationText: ['<img src="img/arrow-left.jpg">', '<img src="img/arrow-right.jpg">']
  });

	// Back to top functionality
	  $(".scroll").click(function(event){
	    //prevent the default action for the click event
	    event.preventDefault();

	    //get the full url - like mysitecom/index.htm#home
	    var full_url = this.href;

	    //split the url by # and get the anchor target name - home in mysitecom/index.htm#home
	    var parts = full_url.split("#");
	    var trgt = parts[1];

	    //get the top offset of the target anchor
	    var target_offset = $("#"+trgt).offset(); 
	    var target_top = target_offset.top - 280;

	    //goto that anchor by setting the body scroll top to anchor top
	    $('html, body').animate({scrollTop:target_top}, 750);
	    var chosenDiv = $("#"+trgt)

	    
	  });

})