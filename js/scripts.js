




// Tabs on maps page
$('.tabs a').click(function(e){
	var p = $(this).parents('.tabs')
	var p__li = $(this).parents('li');
	var i = p__li.index();
	var t = p.attr('data-target');

	p.find('a').removeClass('active');
	$(this).addClass('active');
	
	// multiply that times -100, add %, and translateX
	$(t).css({
		transform : 'translateX(' + i*-100 + '%)'
	})

	e.preventDefault();
});