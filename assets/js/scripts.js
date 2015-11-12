var funcoes = {
	init: function(){
		this.slideshow();
	},

	slideshow: function(){
		jQuery('.slide-home').owlCarousel({
			items:1,
		    loop:true,
			autoplay:true
		})
	}
}

jQuery(function(){
	funcoes.init();
});
