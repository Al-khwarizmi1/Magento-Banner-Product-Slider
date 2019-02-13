$j(document).ready(function(){
		$j(function(){
			$j('.slider')._TMS({
				prevBu:'.prev',
				nextBu:'.next',
				playBu:'.play',
				duration:800,
				easing:'easeOutQuad',
				preset:'fadeThree',
				pagination:'.pagination',
				slideshow:7000,
				numStatus:false,
				banners:'fade',
				waitBannerAnimation:false,
				progressBar:'<span class="progbar"></span>'})
		})

	 });