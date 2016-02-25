(function(d) {
	var config = {
		kitId: 'bod2caf',
		scriptTimeout: 3000,
		async: true
	},
	h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);
	  
$(document).ready(function() {
	
	$('#btn-about-me').on('click',function(e){
		
	   	$.ajax({
			type: 'get',
			url: '/about',
			success: function(result){
				$('#intro').fadeOut('fast',function(){
					$('#container').html(result);
				});			
			}								
		});		
		e.preventDefault();		
	});	
		 
	$('h1').hover(function(){
		animateHeadline($('.cd-headline'));		
	})
	 
	function animateHeadline($headlines) {
		$headlines.each(function(){
			var headline = $(this);
			//trigger animation
			setTimeout(function(){ hideWord( headline.find('.is-visible') ) }, 100);
			//other checks here ...
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