//TypeKit async loading
(function(d) {
	var config = {
		kitId: 'bod2caf',
		scriptTimeout: 3000,
		async: true
	},
	h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);
	  
$(document).ready(function() {
	
	$('.nav').on('click',function(e){				
		href = $(this).attr("href");
		if (!!(window.history && history.pushState)) {
			history.pushState(null, document.title, href);
		}		
		loadContent(href);			
		e.preventDefault();		
	});	
	
	function loadContent(href) {
		//Read and split the current URL
		hrefparts = href.split('/');
		//var target = $(this).data('page');
		$('.nav').removeClass('active');
		$('.nav[data-page = '+hrefparts[1]+']').addClass('active');
		//$(this).addClass('active');	
		
	   	$.ajax({
			type: 'get',
			url: href,
			success: function(result){
				$('#container section').fadeOut('fast',function(){
					$('#container').html(result);
				});			
			}								
		});		
	}
	
	//On clicking back and forward.
	//First check for history existence to prevent script errors in IE
	//IE 9< uses page reloads as a fallback.
	if (!!(window.history && history.pushState)) {
		window.addEventListener('popstate', function(event) {
			href = document.location.pathname;
			loadContent(href);
		});
	}	
		 
	//Flipping header animation	 
	$('h1').hover(function(){
		animateHeadline($('.headline'));		
	})
	 
	function animateHeadline($headlines) {
		$headlines.each(function(){
			var headline = $(this);
			//trigger animation
			setTimeout(function(){ hideWord( headline.find('.is-visible') ) }, 100);
		});
	}	
	function hideWord($word) {
		var nextWord = takeNext($word);
		switchWord($word, nextWord);
		//setTimeout(function(){ hideWord(nextWord) }, animationDelay);
	}
	 
	function takeNext($word) {
		return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
	}
	 
	function switchWord($oldWord, $newWord) {
		$oldWord.removeClass('is-visible').addClass('is-hidden');
		$newWord.removeClass('is-hidden').addClass('is-visible');
	}	
	
});