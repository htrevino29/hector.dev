$(document).ready(function() {

				$('.kitchen').magnificPopup({
					items: [
						
						{src: "img/kitchen/kitchen3.jpg", type: 'image'},
						{src: "img/kitchen/kitchen4.jpg", type: 'image'},
						{src: "img/kitchen/kitchen5.jpg", type: 'image'},
						{src: "img/kitchen/kitchen6.jpg", type: 'image'}
						
				
					],
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					},
					image: {
						tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						titleSrc: function(item) {
							return "Kitchens";
							console.log("error");
						}
					}
				});
				$('.interior').magnificPopup({
					items: [
						{src: "img/interior/interior1.jpg", type: 'image'},
						{src: "img/interior/interior2.jpg", type: 'image'},
						{src: "img/interior/interior3.jpg", type: 'image'},
						{src: "img/interior/interior4.jpg", type: 'image'},

					],
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					},
					image: {
						tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						titleSrc: function(item) {
							return "Living Spaces";
							console.log("error");
						}
					}
				});
				$('.exterior').magnificPopup({
					items: [
						{src: "img/exterior/exterior1.jpg", type: 'image'},
						{src: "img/exterior/exterior2.jpg", type: 'image'},
						{src: "img/exterior/exterior3.jpg", type: 'image'},
						{src: "img/exterior/exterior4.jpg", type: 'image'},
						{src: "img/exterior/exterior5.jpg", type: 'image'},
						{src: "img/exterior/exterior6.jpg", type: 'image'},
						{src: "img/exterior/exterior7.jpg", type: 'image'},
						{src: "img/exterior/exterior8.jpg", type: 'image'}
					
					],
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					},
					image: {
						tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						titleSrc: function(item) {
							return "Heavenly Nest";
							console.log("error");
						}
					}
				});
				$('.details').magnificPopup({
					items: [
						{src: "img/details/details1.jpg", type: 'image'},
						{src: "img/details/details2.jpg", type: 'image'},
						{src: "img/details/details3.jpg", type: 'image'}
						

					],
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					},
					image: {
						tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						titleSrc: function(item) {
							return "Custom Details";
							console.log("error");
						}
					}
				});
				$('.fireplace').magnificPopup({
					items: [
						{src: "img/fireplace/fireplace1.jpg", type: 'image'},
						{src: "img/fireplace/fireplace2.jpg", type: 'image'}
						

					],
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					},
					image: {
						tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						titleSrc: function(item) {
							return "Fire Place";
							console.log("error");
						}
					}
				});
				$('.bath').magnificPopup({
					items: [
						{src: "img/bath/bath1.jpg", type: 'image'},
						{src: "img/bath/bath2.jpg", type: 'image'},
						{src: "img/bath/bath3.jpg", type: 'image'}
						

					],
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					},
					image: {
						tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						titleSrc: function(item) {
							return "Bath";
							console.log("error");
						}
					}
				});
});