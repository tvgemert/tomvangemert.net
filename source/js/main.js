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
	
	$(document).on('click','.nav',function(e){				
		e.preventDefault();		
		href = $(this).attr("href");
		if (!!(window.history && history.pushState)) {
			history.pushState(null, document.title, href);
		}		
		loadContent(href);					
	});		
	
	//On clicking back and forward.
	//First check for history existence to prevent script errors in IE
	//IE 9< uses page reloads as a fallback.	
	if (!!(window.history && history.pushState)) {
		window.addEventListener('popstate', function(event) {
			href = document.location.pathname;
			loadContent(href);
		});
	}	
	
	function loadContent(href) {
		//Read and split the current URL
		hrefparts = href.split('/');
		if (hrefparts[1]=='') hrefparts[1] = 'home';
		
		$('body').attr('id',hrefparts[1]);
		$('.nav').removeClass('active');
		$('.nav[data-page = '+hrefparts[1]+']').addClass('active');
				
	   	$.ajax({
			type: 'get',
			url: href,
			success: function(result){
				$('#container section').fadeOut(200,function(){
					$('#container').html(result);
					$("html, body").animate({ scrollTop: 0 }, 200);
				});			
			}							
		});		
	} 
	
});