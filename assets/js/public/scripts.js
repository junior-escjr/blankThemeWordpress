var funcoes = {
	init: function(){
		this.slideshow();
	},

	slideshow: function(){
		jQuery('.slide-home').owlCarousel({
			items: 1,
			autoplay: true,
			loop: true,
			onInitialize: function (event) {
			    if ($('.item > img').length === 1) {
			      this.settings.loop = false;
			    }
			}
		})
	}
}

jQuery(function(){
	funcoes.init();
});
